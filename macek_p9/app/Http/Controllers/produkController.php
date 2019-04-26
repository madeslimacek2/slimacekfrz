<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class produkController extends Controller
{
    public function index()
    {
        $produk = DB::table('produks')
        ->join('kategori','produks.id_kategori','=','kategori.id')
        ->get();
        
        return view ('produk/index',compact('produk'));
    }

    public function store()
        {
            DB::table('produks')
            ->insert([
                'nama' => 'Lampu',
                'id_kategori' => 1,
                'qty' => 14,
                'harga_beli' => 40000,
                'harga_jual' => 60000,
                ]);
                echo "Berhasil";
            }

    public function update()
    {
        DB::table('produks')->where('id',3)
        ->update([
            'nama' => 'Bola Lampu',
            'qty' => 20,
            'harga_beli' => 45000,
            'harga_jual' => 55000,
        ]);
        
        echo "Data Berhasil Dirubah!";
    }

    public function delete()
    {
        DB::table('produks')->where('id',3)->delete();
        echo "Data Berhasil Dihapus";
    }
}
