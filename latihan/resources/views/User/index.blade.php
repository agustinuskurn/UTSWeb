@extends('master')
@section('title', 'User')
@section('content')
    <h1>Halaman User</h1>
    @section('main')
        <h1 class="text-2xl mb-4">Users</h1>
            <table class="min-w-full border-collapse">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Username</th>
                        <th class="border px-4 py-2">Name</th>
                        <th class="border px-4 py-2">Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user['username'] }}</td>
                        <td class="border px-4 py-2">{{ $user['name'] }}</td>
                        <td class="border px-4 py-2">{{ $user['email'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    @endsection
@endsection