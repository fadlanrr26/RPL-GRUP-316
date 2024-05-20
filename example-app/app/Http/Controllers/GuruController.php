<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function inputNilai() {
        return view('guru.inputNilai');
    }
}
