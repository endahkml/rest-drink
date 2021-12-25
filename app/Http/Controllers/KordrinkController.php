<?php

namespace App\Http\Controllers;

use App\Models\Kordrink;
use Illuminate\Http\Request;

class KordrinkController extends Controller
{
    /**
     * Menampilkan semua data drink
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Kordrink::all();
    }

    /**
     * Menambahkan drink baru
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kordrink = new Kordrink();
        $kordrink->nama = $request->nama;
        $kordrink->jenis = $request->jenis;
        $kordrink->harga = $request->harga;
        $kordrink->save();

        return "Data Berhasil Ditambahkan";
    }

    /**
     * Merubah data drink
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kordrink  $kordrink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $jenis = $request->jenis;
        $harga = $request->harga;

        $kordrink = Kordrink::find($id);
        $kordrink->nama = $nama;
        $kordrink->jenis = $jenis;
        $kordrink->harga = $harga;
        $kordrink->save();

        return "Data Berhasil Diubah";
    }

    /**
     * Menghapus data drink
     *
     * @param  \App\Models\Kordrink  $kordrink
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $kordrink = Kordrink::find($id);
        $kordrink->delete();

        return "Data Berhasil Dihapus";
    }
}
