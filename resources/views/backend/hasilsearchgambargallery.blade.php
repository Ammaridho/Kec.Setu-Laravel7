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

    <h2 class="text-center mt-3">DAFTAR GAMBAR</h2>
    <h6 class="mt-2 text-center" id="judulkonten" style="font-size: 22px">Cari : {{$keyword}}</h6>

    <div class="rounded p-4" id="contentkiri">

        @foreach ($hasilsearch as $a)
            <div class="col card m-2">
                <div class="card-body">
                    {{-- <h1>aa{{$a->gambar_bacaan[0]->gambar}}</h1> --}}
                    <h1 style="font-family: BebasNeueRegular; font-size:28px; font-weight:bold; text-align:center;">{{$a->nama}}</h1>
                    <h1 style=" font-size:10px;">postedby: {{$a->postedby}}</h1>
                    <h1 style=" font-size:10px;">dibuat: {{$a->created_at}}</h1>
                    <h1 style=" font-size:10px; margin-bottom:-15px;">diupdate: {{$a->updated_at}}</h1>

                    <br>
                    <img src="/img/gambargallery/{{$a->gambar}}" alt="error" id="gambartabbaru" style="height: 125px;display: block; margin-left: auto; margin-right: auto;">
                    
                    <br>
                    <pre style=" height: 50px; font-size: 13px; border:0px; white-space: pre-wrap;" disabled>{{$a->isi}}</pre style="width: 100%; height: 400px;">
        

                    <div class="row">
                    <div class="col-2">        
                        {{-- button edit --}}
                        <a href="/gambargallery/{{$a->id}}/edit" class="btn btn-info btn-sm" style="font-size: 75%;">Edit</a>
                    </div>

                    <div class="col-10">
                        {{-- button hapus --}}
                        <form action="/gambargallery/delete/{{$a->id}}"  method="post">
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