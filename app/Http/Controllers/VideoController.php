<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return view('admin.video.index', [
            'videos' => Video::orderBy('id', 'desc')->get()
        ]);
    }
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'youtube_code' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'youtube_code.required' => 'Code Youtube wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Simpan data blog ke database
        Video::create([
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code,
        ]);

        return redirect(route('video'))->with('success', 'Data video berhasil disimpan');
    }
    public function update(Request $request, $id)
    {
        // Cari photo berdasarkan id
        $video = Video::find($id);

        $rules = [
            'judul' => 'required',
            'youtube_code' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'youtube_code.required' => 'Code Youtube wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Update data photo
        $video->update([
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code,
        ]);

        // Redirect dengan pesan sukses
        return redirect(route('video'))->with('success', 'Data photo berhasil diupdate');
    }
    public function destroy($id)
    {
        $video = Video::find($id);

        // Hapus video jika ada
        if ($video) {
            $video->delete();
        }

        return redirect()->route('video')->with('success', 'Video berhasil dihapus.');
    }
}
