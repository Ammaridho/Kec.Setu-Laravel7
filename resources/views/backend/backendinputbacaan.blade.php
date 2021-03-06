@extends('layouts.backendmain')

@section('backendcontent')

    <h1 class="text-center mt-2">INPUT BACAAN</h1>

    @if ($errors->any())                                       {{-- jika ada error --}}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)            {{-- tampilkan semua --}}
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form class="ml-5 mr-5 text-light pt-3 pl-4 pr-4 pb-2 bg-dark rounded" action="/backendinputbacaan/store" method="POST" enctype="multipart/form-data">
        
        @csrf

        {{-- menggunakan blade agar bisa menaruh form di tempat lain dan dinamis --}}
        <x-textfield field="postedby" label="Postedby" type="text" value=""/>

        <label>Perihal</label>
        @error('perihal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
        <div class="form-group mb-3">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio1" value="berita" name="perihal">
                <label class="form-check-label" for="inlineRadio1">Berita</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio2" value="kegiatan" name="perihal">
                <label class="form-check-label" for="inlineRadio2">Kegiatan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio3" value="artikel" name="perihal">
                <label class="form-check-label" for="inlineRadio3">Artikel</label>
            </div>
        </div>

        <x-textfield field="judul" label="Judul" type="text" value=""/>

        <x-file field="gambar" label="Gambar" value=""/>

        <label for="">Isi</label>
        <div class="textarea" style="background-color: white; color:black; margin-bottom:30px;" >
            <textarea id="summernote" name="isi"></textarea>
        </div>
        
        <center><label>Anda bisa melebarkannya dengan menarik pojok kanan bawah pada kolom isi</label></center>

        <div class="div" style="float: right">
            <button class="btn btn-submit text-light bg-success float-right mt-4" type="submit" >Simpan</button>
        </div>

        </form>
      <a href="/backendindex"><button class="btn text-light bg-success float-left mt-3 ml-5 mb-3">Kembali</button></a>


@endsection