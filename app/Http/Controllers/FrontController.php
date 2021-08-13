<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Produk;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $banners = Banner::inRandomOrder()->get();
        $produks = Produk::orderBy('created_at','desc')->paginate(6);
        return view('frontend.index',compact(['produks','banners']));
    }

    public function produk()
    {
        $produks = Produk::orderBy('created_at','desc')->get();
        return view('frontend.produk',compact(['produks']));
    }
}
