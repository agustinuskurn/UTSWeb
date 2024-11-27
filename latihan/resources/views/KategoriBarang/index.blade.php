@extends('master')
@section('title', 'Kategori Barang')
@section('content')
    <h1>Halaman Kategori Barang</h1>
    @section('main')
        <h1 class="text-2xl mb-4">Kategori Barang</h1>
            <table class="min-w-full border-collapse">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Kategori Barang</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kategoribarang as $item)
                    <tr>
                        <td class="border px-4 py-2">{{ $item['barang'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    @endsection
@endsection