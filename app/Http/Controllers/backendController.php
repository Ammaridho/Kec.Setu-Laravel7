<?php

namespace App\Http\Controllers;

use App\models\pengaduan;
use App\models\bacaan;
use App\models\gambar_bacaan;
use Illuminate\Http\Request;

class backendController extends Controller
{
    public function index()
    {
        // $bacaan = bacaan::with('gambar_bacaan')->orderBy('id', 'desc')->paginate();
        $bacaan = bacaan::orderBy('id', 'desc')->paginate();
        $pengaduan = pengaduan::orderBy('id', 'desc')->paginate();
        // $gambar_bacaan = gambar_bacaan::orderBy('id', 'desc')->paginate();

        return view('backend/backendindex', compact('bacaan','pengaduan'));
    }

    public function inputbacaan()
    {
        return view('backend/backendinputbacaan');
    }

    public function storebackendinputbacaan(Request $request)
    {

        // dd($request->gambar);

        $validatedData = $request->validate([   
            'postedby' => 'required|max:20',
            'perihal' => 'required',
            'judul' => 'required|max:60',
            'gambar' => 'required|mimes:jpeg,png,jpg|max:10000',
            'isi' => 'required'
        ]);

        // gambar =================================
         // membuat nama gambar agar tidak sama
         $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();

        // dd($imgName);

         // memasukkan ke folder
         $request->gambar->move(public_path('img/gambar_bacaan'), $imgName);


        // data biasa untuk dimasukkan ke tabel bacaan ==============================
        $bacaan = new bacaan;    
        $bacaan->postedby = $request->postedby;
        $bacaan->judul = $request->judul;
        $bacaan->gambar = $imgName;
        $bacaan->perihal = $request->perihal;
        $bacaan->isi = $request->isi;
        $bacaan->save();


        //untuk dimasukkan ke tabel database gambar_bacaan 
        // $gambar_bacaan = new gambar_bacaan;
        // $gambar_bacaan->gambar = $imgName;
        // $gambar_bacaan->save();


        return redirect('/backendindex');
    }

    public function bacabacaan($id)
    {
        $bacaan = bacaan::where('id' , $id)->first();
        return view('backend/backendbacaan',compact('bacaan'));
    }   

    public function bacapengaduan($id)
    {
        $pengaduan = pengaduan::where('id' , $id)->first();
        return view('backend/backendbacapengaduan',compact('pengaduan'));
    } 

    public function destroybacaan($id)
    {
        bacaan::find($id)->delete();

        return redirect('/backendindex');
    }

    public function destroypengaduan($id)
    {
        pengaduan::find($id)->delete();

        return redirect('/backendindex');
    }
}
