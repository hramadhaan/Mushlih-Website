<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artikel = Artikel::all();
        return view('artikel\lihat', ['artikel' => $artikel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $artikel = Artikel::all();
        return view('artikel.create', ['artikel' => $artikel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $new_artikel = new Artikel;
        $new_artikel->judul = $request->get('judul');
        $new_artikel->article = $request->get('article');

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar')->store('artikel', 'public');
            $new_artikel->gambar = $gambar;
        }
        $new_artikel->save();
        return redirect()->route('artikel.store')->with('status', 'Artikel Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artikel_edit = Artikel::findOrFail($id);
        return view('artikel.edit', ['artikel' => $artikel_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $artikel_delete = Artikel::findOrFail($id);
        $artikel_delete->delete();

        return redirect()->route('artikel.index')->with('status', 'Artikel Berhasil di hapus');
    }
}
