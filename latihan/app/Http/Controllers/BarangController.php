<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = [
            ['id' => '01', 'name' => 'Nike', 'kategori' => 'Sepatu', 'harga' => 'Rp 850.000', 'stok' => '20'],
            ['id' => '02', 'name' => 'Polo', 'kategori' => 'Baju', 'harga' => 'Rp 890.000', 'stok' => '17'],
            ['id' => '03', 'name' => 'Levis', 'kategori' => 'Celana', 'harga' => 'Rp 990.000', 'stok' => '10'],
        ];
    
        return view('Barang.index', compact('barang'));
    }
}    
