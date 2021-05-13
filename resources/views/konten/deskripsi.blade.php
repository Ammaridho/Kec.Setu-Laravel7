@extends('layouts.main')

@section('content')

    <head>
        <link rel="shortcut icon" type="image/jpg" href="/img/icon/lambang.png"/>
    </head>

    <div class="bg-white rounded p-4" id="contentkiri">

        <h1 style="font-family: BebasNeueRegular; font-size:28px; font-weight:bold;">{{$deskripsi->judul}}</h1>
        <br>
        <?php
            echo htmlspecialchars_decode(stripslashes($deskripsi->isi));
        ?>
    </div>

@endsection