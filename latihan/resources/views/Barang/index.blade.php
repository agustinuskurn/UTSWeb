@extends('master')
@section('title', 'Barang')
@section('content')
    <h1>Halaman Barang</h1>
    @section('main')
        <h1 class="text-2xl mb-4">Users</h1>
            <table class="min-w-full border-collapse">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Kode</th>
                        <th class="border px-4 py-2">Name</th>
                        <th class="border px-4 py-2">Kategori</th>
                        <th class="border px-4 py-2">Harga</th>
                        <th class="border px-4 py-2">Stok</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($barang as $item)
                    <tr>
                        <td class="border px-4 py-2">{{ $item['id'] }}</td>
                        <td class="border px-4 py-2">{{ $item['name'] }}</td>
                        <td class="border px-4 py-2">{{ $item['kategori'] }}</td>
                        <td class="border px-4 py-2">{{ $item['harga'] }}</td>
                        <td class="border px-4 py-2">{{ $item['stok'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    @endsection
@endsection