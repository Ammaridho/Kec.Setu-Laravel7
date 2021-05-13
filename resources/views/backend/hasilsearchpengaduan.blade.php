@extends('layouts.backendmain')

@section('backendcontent')
    <div class="row">
        <div class="col-md-4 mt-2">
            <a href="../backendindex"><button class="btn text-light bg-success">Kembali</button></a>
        </div>
        <div class="col-md-8 mt-2" id="lokasipatern">
            <div class="patern"></div>
        </div>
    </div>

    <h2 class="text-center mt-3">DAFTAR PENGADUAN</h2>
    <h6 class="mt-2 text-center" id="judulkonten" style="font-size: 22px">Cari : {{$keyword}}</h6>

    <div class="rounded p-4">


        @foreach ($hasilsearch as $a)

            {{-- @if (($a->perihal))
                
            @endif --}}

            <div class="col card m-2">
                <div class="card-body">

                    <h1 style="font-family: BebasNeueRegular; font-size:28px; font-weight:bold;">{{$a->perihal}}</h1>
                    <h1 style=" font-size:10px;">penulis: {{$a->nama}}</h1>
                    <h1 style=" font-size:10px; margin-bottom:-15px;">dibuat: {{$a->created_at}}</h1>
                    <br>
                    <pre style=" height: 100px; font-size: 13px; border:0px; white-space: pre-wrap;" disabled>{{$a->deskripsi}}</pre style="width: 100%; height: 400px; ">
            

                    <div class="row">
                        <div class="col-2">
                        {{-- button lihat --}}
                        <a href="/pengaduan/{{$a->id}}" class="btn btn-info btn-sm">Baca</a>
                        </div>

                        <div class="col-10">
                            {{-- button hapus --}}
                            <form action="/backendindex/pengaduan/{{$a->id}}"  method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
@endsection