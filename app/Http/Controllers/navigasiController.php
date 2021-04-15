<?php

namespace App\Http\Controllers;

use App\models\perda;
use App\models\perwal;
use App\models\kepwal;
use App\models\bacaan;
use App\models\kelurahan;
use App\models\gambar_bacaan;
use App\models\deskripsi;
use App\models\pengaduan;
use Illuminate\Http\Request;

class navigasiController extends Controller
{
    public function index(){

        // $bacaan = bacaan::with('gambar_bacaan')->orderBy('id', 'desc')->paginate();
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(3);
        $berita = bacaan::where('perihal','berita')->orderBy('id', 'desc')->paginate(3);
        $kegiatan = bacaan::where('perihal','kegiatan')->orderBy('id', 'desc')->paginate(3);
        $artikel = bacaan::where('perihal','artikel')->orderBy('id', 'desc')->paginate(3);
        // dd($berita);
        // $gambar_bacaan = gambar_bacaan::all();

        //untuk jumbotron
        // $idmax = bacaan::max('id'); 
        // dd($idmax);
        // $gambar_satuan = gambar_bacaan::find($idmax); 
        // $bacaan_satuan = bacaan::find($idmax);
        // $gambar_terbaru = gambar_bacaan::orderBy('id', 'desc')->paginate(3);
        // $bacaan_terbaru = bacaan::orderBy('id', 'desc')->paginate(3);

        return view('konten/index',compact('bacaan','berita','kegiatan','artikel'));
    }

    public function deskripsi($id_deskripsi){
        $deskripsi = deskripsi::find($id_deskripsi); //isi dari tulisan biasa
        
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(3);
        // $gambar_bacaan = gambar_bacaan::all();
        
        return view('konten.deskripsi',compact('deskripsi','bacaan'));
    }

    public function isibacaan($id){
        $bacaandetail = bacaan::find($id);     
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(3);
        // $gambar_bacaan = gambar_bacaan::find($id);
        // dd($bacaan);
        return view('konten.bacaan',compact('bacaandetail','bacaan'));
    }

    public function profilkelurahan($nama)
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(3);
        // $gambar_bacaan = gambar_bacaan::all();

        $kelurahan = kelurahan::where('nama' , $nama)->first();
        // dd($kelurahan);
        return view('konten.profilkelurahan',compact('kelurahan','bacaan'));
    }

    public function perda()
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(3);
        // $gambar_bacaan = gambar_bacaan::all();

        $peraturan = perda::all();

        $namaaturan = "Peraturan Daerah";

        return view('konten.produkhukum',compact('namaaturan','peraturan','bacaan'));
    }

    public function perwal()
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(3);
        // $gambar_bacaan = gambar_bacaan::all();

        $peraturan = perwal::all();

        $namaaturan = "Peraturan Walikota";

        return view('konten.produkhukum',compact('namaaturan','peraturan','bacaan'));
    }

    public function kepwal()
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(3);
        // $gambar_bacaan = gambar_bacaan::all();

        $peraturan = kepwal::all();

        $namaaturan = "Keputusan Walikota";

        return view('konten.produkhukum',compact('namaaturan','peraturan','bacaan'));
    }

    public function beritakecamatan()
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(3);    
        $semuabacaan = bacaan::orderBy('id', 'desc')->paginate();
        // $gambar_bacaan = gambar_bacaan::all();

        return view('konten.beritakecamatan',compact('bacaan','semuabacaan'));
    }

    public function tags($perihal)
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(3);
        $tags = bacaan::where('perihal',$perihal)->orderBy('id', 'desc')->paginate();
        // dd($bacaan);
        return view('konten.tags'.compact('bacaan','tags'));
    }

    public function formpengaduan()
    {
        $bacaan = bacaan::orderBy('id', 'desc')->paginate(3);
        // $gambar_bacaan = gambar_bacaan::all();

        return view('konten/formpengaduan',compact('bacaan'));
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

        return redirect('/');
    }

}
