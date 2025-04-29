<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    // Menampilkan tabel data mahasiswa
    public function getTabel()
    {
        $mahasiswa = [
            ['nim' => 'NIM 1', 'nama' => 'Nama Lengkap 1', 'kelas' => 'Kelas 1'],
            ['nim' => 'NIM 2', 'nama' => 'Nama Lengkap 2', 'kelas' => 'Kelas 2'],
        ];

        return view('tabel', compact('mahasiswa'));
    }

    // Menampilkan form input data
    public function getForm()
    {
        return view('form');
    }
}
