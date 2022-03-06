@extends('layouts.backendmain')

@section('backendcontent')

    <h1 class="text-center mt-2">INPUT GAMBAR GALLERY</h1>

    @if ($errors->any())                                       {{-- jika ada error --}}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)            {{-- tampilkan semua --}}
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
         
        @if ($gambargallery == null)

        <form class="ml-5 mr-5 text-light pt-3 pl-4 pr-4 pb-2 bg-dark rounded" action="/gambargallery/input/store/" method="POST" enctype="multipart/form-data">
        
            @csrf    

            <x-textfield field="postedby" label="Postedby" type="text" value=""/>

            <x-textfield field="nama" label="Nama" type="text" value=""/>

            <x-file field="gambar" label="Gambar" value=""/>

            <div class="div" style="float: right">
                <button class="btn btn-submit text-light bg-success float-right mt-4" type="submit" >Simpan</button>
            </div>
        
        </form>
        
        @else
            
        <form class="ml-5 mr-5 text-light pt-3 pl-4 pr-4 pb-2 bg-dark rounded" action="/gambargallery/input/store/{{$gambargallery->id}}" method="POST" enctype="multipart/form-data">
        
            @csrf

            @method('PUT')

            <x-textfield field="postedby" label="Postedby" type="text" value="{{$gambargallery->postedby}}"/>

            <x-textfield field="nama" label="Nama" type="text" value="{{$gambargallery->nama}}"/>

            <x-filegambargallery field="gambar" label="Gambar" value="{{$gambargallery->gambar}}"/>

            <div class="div" style="float: right">
                <button class="btn btn-submit text-light bg-success float-right mt-4" type="submit" >Simpan</button>
            </div>

        </form>

        @endif
        

        
      <a href="{{route('backendindex')}}"><button class="btn text-light bg-success float-left mt-3 ml-5 mb-3">Kembali</button></a>


@endsection