@extends('layouts.backendmain')

@section('backendcontent')

<div class="row">
          <div class="col-3" id="navigasi">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="beranda-list" data-toggle="list" href="#beranda" role="tab" aria-controls="home" style="font-size: 75%">Beranda</a>
              <a class="list-group-item list-group-item-action" id="bacaan-list" data-toggle="list" href="#bacaan" role="tab" aria-controls="profile" style="font-size: 75%">Bacaan</a>
              <a class="list-group-item list-group-item-action" id="pengaduan-list" data-toggle="list" href="#pengaduan" role="tab" aria-controls="messages" style="font-size: 75%">Pengaduan</a>
              <a class="list-group-item list-group-item-action" id="gambar-list" data-toggle="list" href="#gambar" role="tab" aria-controls="gambar" style="font-size: 75%">Gambar</a>
            </div>
          </div>
          <div class="col-9" id="isiindex">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="beranda" role="tabpanel" aria-labelledby="beranda-list">
                  <h1 class="text-center mt-3 pt-5" style="font-size: 200%">Selamat Datang di bagian BACK END</h1>

                  <h3 class="text-center mt-4 pb-5" style="font-size: 100%">Developed by Ammaridho</h3>
              </div>
              <div class="tab-pane fade" id="bacaan" role="tabpanel" aria-labelledby="bacaan-list">
                
                <h1 class="text-center mt-3" style="font-size: 150%">DAFTAR BACAAN</h1>

                <nav class="navbar">
                  <a href="../backendinputbacaan"><button class="btn btn-outline-success my-2 my-sm-0 bg-success text-light">Tambah</button></a>
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Tulis Disini.." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 bg-success text-light" type="submit">Cari</button>
                  </form>
                </nav>
                
                @foreach ($bacaan as $a)
                  <div class="col card m-2">
                    <div class="card-body">
                        {{-- <h1>aa{{$a->gambar_bacaan[0]->gambar}}</h1> --}}
                        <h1 style="font-family: BebasNeueRegular; font-size:28px; font-weight:bold; text-align:center;">{{$a->judul}}</h1>
                        <h1 style=" font-size:10px;">postedby: {{$a->postedby}}</h1>
                        <h1 style=" font-size:10px;">dibuat: {{$a->created_at}}</h1>
                        <h1 style=" font-size:10px; margin-bottom:-15px;">diupdate: {{$a->updated_at}}</h1>

                        <br>
                        <img src="/img/gambar_bacaan/{{$a->gambar}}" alt="error" id="gambartabbaru" style="height: 125px;display: block; margin-left: auto; margin-right: auto;">
                        
                        <br>
                        <pre style=" height: 50px; font-size: 13px; border:0px; white-space: pre-wrap;" disabled>{{$a->isi}}</pre style="width: 100%; height: 400px;">
              

                        <div class="row">
                          <div class="col-2">
                            {{-- button lihat --}}
                            <a href="/bacaan/{{$a->id}}" class="btn btn-info btn-sm" style="font-size: 75%;">Baca</a>
            
                            {{-- button edit --}}
                            <a href="/bacaan/{{$a->id}}/edit" class="btn btn-info btn-sm" style="font-size: 75%;">Edit</a>
                          </div>

                          <div class="col-10">
                              {{-- button hapus --}}
                              <form action="/backendindex/bacaan/{{$a->id}}"  method="post">
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

                <div>
                  {{-- link pindah halaman untuk melihat data selanjutnya  --}}
                  {{-- {{ $bacaan->links() }} --}}
                </div>

              </div>
              <div class="tab-pane fade" id="pengaduan" role="tabpanel" aria-labelledby="pengaduan-list">
                
                <h1 class="text-center mt-3" style="font-size: 150%">DAFTAR PENGADUAN</h1>

                <nav class="navbar">
                  <p class=""></p>
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Tulis Disini.." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 bg-success text-light" type="submit">Cari</button>
                  </form>
                </nav>
                
                @foreach ($pengaduan as $a)
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
                                <button class="btn btn-sm btn-danger">Hapus</button>
                              </form> 
                          </div>
                        </div>
                    </div>
                  </div>
                @endforeach

                <div>
                  {{-- link pindah halaman untuk melihat data selanjutnya  --}}
                  {{-- {{ $bacaan->links() }} --}}
                </div>

              </div>
              <div class="tab-pane fade" id="gambar" role="tabpanel" aria-labelledby="gambar-list">
                
                <h1 class="text-center mt-3" style="font-size: 150%">DAFTAR GAMBAR</h1>

                <nav class="navbar">
                  <a href="/gambargallery/input"><button class="btn btn-outline-success my-2 my-sm-0 bg-success text-light">Tambah</button></a>
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Tulis Disini.." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 bg-success text-light" type="submit">Cari</button>
                  </form>
                </nav>
                
                
                @foreach ($gambargallery as $a)
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
                <div>
                  {{-- link pindah halaman untuk melihat data selanjutnya  --}}
                  {{-- {{ $bacaan->links() }} --}}
                </div>

              </div>
          </div>
        </div>

@endsection