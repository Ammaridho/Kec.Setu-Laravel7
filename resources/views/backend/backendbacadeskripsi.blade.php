@extends('layouts.backendmain')

@section('backendcontent')

    <a href="../backendindex"><button class="btn text-light bg-success">Kembali</button></a>
    
    <h1 class="text-center mt-3">DETAIL DESKRIPSI</h1>

    <div class="bg-white rounded mb-4" id="bacabacaan"> 

        <div class="row">
            <div class="col-1">
                {{-- button edit --}}
                <a href="/deskripsi/{{$deskripsi->id}}/edit" class="btn btn-info btn-sm">Edit</a>
            </div>

            <div class="col-11" >
                {{-- button hapus --}}
                <form action="/deskripsi/{{$deskripsi->id}}"  method="post" style="float: right">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                </form> 
            </div>
        </div>

        <div class="col p-5">

            <h1 style="font-family: BebasNeueRegular; font-size:28px; font-weight:bold; text-align:center; ">{{$deskripsi->judul}}</h1>
            
            <br>

            <?php
                echo htmlspecialchars_decode(stripslashes($deskripsi->isi));
            ?>

        </div>
    </div>
        
    
    
    

@endsection