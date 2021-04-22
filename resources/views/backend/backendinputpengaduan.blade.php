@extends('layouts.backendmain')

@section('backendcontent')
    
    <form class="mt-2 text-light pt-3 pl-4 pr-4 pb-5 bg-dark">
        <div class="form-group">
          <label for="exampleFormControlInput1">Judul</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Perihal</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Berita</option>
            <option>Kegiatan</option>
            <option>Artikel</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Isi</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="btn btn-submit text-light bg-success">Kembali</div>
        <div class="btn btn-submit text-light bg-success float-right mr-3">Simpan</div>
      </form>


@endsection