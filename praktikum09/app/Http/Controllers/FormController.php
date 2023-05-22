<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Buat fungsi Index untuk menampilkan view form
    public function index() {
        return view('form');
    }

     // Fungsi untuk menampilkan hasil
     public function hasil(Request $request)
     {
         $this->validate($request, [
             'nama' => 'required',
             'ttl' => 'required',
             'jenis_kelamin' => 'required',
             'hobi' => 'required',
         ]);
         return view('hasil', ['data' => $request]);
     }
     
}
