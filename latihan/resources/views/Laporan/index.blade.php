@extends('master')
@section('title', 'Laporan')
@section('content')
    <h1>Halaman Laporan Penerimaan Barang</h1>
    @section('main')
        <h1 class="text-2xl mb-4">Laporan</h1>
            <table class="min-w-full border-collapse">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Kode</th>
                        <th class="border px-4 py-2">Nama Barang</th>
                        <th class="border px-4 py-2">Kategori</th>
                        <th class="border px-4 py-2">Tanggal</th>
                        <th class="border px-4 py-2">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($laporan as $item)
                    <tr>
                        <td class="border px-4 py-2">{{ $item['id'] }}</td>
                        <td class="border px-4 py-2">{{ $item['nama'] }}</td>
                        <td class="border px-4 py-2">{{ $item['kategori'] }}</td>
                        <td class="border px-4 py-2">{{ $item['tanggal'] }}</td>
                        <td class="border px-4 py-2">{{ $item['jumlah'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
@endsection
@endsection