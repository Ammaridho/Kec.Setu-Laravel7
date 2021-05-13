@extends('layouts.main')

@section('content')
    <head>
        <link rel="shortcut icon" type="image/jpg" href="/img/icon/lambang.png"/>

        <style>
            #judulisikonten{
            font-family: 'BebasNeueRegular';
            font-weight: bold;
            text-align: center;
        }
        </style>
    </head>
        
    <div class="container bg-white rounded pl-3" id="contentkiri"> 

        <div class="row">
            <div class="col-sm-12 mt-3">
                <h3 id="judulisikonten">{{$kelurahan->nama}}</h3>
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