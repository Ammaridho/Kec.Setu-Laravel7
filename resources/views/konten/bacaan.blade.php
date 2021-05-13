@extends('layouts.main')

<link rel="stylesheet" href="/css/bacaan.css">

@section('content')

    <head>
        <style>
            #judulBeritadetail{
                font-weight: bold;
                font-size: 20px; 
                color:#6E6E6E;
                text-align: center;
            }
        </style>
    </head>


    <div class="container bg-white rounded pl-3" id="contentkiri"> 

        <div class="row">
            <div class="col-sm-12 mt-3">
                <h2 id="judulBeritadetail">{{$bacaandetail->judul}}</h2>
            </div>
        </div>

        @if (($bacaandetail->updated_at) != null)
            <?php $tanggal = $bacaandetail->updated_at?>
        @elseif (($bacaandetail->created_at) != null)
            <?php $tanggal = $bacaandetail->created_at?>
        @else
            <?php $tanggal = 'Belum ada tanggal' ?>
        @endif

        <div class="row">
            <div class="col-12">
                <p style="font-size:11px; font-family: Arial; color:#aaaaaa;">Posted by: {{$bacaandetail->postedby}} , {{$tanggal}} , <span style="font-size:11px; font-family: Arial; font-weight:bold; color:red;">Di Lihat: {{$banyaklihat->dilihat}} </span></p>
            </div>
        </div>

        <div class="row" id="lokasigambarbacaan">
            <img src="/img/gambar_bacaan/{{$bacaandetail->gambar}}" alt="" id="gambarbacaan">
        </div>

        <div class="row">
            <div class="col-12 mt-4" id="tulisanbacaan">
                <?php
                    echo htmlspecialchars_decode(stripslashes($bacaandetail->isi));
                ?>
            </div>
        </div>

    </div>
@endsection