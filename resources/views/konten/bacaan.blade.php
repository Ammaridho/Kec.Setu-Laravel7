@extends('layouts.main')

<link rel="stylesheet" href="/css/bacaan.css">

@section('content')

    <div class="container bg-white rounded pl-3 mb-3" id="contentkiri"> 

        <div class="row">
            <div class="col-sm-12 mt-3">
                <h4 id="judulBerita">{{$bacaandetail->judul}}</h4>
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
            <div class="col-12 mt-4">
                <pre id="isibacaan" disabled>{{$bacaandetail->isi}}</pre>
            </div>
        </div>

    </div>
@endsection