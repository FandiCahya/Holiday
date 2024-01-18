<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(){
        $data = Paket::latest()->limit('3')->get();

        return view('paket',[
            'paket' => $data
        ]);
    }
}
