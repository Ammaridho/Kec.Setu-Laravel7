@extends('layouts.backendmain')

@section('backendcontent')

    <a href="../backendindex"><button class="btn text-light bg-success">Kembali</button></a>
    
    <h1 class="text-center mt-3">DETAIL BACAAN</h1>

    <div class="bg-white rounded mb-4" id="bacabacaan"> 

        <div class="row">
            <div class="col-1">
                {{-- button edit --}}
                <a href="/artikel/{{$bacaan->id}}/edit" class="btn btn-info btn-sm">Edit</a>
            </div>

            <div class="col-11" >
                {{-- button hapus --}}
                <form action="/artikel/{{$bacaan->id}}"  method="post" style="float: right">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form> 
            </div>
        </div>

        <div class="div p-5">

        <h1 style="font-family: BebasNeueRegular; font-size:28px; font-weight:bold; text-align:center; ">{{$bacaan->judul}}</h1>
        <br>
        {{-- {{dd($bacaan->gambar_bacaan[0])}} --}}
        <img src="/img/gambar_bacaan/{{$bacaan->gambar}}" alt="error" id="gambartabbaru" style="display: block; margin-left: auto; margin-right: auto; height: 200px;">
        <br>
        <pre style=" font-size: 13px; border:0px; white-space: pre-wrap;" disabled>{{$bacaan->isi}}</pre style="width: 100%; height: 400px;">

        </div>
    </div>
        
    

    

@endsection