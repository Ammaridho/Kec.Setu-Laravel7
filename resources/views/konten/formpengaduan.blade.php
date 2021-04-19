@extends('layouts.main')

@section('content')

    <div class="bg-white rounded p-2 pt-3" id="contentkiri">    
    <h1 class="text-center" id="judulkonten" style="font-size: 40px">Pengaduan</h1>

    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('message')}}
        </div>
    @endif

    {{-- @if ($errors->any())                                      
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)            
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}


    <form class="ml-5 mr-5" action="../" method="POST"> 

        @csrf

        <div class="form-group mb-4">
            <label for="exampleFormControlInput1">Nama *</label>
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1">No Telp *</label>
            @error('tlp')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="tlp">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1">Email *</label>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" name="email">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1">Alamat *</label>
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="alamat">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1">Perihal *</label>
            @error('perihal')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="perihal">
        </div>
        <div class="form-group mt-3">
        <label for="exampleFormControlTextarea1">Deskripsi *</label>
            @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
        </div>
        <button class="btn btn-submit text-light bg-success float-right mt-4" type="submit">Simpan</button>
    </form>
    <a href="../"><button class="btn text-light bg-success mt-3 ml-5 mb-5">Kembali</button></a>

</div>

@endsection