<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage; // Tambahkan ini


class PhotoController extends Controller
{
    public function index()
    {
        return view('admin.photo.index', [
            'photos' => Photo::orderBy('id', 'desc')->get()
        ]);
    }
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Gambar wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/photo', $fileName);

        // Simpan data blog ke database
        Photo::create([
            'judul' => $request->judul,
            'image' => $fileName,
        ]);

        return redirect(route('photo'))->with('success', 'Data photo berhasil disimpan');
    }
    public function update(Request $request, $id)
    {
        // Cari photo berdasarkan id
        $photo = Photo::find($id);

        // Validasi file, jika ada file image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = ''; // Tidak perlu validasi untuk image jika tidak ada file baru
        }

        // Validasi input
        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi jika ada!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if (File::exists(storage_path('app/public/photo/' . $photo->image))) {
                File::delete(storage_path('app/public/photo/' . $photo->image));
            }

            // Simpan file baru
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/photo', $fileName);
        } else {
            // Jika tidak ada file baru, gunakan file yang lama
            $fileName = $request->old_image;
        }

        // Update data photo
        $photo->update([
            'judul' => $request->judul,
            'image' => $fileName, // Gunakan file baru atau yang lama
        ]);

        // Redirect dengan pesan sukses
        return redirect(route('photo'))->with('success', 'Data photo berhasil diupdate');
    }
    public function destroy($id)
    {
        // Cari photo berdasarkan id
        $photo = Photo::find($id);

        // Cek dan hapus file jika ada di storage
        if (Storage::exists('app/public/photo/' . $photo->image)) {
            Storage::delete('app/public/photo/' . $photo->image);
        }

        // Hapus data photo dari database
        $photo->delete();

        // Redirect dengan pesan sukses
        return redirect(route('photo'))->with('success', 'Data berhasil dihapus');
    }
}
