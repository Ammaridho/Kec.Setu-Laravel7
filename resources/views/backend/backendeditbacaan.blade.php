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
    
    <form class="ml-5 mr-5 text-light pt-3 pl-4 pr-4 pb-2 bg-dark rounded" action="../backendindex" method="POST" enctype="multipart/form-data">
        
        @csrf

        <div class="form-group mb-4">
            <label for="exampleFormControlInput1">Pihak penginput</label>
              @error('postedby')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror 
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="postedby"
                value="{{old('postedby') ? old('postedby') : $bacaan->postedby}}">
        </div>

        <label>Perihal</label>
        @error('perihal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
        <div class="form-group mb-3">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio1" value="berita" {{old('perihal') == "berita" ? 'checked' : ''}} name="perihal">
                <label class="form-check-label" for="inlineRadio1">Berita</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio2" value="kegiatan" {{old('perihal') == "kegiatan" ? 'checked' : ''}} name="perihal">
                <label class="form-check-label" for="inlineRadio2">Kegiatan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio3" value="artikel" {{old('perihal') == "artikel" ? 'checked' : ''}}  name="perihal">
                <label class="form-check-label" for="inlineRadio3">Artikel</label>
            </div>
        </div>
        
        <div class="form-group mb-4">
          <label for="exampleFormControlInput2">Judul</label>
            @error('judul')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
          <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="" name="judul" value="{{old('judul') ? old('judul') : $bacaan->judul}}">
        </div>

        {{-- input gambar --}}
        <div class="input-group mb-3">
          <label for="gambar">Gambar</label>
          <input class="form-control-file" type="file" name="gambar" id="gambar">
       </div>
        {{-- akhir input gambar --}}

        <div class="form-group mt-3">
          <label for="exampleFormControlTextarea1">Isi</label>
            @error('isi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
          <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" style="height: 240px;" name="isi"></textarea>
            <center><label>Anda bisa melebarkannya dengan menarik pojok kanan bawah pada kolom isi</label></center>
        </div>

        <div class="div" style="float: right">
            <button class="btn btn-submit text-light bg-success float-right mt-4" type="submit" >Simpan</button>
        </div>

        </form>
      <a href="../backendindex"><button class="btn text-light bg-success float-left mt-3 ml-5 mb-3">Kembali</button></a>


@endsection