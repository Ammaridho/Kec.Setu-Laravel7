@extends('layouts.backendmain')

@section('backendcontent')

    <h1 class="text-center mt-2">INPUT DESKRIPSI</h1>

    @if ($errors->any())                                       {{-- jika ada error --}}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)            {{-- tampilkan semua --}}
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form class="ml-5 mr-5 text-light pt-3 pl-4 pr-4 pb-2 bg-dark rounded" action="/deskripsi/{{$deskripsi->id}}" method="POST" enctype="multipart/form-data">
        
        @csrf

        @method('PUT')
    
        <x-textfield field="judul" label="Judul" type="text" value="{{$deskripsi->judul}}"/>

        <div class="textarea" style="background-color: white; color:black; margin-bottom:30px;" >
            <textarea class="summernote" name="isi">{{$deskripsi->isi}}</textarea>
        </div>
        
        <center><label>Anda bisa melebarkannya dengan menarik bagian tengah pada kolom isi</label></center>

        <div class="div" style="float: right">
            <button class="btn btn-submit text-light bg-success float-right mt-4" type="submit" >Simpan</button>
        </div>

        </form>
      <a href="/backendindex"><button class="btn text-light bg-success float-left mt-3 ml-5 mb-3">Kembali</button></a>


@endsection