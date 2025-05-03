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
        // Ubah img menjadi array gambar
        foreach ($portofolio as $data) {
            // Pecah gambar lalu filter yang kosong
            $data->gambar = array_filter(
                explode('<break>', $data->img),
                fn($val) => trim($val) !== ''
            );
        }
        $data->gambar = array_values($data->gambar); // pastikan index-nya urut
        shuffle($data->gambar);
        // Kirim ke view 'index'
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
