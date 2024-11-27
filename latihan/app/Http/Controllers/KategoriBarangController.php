<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index()
    {
        $kategoribarang = [
            ['barang' => 'Sepatu'],
            ['barang' => 'Baju'],
            ['barang' => 'Celana'],
        ];
    
        return view('KategoriBarang.index', compact('kategoribarang'));
    }
}  