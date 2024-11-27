<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
   
    public function index()
    {
        $laporan = [
            ['id' => '01', 'nama' => 'Nike', 'kategori' => 'Sepatu', 'tanggal' => '2024-11-25', 'jumlah' => '5'],
            ['id' => '02', 'nama' => 'Polo', 'kategori' => 'Baju', 'tanggal' => '2024-11-26', 'jumlah' => '15'],
            ['id' => '03', 'nama' => 'Levis', 'kategori' => 'Celana', 'tanggal' => '2024-11-26', 'jumlah' => '10'],
        ];
    
        return view('Laporan.index', compact('laporan'));
    }
}   