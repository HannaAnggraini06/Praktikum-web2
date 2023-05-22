<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    // Buat Fungsi index untuk menampilkan view form
    public function index() 
    {
        return view('skill');
    }


// Buat Fungsi hasil untuk menampilkan data inputan
    public function skill(Request $request) 
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',

        ]);
        // udah diisi 5 bagian
        return view ('skillhasil', ['data' => $request]);
    }



}