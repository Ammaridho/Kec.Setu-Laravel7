@extends('layouts.backendmain')

@section('backendcontent')
    <div class="row">
        <div class="col-md-4 mt-2">
            <a href="/backendindex"><button class="btn text-light bg-success">Kembali</button></a>
        </div>
        <div class="col-md-8 mt-2" id="lokasipatern">
            <div class="patern"></div>
        </div>
    </div>

    <h2 class="text-center mt-3">DAFTAR DESKRIPSI</h2>
    <h6 class="mt-2 text-center" id="judulkonten" style="font-size: 22px">Cari : {{$keyword}}</h6>

    <div class="bg-white rounded p-4" id="contentkiri">

        @foreach ($hasilsearch as $a)
            <div class="col card m-2">
                <div class="card-body">
                    {{-- <h1>aa{{$a->deskripsi_bacaan[0]->deskripsi}}</h1> --}}
                    <h1 style="font-family: BebasNeueRegular; font-size:28px; font-weight:bold; text-align:center;">{{$a->judul}}</h1>
                    
                    <br>
                    <?php
                        echo htmlspecialchars_decode(stripslashes($a->isi));
                    ?>
                    <div class="row">
                    <div class="col-2">        
                        {{-- button edit --}}
                        <a href="/deskripsigallery/{{$a->id}}/edit" class="btn btn-info btn-sm" style="font-size: 75%;">Edit</a>
                    </div>

                    <div class="col-10">
                        {{-- button hapus --}}
                        <form action="/deskripsigallery/delete/{{$a->id}}"  method="post">
                            @csrf
                            @method('DELETE')
                            {{-- <a class="btn btn-danger"  >Hapus</i></a> --}}
                            <button class="btn btn-sm btn-danger float-right" onclick="return confirm('Are you sure?')">Hapus</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
@endsection