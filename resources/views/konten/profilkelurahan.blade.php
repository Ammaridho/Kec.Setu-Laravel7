@extends('layouts.main')

@section('content')
    
<div class="container bg-white rounded pl-3" id="contentkiri"> 

    <div class="row">
            <div class="col-sm-12 mt-3">
                <h4 id="judulBerita">{{$kelurahan->nama}}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p style="font-size:11px; font-family: Arial; color:#aaaaaa;">Struktur Organisasi {{$kelurahan->nama}}</p>
            </div>
        </div>

        <div class="row" id="lokasigambarbacaan">
            <img src="/img/kelurahan/{{$kelurahan->gambar}}" alt="" style="width:100%;"> 
        </div>

    </div>
@endsection