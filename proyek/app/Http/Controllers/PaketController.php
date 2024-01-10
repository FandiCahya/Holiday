<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Kategori;

class PaketController extends Controller
{
    public function index(){
        $data = Paket::latest()->limit('3')->get();

        return view('paket',[
            'paket' => $data
        ]);
    }
}
