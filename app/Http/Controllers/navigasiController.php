<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\models\perda;
use App\models\perwal;
use App\models\kepwal;
use App\models\bacaan;
use App\models\kelurahan;
use App\models\gambar_bacaan;
use App\models\gambargallery;
use App\models\videogallery;
use App\models\deskripsi;
use App\models\pengaduan;
>>>>>>> tanparelasi
use Illuminate\Http\Request;

class navigasiController extends Controller
{
<<<<<<< HEAD
    function index(){
        return view('/layouts/main');
    }
=======
    public function index(){

        // $bacaan = bacaan::with('gambar_bacaan')->orderBy('id', 'desc')->paginate();
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        $berita = bacaan::where('perihal','berita')->orderBy('id', 'desc')->paginate(3);
        $kegiatan = bacaan::where('perihal','kegiatan')->orderBy('id', 'desc')->paginate(3);
        $artikel = bacaan::where('perihal','artikel')->orderBy('id', 'desc')->paginate(3);
        $gambargallery = gambargallery::all();
        $videogallery = videogallery::all();
        // dd($gambargallery);

        // $gambar_bacaan = gambar_bacaan::all();

        //untuk jumbotron
        // $idmax = bacaan::max('id'); 
        // dd($idmax);
        // $gambar_satuan = gambar_bacaan::find($idmax); 
        // $bacaan_satuan = bacaan::find($idmax);
        // $gambar_terbaru = gambar_bacaan::orderBy('id', 'desc')->paginate(3);
        // $bacaan_terbaru = bacaan::orderBy('id', 'desc')->paginate(3);

        return view('konten/index',compact('bacaan','berita','kegiatan','artikel','gambargallery','videogallery'));
    }

    public function hasilsearch(Request $request)
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        $videogallery = videogallery::all();
        
        $keyword = $request->search;
        // dd($keyword);
        $hasilsearch = bacaan::where("judul","LIKE","%$keyword%")->orderBy('id', 'desc')->get();

        return view('konten.hasilsearch',compact('bacaan','videogallery','hasilsearch','keyword'));
    }

    public function deskripsi($id_deskripsi){
        $deskripsi = deskripsi::find($id_deskripsi); //isi dari tulisan biasa
        $videogallery = videogallery::all();
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        // $gambar_bacaan = gambar_bacaan::all();
        
        return view('konten.deskripsi',compact('deskripsi','bacaan','videogallery'));
    }

    public function isibacaan($id, Request $request){
        $bacaandetail = bacaan::find($id); 
        $ip  = $request->ip(); //panggil ip
        dd($ip);
        
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        $videogallery = videogallery::all();
        // $gambar_bacaan = gambar_bacaan::find($id);
        // dd($bacaan);
        return view('konten.bacaan',compact('bacaandetail','bacaan','videogallery'));
    }

    public function profilkelurahan($nama)
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        // $gambar_bacaan = gambar_bacaan::all();
        $videogallery = videogallery::all();
        $kelurahan = kelurahan::where('nama' , $nama)->first();
        // dd($kelurahan);
        return view('konten.profilkelurahan',compact('kelurahan','bacaan','videogallery'));
    }

    public function perda()
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        // $gambar_bacaan = gambar_bacaan::all();

        $peraturan = perda::all();
        $videogallery = videogallery::all();

        $namaaturan = "Peraturan Daerah";

        return view('konten.produkhukum',compact('namaaturan','peraturan','bacaan','videogallery'));
    }

    public function perwal()
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        // $gambar_bacaan = gambar_bacaan::all();
        $videogallery = videogallery::all();
        $peraturan = perwal::all();

        $namaaturan = "Peraturan Walikota";

        return view('konten.produkhukum',compact('namaaturan','peraturan','bacaan','videogallery'));
    }

    public function kepwal()
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        // $gambar_bacaan = gambar_bacaan::all();

        $peraturan = kepwal::all();

        $namaaturan = "Keputusan Walikota";
        $videogallery = videogallery::all();

        return view('konten.produkhukum',compact('namaaturan','peraturan','bacaan','videogallery'));
    }

    public function beritakecamatan()
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);    
        $semuabacaan = bacaan::orderBy('id', 'desc')->paginate(7);
        $videogallery = videogallery::all();
        // $gambar_bacaan = gambar_bacaan::all();

        return view('konten.beritakecamatan',compact('bacaan','semuabacaan','videogallery'));
    }

    public function lihatgambargallery()
    {
        $gambargallery = gambargallery::all();
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        $videogallery = videogallery::all();
        return view('konten.gambargallery',compact('gambargallery','bacaan','videogallery'));
    }

    public function lihatvideogallery()
    {
        $videogallery = videogallery::all();
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        return view('konten.videogallery',compact('videogallery','bacaan'));
    }


    public function formpengaduan()
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        $videogallery = videogallery::all();
        // $gambar_bacaan = gambar_bacaan::all();

        return view('konten/formpengaduan',compact('bacaan','videogallery'));
    }

    public function storeformpengaduan(Request $request)
    {
        $validatedData = $request->validate([   
            'nama' => 'required|max:25|string',
            'tlp' => 'required|max:25',
            'email' => 'required|max:40|email',
            'alamat' => 'required|max:100',
            'perihal' => 'required|max:50',
            'deskripsi' => 'required|max:1000'
        ]);

        // dd($request);
        $pengaduan = new pengaduan;    
        $pengaduan->nama = $request->nama;
        $pengaduan->tlp = $request->tlp;
        $pengaduan->email = $request->email;
        $pengaduan->alamat = $request->alamat;
        $pengaduan->perihal = $request->perihal;
        $pengaduan->deskripsi = $request->deskripsi;
        $pengaduan->save();

        // Session::flash('sukses','Berhasil Memberikan Pengaduan');

        return redirect('/formpengaduan')->with('message','Berhasil Memberikan Pengaduan');
    }

    public function tags($perihal)
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(4);
        $videogallery = videogallery::all();
        $tags = bacaan::where('perihal',$perihal)->orderBy('id', 'desc')->paginate(7);
        // dd($bacaan);
        return view('konten.tags',compact('bacaan','tags','videogallery'));
    }
>>>>>>> tanparelasi
}
