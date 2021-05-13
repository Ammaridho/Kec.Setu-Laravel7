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
            <label for="exampleFormControlInput1" style="font-size: 14px">Nama *</label>
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1" style="font-size: 14px">No Telp *</label>
            @error('tlp')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="tlp">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1" style="font-size: 14px">Email *</label>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" name="email">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1" style="font-size: 14px">Alamat *</label>
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="alamat">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1" style="font-size: 14px">Perihal *</label>
            @error('perihal')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="perihal">
        </div>
        <div class="form-group mt-3">
        <label for="exampleFormControlTextarea1" style="font-size: 14px">Deskripsi *</label>
            @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
        </div>
        <button class="btn btn-submit text-light float-right mt-3" type="submit" style="font-size: 15px; background-color: rgb(24, 204, 168);">Kirim</button>
    </form>
    <a href="../"><button class="btn text-light mt-3 ml-5 mt-3 mb-3" style="font-size: 15px; background-color: rgb(236, 181, 0);">Kembali</button></a>

</div>

@endsection