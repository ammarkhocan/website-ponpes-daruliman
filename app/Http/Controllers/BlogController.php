<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    // Fungsi Index
    public function index()
    {
        return view('admin.blog.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    // Halaman Create
    public function create()
    {
        return view('admin.blog.create');
    }

    // Fungsi Store 
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Gambar wajib diisi!',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/artikel', $fileName);

        // Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        // untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        // Menghapus buffer kesalahan libxml
        libxml_clear_errors();

        // Baca gambar dari deskripsi
        // Asumsi $dom sudah terisi dengan loadHTML sebelumnya
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            // Pastikan $img adalah instance dari DOMElement
            if ($img instanceof \DOMElement) {
                $src = $img->getAttribute('src'); // Menggunakan getAttribute

                if (preg_match('/data:image/', $src)) {
                    preg_match('/data:image\/(?<mime>.*?);/', $src, $groups);
                    $mimetype = $groups['mime'];
                    $fileNameContent = uniqid();
                    $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                    $filePath = "$storage/$fileNameContentRand.$mimetype";

                    // Menggunakan Intervention Image untuk memproses gambar
                    Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                    $new_src = asset($filePath);

                    // Menghapus atribut src dan menambahkan atribut baru
                    $img->removeAttribute('src'); // Menghapus src
                    $img->setAttribute('src', $new_src); // Menambahkan src baru
                    $img->setAttribute('class', 'img-responsive'); // Menambahkan class baru
                }
            }
        }

        // Simpan data blog ke database
        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('blog'))->with('success', 'Data berhasil disimpan');
    }


    // Halaman Edit
    public function edit($id)
    {
        $artikel = Blog::find($id);
        return view('admin.blog.edit', [
            'artikel' => $artikel
        ]);
    }

    // Fungsi Update
    public function update(Request $request, $id)
    {
        $artikel = Blog::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'desc.required' => 'Desc wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/artikel/' . $artikel->image)) {
                \File::delete('storage/artikel/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML(mb_convert_encoding($request->desc, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            // Pastikan bahwa $img adalah instance dari DOMElement
            if ($img instanceof \DOMElement) {
                $src = $img->getAttribute('src');
                if (preg_match('/data:image/', $src)) {
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    $mimetype = $groups['mime'];
                    $fileNameContent = uniqid();
                    $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                    $filePath = ("$storage/$fileNameContentRand.$mimetype");

                    // Memproses dan menyimpan gambar
                    $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                    $new_src = asset($filePath);

                    // Mengupdate atribut src dan class
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                    $img->setAttribute('class', 'img-responsive');
                }
            }
        }


        $artikel->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('blog'))->with('success', 'data berhasil di update');
    }

    // Fungsi Delete
    public function destroy($id)
    {
        $artikel = Blog::find($id);
        if (\File::exists('storage/artikel/' . $artikel->image)) {
            \File::delete('storage/artikel/' . $artikel->image);
        }

        $artikel->delete();

        return redirect(route('blog'))->with('success', 'data berhasil di hapus');
    }
}
