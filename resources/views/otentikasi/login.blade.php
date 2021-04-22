@extends('layouts.backendmain')

@section('backendcontent')

<form class="pl-5 pb-5 pr-5 pt-2 bg-dark text-light rounded" style="width: 400px; margin: 80px auto" method="POST" action="../login">
    
    @csrf

    <div style="margin-left: -40px;">
      <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(23,165,137)" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
      </svg></a>
    </div>

    <h1 class="text-center mt-4">Login Developer</h1>
    
    @if (session('message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('message')}}
        </div>
    @endif

    <div class="form-group mt-4">
      <label for="exampleInputId1">ID</label>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <input type="text" class="form-control" id="exampleInputId1" aria-describedby="idHelp" name="name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    {{-- <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
    </div> --}}

    <div class="text-center mt-5">
      <button type="submit" class="btn text-dark"style="background-color: rgb(23,165,137);">Masuk</button>
    </div>
  </form>
  
@endsection