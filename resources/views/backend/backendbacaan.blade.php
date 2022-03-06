@extends('layouts.backendmain')

@section('backendcontent')

    <a href="/backendindex"><button class="btn text-light bg-success">Kembali</button></a>
    
    <h1 class="text-center mt-3">DETAIL BACAAN</h1>

    <div class="bg-white rounded mb-4" id="bacabacaan"> 
        
        <div class="row">
            <div class="col-1">
                {{-- button edit --}}
                <a href="/bacaan/{{$bacaan->id}}/edit" class="btn btn-info btn-sm">Edit</a>
            </div>

            <div class="col-11" >
                {{-- button hapus --}}
                <form action="/bacaan/{{$bacaan->id}}"  method="post" style="float: right">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                </form> 
            </div>
        </div>

        <div class="col p-5">

            <h1 style="font-family: BebasNeueRegular; font-size:28px; font-weight:bold; text-align:center; ">{{$bacaan->judul}}</h1>
            <br>
                <h1 style=" font-size:11px;">postedby: {{$bacaan->postedby}}</h1>
                <h1 style=" font-size:11px;">dibuat: {{$bacaan->created_at}}</h1>

                @if (($bacaan->created_at) == ($bacaan->updated_at))
                  <?php $update = 'Belum Pernah di update' ?>

                @else
                  <?php $update = $bacaan->updated_at ?>
                
                @endif

                <h1 style=" font-size:11px; margin-bottom:-15px;">diupdate: {{$update}}</h1>
            <br>
            <img src="/img/gambar_bacaan/{{$bacaan->gambar}}" alt="error" id="gambartabbaru" style="display: block; margin-left: auto; margin-right: auto; height: 200px;">
            <br>
            
            <?php
                echo htmlspecialchars_decode(stripslashes($bacaan->isi));
            ?>

            {{-- echo htmlspecialchars_decode(stripslashes($row['details'])); --}}

            {{-- {{htmlspecialchars_decode(stripslashes($bacaan->isi))}} --}}

        </div>
    </div>
        
    
    
    

@endsection