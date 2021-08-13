<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function getProduk()
    {
        $produks = Produk::orderBy('nama','asc')->get();
        return view('dashboard.produk.produk',compact(['produks']));
    }

    public function createProduk()
    {
        return view('dashboard.produk.create');
    }

    public function storeProduk(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga'=> 'required',
            'gambar' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'images';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        $produk = Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
        ]);

        return redirect()->route('getProduk')->with('success','Berhasil menambah produk');
    }

    public function deleteProduk($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return back();
    }

    public function getBanner()
    {
        $banners = Banner::orderBy('created_at','desc')->get();
        return view('dashboard.banner',compact(['banners']));
    }

    public function storeBanner(Request $request){

        // dd($request->gambar);
        $this->validate($request,[
          'gambar' => 'required|mimes:png,jpg,jpeg,gif',
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'banner';
        $file->move($tujuan_upload,$nama_file);



        $banner = Banner::create([
          'gambar' => $nama_file,
        ]);

        return redirect()->back()->with('success','Berhasil menambah banner');
        //dd("oke");

      }

    public function deleteBanner($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return back()->with('success','Berhasil menghapus banner');
    }
}
