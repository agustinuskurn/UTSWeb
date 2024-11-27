<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
   
    public function index()
    {
        $users = [
            ['username' => 'pandu', 'name' => 'Pandu Majik', 'email' => 'pandumajik@example.com'],
            ['username' => 'kimi', 'name' => 'Kimi Majik', 'email' => 'kimimajik@example.com'],
            ['username' => 'popo', 'name' => 'Popo Popi', 'email' => 'popopopi@example.com'],
        ];
    
        return view('User.index', compact('users'));
    }
}    