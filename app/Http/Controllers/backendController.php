<?php

namespace App\Http\Controllers;

use App\models\pengaduan;
use App\models\bacaan;
use Illuminate\Http\Request;

class backendController extends Controller
{
    public function index()
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(3);
        $pengaduan = pengaduan::orderBy('id', 'desc')->paginate(3);

        return view('backend/backendindex', compact('bacaan','pengaduan'));
    }

    public function inputbacaan()
    {
        return view('backend/backendinputbacaan');
    }

    public function storebackendinputbacaan(Request $request)
    {
        $validatedData = $request->validate([   
            'postedby' => 'required|max:20',
            'judul' => 'required|max:60',
            'perihal' => 'required',
            'isi' => 'required'
        ]);

        // dd($request);
        $bacaan = new bacaan;    
        $bacaan->postedby = $request->postedby;
        $bacaan->judul = $request->judul;
        $bacaan->perihal = $request->perihal;
        $bacaan->isi = $request->isi;
        $bacaan->save();

        return redirect('/backendindex');
    }

    public function bacabacaan($judul)
    {
        $bacaan = bacaan::where('judul' , $judul)->first();
        return view('backend/backendbacaan',compact('bacaan'));
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
