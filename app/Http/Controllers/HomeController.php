<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortofolioModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dataPortofolio()
    {
        $portofolio = PortofolioModel::all();
        return view('pages.portofolio', compact('portofolio'));
    }
    
    public function create()
    {
        return view('pages.portofolio_tambah');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sort_desc' => 'required',
            'category' => 'required',
            'instansi' => 'required',
            'client' => 'required',
            'date' => 'required',
            'head_desc' => 'required',
            'desc' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $images = [];
        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $path = public_path(env('PATH_SYS'));
                $image->move($path, $filename);
                $images[] = $filename;
            }
        }

        PortofolioModel::create([
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'sort_desc' => $request->sort_desc,
            'category' => $request->category,
            'instansi' => $request->instansi,
            'client' => $request->client,
            'date' => $request->date,
            'url' => $request->url,
            'head_desc' => $request->head_desc,
            'desc' => $request->desc,
            'img' => implode('<break>', $images),
        ]);

        return redirect()->back()->with('success', 'Portofolio berhasil disimpan!');
    }
}
