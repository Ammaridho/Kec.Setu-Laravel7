@extends('layouts.main')

<link rel="stylesheet" href="/css/bacaan.css">

@section('content')

    <div class="container bg-white rounded pl-3" id="contentkiri"> 

        <div class="row">
            <div class="col-sm-12 mt-3">
                <h4 id="judulBerita">{{$bacaandetail->judul}}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p style="font-size:11px; font-family: Arial; color:#aaaaaa;">Posted by: {{$bacaandetail->postedby}} , 05 Agustus 2020, 11:42:02 , <span style="font-size:11px; font-family: Arial; font-weight:bold; color:red;"> Telah Di Lihat Sebanyak: 105</span></p>
            </div>
        </div>

        <div class="row" id="lokasigambarbacaan">
            <img src="/img/gambar_bacaan/{{$bacaandetail->gambar}}" alt="" id="gambarbacaan">
        </div>

        <div class="row">
            <div class="col-12 mt-4">
                <pre id="isibacaan" disabled>{{$bacaandetail->isi}}</pre>
            </div>
        </div>

    </div>
@endsection