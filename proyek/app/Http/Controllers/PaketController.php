<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Kategori;

class PaketController extends Controller
{
    public function index(){
        $data = Paket::all();

        return view('paket',[
            'paket' => $data
        ]);
    }
}
