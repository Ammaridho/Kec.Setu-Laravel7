@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-4 mt-2">
            <h6 id="judulkonten" style="font-size: 22px">SEMUA BERITA</h6>
        </div>
        <div class="col-8 mt-2" id="lokasipatern">
            <div class="patern"></div>
        </div>
    </div>

    <div class="bg-white rounded p-4" id="contentkiri">

        @foreach ($bacaan as $key => $item)

            <div class="row">
                <div class="col-12">
                    <a href="../{{$item->id}}/isibacaan"><p style="font-size:20px; font-weight:400px; color: black; margin-bottom: 13px;">{{$item->judul}}</p></a>
                    <p style="font-size:12px; margin-top:-12px; color:#B3B3B3;">Tanggal: {{$item->tanggal}}</p>
                </div>
            </div>

            <div class="row mt-1 mb-4">
                <div class="col-5" style="margin-top: -12px">
                    
                    @foreach ($gambar_bacaan->where('id',(int)$key+1)->take(1) as $gambars)
                            <img src="/img/gambar_berita/{{$gambars->gambar}}" alt="error" id="gambartabbaru" style="height: 125px;">
                    @endforeach
                </div>
                
                <div class="col-7" style="margin-top: -12px">
                    <a href="{{$item->judul}}" style="font-size:12px; font-weight:400px; color: black;"><p style="font-weight: bold;">Baca Lebih Lengkap...</p></a>
                </div>
            </div>

        @endforeach
        
    </div>

@endsection