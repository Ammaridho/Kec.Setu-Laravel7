@extends('layouts.main')

@section('content')

    {{-- @foreach ($deskripsi as $item) --}}

    <div class="bg-white rounded p-4" id="contentkiri">

        <h1 style="font-family: BebasNeueRegular; font-size:28px; font-weight:bold;">{{$deskripsi->judul}}</h1>
        <br>
        <pre style="width: 100%; height: 100%; font-size: 13px; border:0px; white-space: pre-wrap;" disabled>{{$deskripsi->isi}}</pre style="width: 100%; height: 400px;">

    </div>

    {{-- @endforeach --}}

@endsection