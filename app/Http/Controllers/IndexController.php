<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortofolioModel;

class IndexController extends Controller
{
public function index()
{
    // Ambil semua data dari tabel portofolio
    $portofolio = PortofolioModel::all();

    // Ubah kolom 'img' menjadi array gambar, acak urutannya
    foreach ($portofolio as $data) {
        // Pecah gambar menggunakan <break>, lalu filter yang kosong
        $gambar = array_filter(
            explode('<break>', $data->img),
            fn($val) => trim($val) !== ''
        );

        // Reindex array dan acak urutan gambar
        $data->gambar = array_values($gambar);
        shuffle($data->gambar);
    }

    // Kirim data ke view 'index'
    return view('index', compact('portofolio'));
}


public function detailPortofolio($slug)
{
    // Ambil satu data portofolio berdasarkan slug
    $item = PortofolioModel::where('slug', $slug)->firstOrFail();

    // Pecah string img menjadi array, lalu buang elemen kosong
    $item->gambar = array_filter(
        explode('<break>', $item->img),
        fn($val) => trim($val) !== ''
    );

    // Untuk debug JSON
    // return response()->json($item);

    return view('portofolio_detail', compact('item'));
}

}
