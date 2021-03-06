<?php

namespace App\Http\Controllers;

use App\models\pengaduan;
use App\models\bacaan;
use App\models\gambargallery;
use App\models\banyaklihat;
use App\models\deskripsi;
use Illuminate\Http\Request;

class backendController extends Controller
{
    public function index()
    {
        // $bacaan = bacaan::with('gambar_bacaan')->orderBy('id', 'desc')->paginate();
        $bacaan = bacaan::orderBy('id', 'desc')->paginate();
        $pengaduan = pengaduan::orderBy('id', 'desc')->paginate();
        $gambargallery = gambargallery::orderBy('id', 'desc')->paginate();
        $deskripsi = deskripsi::orderBy('id','desc')->paginate();
        // $gambar_bacaan = gambar_bacaan::orderBy('id', 'desc')->paginate();

        return view('backend/backendindex', compact('bacaan','pengaduan','gambargallery','deskripsi'));
    }

    public function hasilbackendsearchberita(Request $request)
    {
        $keyword = $request->search;
        // dd($request->search);
        
        $hasilsearch = bacaan::where("judul","LIKE","%$keyword%")->orderBy('id', 'desc')->get();

        return view('backend.hasilsearchberita',compact('hasilsearch','keyword'));
    }

    public function hasilbackendsearchpengaduan(Request $request)
    {
        $keyword = $request->search;
        
        $hasilsearch = pengaduan::where("perihal","LIKE","%$keyword%")->orderBy('id', 'desc')->get();

        return view('backend.hasilsearchpengaduan',compact('hasilsearch','keyword'));
    }

    public function hasilbackendsearchgambargallery(Request $request)
    {
        
        $keyword = $request->search;
        
        $hasilsearch = gambargallery::where("nama","LIKE","%$keyword%")->orderBy('id', 'desc')->get();

        return view('backend.hasilsearchgambargallery',compact('hasilsearch','keyword'));
    }

    public function hasilbackendsearchdeskripsi(Request $request)
    {
        $keyword = $request->search;
        // dd($keyword);
        
        $hasilsearch = deskripsi::where("judul","LIKE","%$keyword%")->orderBy('id', 'desc')->get();
        dd('bisa');
        return view('backend.hasilsearchdeskripsi',compact('hasilsearch','keyword'));
    }

    public function inputbacaan()
    {
        return view('backend/backendinputbacaan');
    }

    public function storegambarbacaan(Request $request)
    {
        // dd($request->image);
        
        // gambar =================================
         // membuat nama gambar agar tidak sama
         $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();

        // dd($imgName);

         // memasukkan ke folder
         $request->image->move(public_path('/img/gambar_isi_bacaan'), $imgName);
    }

    public function storebackendinputbacaan(Request $request)
    {

        $validatedData = $request->validate([   
            'postedby' => 'required|max:50',
            'perihal' => 'required',
            'judul' => 'required|max:100',
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
        

        $idbacaanterakhir = bacaan::max('id');

        $banyaklihat = new banyaklihat;
        $banyaklihat->id = $idbacaanterakhir;
        $banyaklihat->save();

        //untuk dimasukkan ke tabel database gambar_bacaan 
        // $gambar_bacaan = new gambar_bacaan;
        // $gambar_bacaan->gambar = $imgName;
        // $gambar_bacaan->save();


        return redirect('/backendindex')->with('message','Berhasil Menginput Bacaan');
    }

    public function bacabacaan($id)
    {
        $bacaan = bacaan::find($id);
        return view('backend/backendbacaan',compact('bacaan'));
    }   

    public function editbacaan($id)
    {
        $bacaan = bacaan::find($id);
        return view('backend/backendeditbacaan',compact('bacaan'));
    }

    public function editbacaanrestore(Request $request, $id)
    {
        $validatedData = $request->validate([   
            'postedby' => 'required|max:50',
            'perihal' => 'required',
            'judul' => 'required|max:100',
            'gambar' => 'mimes:jpeg,png,jpg|max:10000',
            'isi' => 'required'
        ]);

        $bacaan = bacaan::find($id);
        $bacaan->postedby = $request->postedby;
        $bacaan->perihal = $request->perihal;
        $bacaan->judul = $request->judul;

        if ($request->gambar) {
            $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();

            $request->gambar->move(public_path('img/gambar_bacaan'), $imgName);

            $bacaan->gambar = $imgName;
        } 
            

        $bacaan->isi = $request->isi;
        $bacaan->save();

        return redirect('/backendindex')->with('message','Berhasil Mengedit Bacaan');
    }

    public function bacadeskripsi($id)
    {
        $deskripsi = deskripsi::find($id);
        return view('backend.backendbacadeskripsi',compact('deskripsi'));
    }

    public function inputdeskripsi()
    {
        return view('backend/backendinputdeskripsi');
    }

    public function storebackendinputdeskripsi(Request $request)
    {

        $validatedData = $request->validate([   
            'judul' => 'required|max:100',
            'isi' => 'required'
        ]);

        $deskripsi = new deskripsi;    
        $deskripsi->judul = $request->judul;
        $deskripsi->isi = $request->isi;
        $deskripsi->save();

        return redirect('/backendindex')->with('message','Berhasil Menginput deskripsi');
    }

    public function editdeskripsi($id)
    {
        $deskripsi = deskripsi::find($id);
        return view('backend/backendeditdeskripsi',compact('deskripsi'));
    }

    public function editdeskripsirestore(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:100',
            'isi' => 'required'
        ]);

        
        $deskripsi = deskripsi::find($id);
        $deskripsi->judul = $request->judul;
        $deskripsi->isi = $request->isi;
        $deskripsi->save();

        return redirect('/backendindex')->with('message','Berhasil Mengedit deskripsi');
    }

    public function destroydeskripsi($id)
    {
        deskripsi::find($id)->delete();

        return redirect('/backendindex')->with('message','Berhasil menghapus deskripsi');
    }


    public function bacapengaduan($id)
    {
        $pengaduan = pengaduan::where('id' , $id)->first();
        return view('backend/backendbacapengaduan',compact('pengaduan'));
    } 

    public function destroybacaan($id)
    {
        bacaan::find($id)->delete();

        return redirect('/backendindex')->with('message','Berhasil menghapus Bacaan');
    }

    public function destroypengaduan($id)
    {
        pengaduan::find($id)->delete();

        return redirect('/backendindex')->with('message','Berhasil Menghapus Pengaduan');
    }

    public function inputgambargallery()
    {
        $gambargallery = null;
        return view('backend.backendinputgambar',compact('gambargallery'));
    }

    public function storeinputgambargallery(Request $request)
    {
        // dd($request);

        $validatedData = $request->validate([   
            'postedby' => 'required|max:50',
            'nama' => 'required|max:100',
            'gambar' => 'required|mimes:jpeg,png,jpg|max:10000'
        ]);

         $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();

         $request->gambar->move(public_path('img/gambargallery'), $imgName);

        $gambargallery = new gambargallery;    
        $gambargallery->postedby = $request->postedby;
        $gambargallery->gambar = $imgName;
        $gambargallery->nama = $request->nama;
        $gambargallery->save();


        return redirect('/backendindex')->with('message','Berhasil Menginput Gambar');
    }

    public function editgambargallery($id)
    {
        $gambargallery = gambargallery::find($id);
        return view('backend.backendinputgambar',compact('gambargallery'));
    }

    public function storeeditgambargallery(Request $request, $id)
    {
        $validatedData = $request->validate([   
            'postedby' => 'required|max:50',
            'nama' => 'required|max:100',
            'gambar' => 'mimes:jpeg,png,jpg|max:10000'
        ]);


        $gambargallery = gambargallery::find($id);    
        $gambargallery->postedby = $request->postedby;
        if ($request->gambar) {
            $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();

            $request->gambar->move(public_path('img/gambar_bacaan'), $imgName);

            $bacaan->gambar = $imgName;
        } 
        $gambargallery->nama = $request->nama;
        $gambargallery->save();


        return redirect('../backendindex')->with('message','Berhasil Mengedit Gambar');
    }

    public function destroygambargallery($id)
    {
        gambargallery::find($id)->delete();

        return redirect('/backendindex')->with('message','Berhasil Menghapus Gambar');
    }
}
