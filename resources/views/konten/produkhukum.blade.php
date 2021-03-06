@extends('layouts.main')

@section('content')

    <style>
        #judulisikonten{
            font-family: 'BebasNeueRegular';
            font-weight: bold;
            text-align: center;
        }
    </style>
    
<div class="container bg-white rounded pl-3" id="contentkiri"> 

    <div class="row">
        <div class="col-sm-12 mt-3">
            <h3 id="judulisikonten">DOWNLOAD {{$namaaturan}}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p style="font-size:11px; font-family: Arial; color:#aaaaaa;">Dokumen-dokumen yang bisa didownload:</p>
        </div>
    </div>

    @foreach ($peraturan as $item)
    
    <div class="row">
        <div class="col-12">
            <p></p><a href="{{$item['link']}}"><p style="font-size:13px; font-family: Arial; color:black; font-weight:bold;">&#9989;{{$item['nama']}}</p></a>
        </div>
    </div>

    @endforeach

</div>
@endsection