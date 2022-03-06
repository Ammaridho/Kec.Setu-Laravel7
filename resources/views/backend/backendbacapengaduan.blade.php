@extends('layouts.backendmain')

@section('backendcontent')

    <a href="/backendindex"><button class="btn text-light bg-success">Kembali</button></a>
    
    <h1 class="text-center mt-3">DETAIL BACAAN</h1>

    <div class="bg-white rounded mb-1" id="bacabacaan"> 

        <div class="row">

            <div class="col-11" >
                {{-- button hapus --}}
                <form action="/backendindex/pengaduan/{{$pengaduan->id}}"  method="post" style="float: right">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                </form> 
            </div>
        </div>

        <div class="div p-2">
        <br>
        <h1 style="margin-top:-25px; font-size:10px;">{{$pengaduan->created_at}}</h1>
        <h1 style="font-family: BebasNeueRegular; font-size:28px; font-weight:bold; text-align:center; ">{{$pengaduan->perihal}}</h1>
        <h1 style=" font-size:10px;">penulis    : {{$pengaduan->nama}}</h1>
        <h1 style=" font-size:10px;">No tlp     : {{$pengaduan->tlp}}</h1>
        <h1 style=" font-size:10px;">Email      : {{$pengaduan->email}}</h1>
        <h1 style=" font-size:10px;">Alamat     : {{$pengaduan->alamat}}</h1>
        <br>
        <pre style=" font-size: 13px; border:0px; white-space: pre-wrap; text-align:justify;" disabled>{{$pengaduan->deskripsi}}</pre style="width: 100%; height: 400px;">

        </div>
    </div>
        
    

    

@endsection