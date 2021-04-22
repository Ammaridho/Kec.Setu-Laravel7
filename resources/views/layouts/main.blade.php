<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/index.css">

    
    <title>Kec. Setu- Kota Tangerang Selatan</title>
<<<<<<< HEAD
=======
    <link rel="shortcut icon" type="image/jpg" href="img/icon/lambang.png"/>

>>>>>>> tanparelasi
  </head>
  <body>

    <div class="container-fluid" id="containerUtama">

        <!-- Header  =====================================================================================-->
        
            <!-- layer 1 -->
            <div class="row bg-light" id="headerlayer1">

                <div class="col-3" id="divtanggalheader">
                    <input type="text" name="search" value="{{Carbon\Carbon::now()->format('d  M  Y')}}" id="tanggalheader" disabled>
                </div>

                <div class="col-9" id="divsearchtextinput">
                    <form class="formSearch" id="searchForm" action="/search" method="get">
                        <input type="text" name="search" placeholder="Pencarian Berita" id="searchtextinput">
                        <button type="submit" id="submitSearch"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search text-light" viewBox="0 -2 20 20">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg></button>
                    </form>
                </div>

            </div>

            <!-- layer 2 -->
            <div class="bannertop row bg-success">
                <img src="/img/banner.png" alt="bannertop">
            </div>

            <!-- layer 3 -->
            <div class="row sticky-top" id="headerlayer3">
                <nav class="navbar navbar-expand-xl navbar-dark" id="navbaratas">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="navbaratasCollapse">
                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" width="28" height="30" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 20 25">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                      </svg></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" style="line-height: 14px; margin-left:-10px;"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item active dropdown ml-2" id="ygborder">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Sekilas Kecamatan</a>
                            <a class="dropdown-item" href="#">Visi dan Misi</a>
                            <a class="dropdown-item" href="#">Tugas Pokok dan fungsi</a>
                            <a class="dropdown-item" href="#">Struktur Organisasi</a>
                            <a class="dropdown-item" href="#">Profil Pejabat</a>
                            <a class="dropdown-item" href="#">Sambutan</a>
                            <a class="dropdown-item" href="#">Prestasi Kecamatan</a>
                        </div>
                        </li>
                        <li class="nav-item active dropdown" id="ygborder">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pelayanan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Penerbitan E-KTP</a>
                                <a class="dropdown-item" href="#">Penerbitan Kartu Keluarga</a>
                                <a class="dropdown-item" href="#">Permohonan Surat Pindah</a>
                                <a class="dropdown-item" href="#">Pengesahan SKDU dan Yayasan </a>
                                <a class="dropdown-item" href="#">Pengesahan SKCK</a>
                                <a class="dropdown-item" href="#">Pengesahan Surat Pernyataan Waris</a>
                                <a class="dropdown-item" href="#">Permohonan Surat Dispensasi Pernikahan</a>
                                <a class="dropdown-item" href="#">Pengesahan SKTM</a>
                                <a class="dropdown-item" href="#">Penerbitan Akta Jual Beli/Hibah/Pembagian Hak</a>
                            </div>
                        </li>
                        <li class="nav-item active dropdown" id="ygborder">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kelurahan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Kelurahan Setu</a>
                                <a class="dropdown-item" href="#">Kelurahan Keranggan</a>
                                <a class="dropdown-item" href="#">Kelurahan Muncul</a>
                                <a class="dropdown-item" href="#">Kelurahan Babakan</a>
                                <a class="dropdown-item" href="#">Kelurahan Bakti Jaya</a>
                                <a class="dropdown-item" href="#">Kelurahan Kademangan</a>
                            </div>
                        </li>
                        <li class="nav-item active dropdown" id="ygborder">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produk Hukum
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Peraturan Daerah</a>
                                <a class="dropdown-item" href="#">Peraturan Walikota</a>
                                <a class="dropdown-item" href="#">Keputusan Walikota</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#" id="ygborder">Berita Kecamatan</a>
                        </li>
                        <li class="nav-item active dropdown" id="ygborder">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gallery
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/gambargallery">Album Foto</a>
                                <a class="dropdown-item" href="/videogallery">Album Video</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#" id="ygborder">Pengaduan</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#" id="ygborder">Informasi Publik</a>
                        </li>
                        <li class="nav-item active">
<<<<<<< HEAD
                            <a class="nav-link" href="#" id="ygborder">BACK END</a>
=======
                            <a class="nav-link text-warning font-weight-bold" href="../login" id="ygborder">BACK END</a>
>>>>>>> tanparelasi
                        </li>
                    </ul>
                    </div>
                </nav>
            </div>

            {{-- <div class="row sticky-top" id="headerlayer3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
            </div> --}}
        <!-- Akhir Header =====================================================================================-->


        <!-- Mini Header =====================================================================================-->
            <div class="row mt-1">
                <div class="col-fluid shadow-md p-1" id="miniheader1">
                    <h6 id="hntext">HEADLINE NEWS</h6>
                </div>

                <div class="col-fluid shadow-md p-1 bg-light" id="miniheader2">
                   
                    <div id="carouselExampleCaptions miniheader2" data-ride="carousel">
            
                        <div class="carousel-inner">
            
                            <div class="carousel-item active">
                                <a href="../{{$bacaan[0]->id}}/isibacaan"><p class="wadah-mengetik text-dark" id="isihntext">{{$bacaan[0]->judul}}</p>
                            </div>
            
                            @for ($i = 1; $i < count($bacaan); $i++)
                                <div class="carousel-item">
                                    <a href="../{{$bacaan[$i]->id}}/isibacaan"><p class="wadah-mengetik text-dark" id="isihntext">{{$bacaan[$i]->judul}}</p></a>
                                </div>
                            @endfor
                            
                        </div>
                    </div>
                </div>
            </div>
        <!-- Akhir Mini Header =====================================================================================-->


        <!-- Content =====================================================================================-->
            <div class="row bg-light p-3 mt-1">

                {{-- konten kiri --}}
                <div class="col-md-8">


                    @yield('content')

                    {{-- <div class="bg-white rounded" id="contentkiri">
                        
                    </div> --}}


                    <div class="row">
                        {{-- <div class="jumbotron" id="beritajumbotron">  --}}
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="/img/1.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block rounded" id="judulberitajumbotron">
                                      <h5>First slide label</h5>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="/img/bg.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block" id="judulberitajumbotron">
                                      <h5>Second slide label</h5>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="/img/bi.jpeg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block" id="judulberitajumbotron">
                                      <h5>Third slide label</h5>
                                    </div>
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                        {{-- </div> --}}
                    </div>
                
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <h6 id="judulkonten" style="font-size: 22px">BERITA</h6> 
                            <div class="bg-white rounded" id="contentkiri">

                                <div class="row">
                                
                                    <div class="col-sm-6" style="padding:10px;">
                                        
                                        <img src="/img/baru1.PNG" alt="error" id="gambarberitaindex" style="width: 90%; margin-left: 20px;">
                                        <h5 id="judulgambarberitaindex">Pelaku UMKM di Tangsel Harus Manfaatkan Teknologi</h5>
                                        <h6 id="tanggalgambarberitaindex">30 juli 2020, 14:35:36</h6>
                                        <p id="tulisannormal">Pelaku UMKM di Tangsel Harus Manfaatkan Teknologi...</p>
                                        <div class="readmore"><a href="" id="tulisannormal" style="color: black">Read More >></a></div>

                                    </div>
                                    
                                    <div class="col-sm-6">
                                    
                                        <div class="row pt-2" style="box-shadow: rgb(181, 181, 181) 0px 0px 4px 0px; background-color:#F7F7F7; width:99.5%; margin-left:1px;">

                                            <div class="col-sm-4">
                                                <img src="/img/baru1.PNG" alt="error" id="gambarberitaindex">
                                                <p class="text-center" style="font-size:11px; color:#B3B3B3;">05 Agustus 2021</p>
                                            </div>
                                            
                                            <div class="col-sm-8 pt-1">
                                                <p style="font-size:14px; font-weight:400px; line-height:15px;";>Pemkot Tangsel Memperingati hari 17 agustus</p>
                                            </div>
                                            
                                        </div>

                                        {{-- perulangan 1--}}
                                        <div class="row pt-2" style="box-shadow: rgb(181, 181, 181) 0px 0px 4px 0px; background-color:#F7F7F7; width:99.5%; margin-left:1px;">

                                            <div class="col-sm-4">
                                                <img src="/img/baru1.PNG" alt="error" id="gambarberitaindex">
                                                <p class="text-center" style="font-size:11px; color:#B3B3B3;">05 Agustus 2021</p>
                                            </div>
                                            
                                            <div class="col-sm-8 pt-1">
                                                <p style="font-size:14px; font-weight:400px; line-height:15px;";>Pemkot Tangsel Memperingati hari 17 agustus</p>
                                            </div>
                                            
                                        </div>
                                        {{-- perulangan 2--}}
                                        <div class="row pt-2" style="box-shadow: rgb(181, 181, 181) 0px 0px 4px 0px; background-color:#F7F7F7; width:99.5%; margin-left:1px;">

                                            <div class="col-sm-4">
                                                <img src="/img/baru1.PNG" alt="error" id="gambarberitaindex">
                                                <p class="text-center" style="font-size:11px; color:#B3B3B3;">05 Agustus 2021</p>
                                            </div>
                                            
                                            <div class="col-sm-8 pt-1">
                                                <p style="font-size:14px; font-weight:400px; line-height:15px;";>Pemkot Tangsel Memperingati hari 17 agustus</p>
                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h6 id="judulkonten" style="font-size: 22px">KEGIATAN</h6>
                            <div class="bg-white rounded" id="contentkiri" style="padding:15px; padding-bottom:-10px;">
                                    
                                
                                <img src="/img/baru1.PNG" alt="error" id="gambarberitaindex">
                                <h5 id="judulgambarberitaindex">Pelaku UMKM di Tangsel Harus Manfaatkan Teknologi</h5>
                                <h6 id="tanggalgambarberitaindex">30 juli 2020, 14:35:36</h6>
                                <p id="tulisannormal">Pelaku UMKM di Tangsel Harus Manfaatkan Teknologi...</p>
                                <div class="readmore mb-3"><a href="" id="tulisannormal" style="color: black;">Read More >></a></div>

                                <div class="row pt-2" style="background-color:#F7F7F7; width:111%; box-shadow: 0 0 5px #cacaca;">

                                    <div class="col-sm-4">
                                        <img src="/img/baru1.PNG" alt="error" id="gambarberitaindex">
                                        <p class="text-center" style="font-size:11px; color:#B3B3B3;">05 Agustus 2021</p>
                                    </div>
                                    
                                    <div class="col-sm-8 pt-1">
                                        <p style="font-size:14px; font-weight:400px; line-height:15px;";>Pemkot Tangsel Memperingati hari 17 agustus</p>
                                    </div>
                                    
                                </div>
                                <div class="row pt-2" style="background-color:#F7F7F7; width:111%; box-shadow: 0 0 5px #cacaca;">

                                    <div class="col-sm-4">
                                        <img src="/img/baru1.PNG" alt="error" id="gambarberitaindex">
                                        <p class="text-center" style="font-size:11px; color:#B3B3B3;">05 Agustus 2021</p>
                                    </div>
                                    
                                    <div class="col-sm-8 pt-1">
                                        <p style="font-size:14px; font-weight:400px; line-height:15px;";>Pemkot Tangsel Memperingati hari 17 agustus</p>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-sm-6">
                            <h6 id="judulkonten" style="font-size: 22px">ARTIKEL</h6>
                            <div class="bg-white rounded" id="contentkiri" style="padding:10px;">
                                <img src="/img/baru1.PNG" alt="error" id="gambarberitaindex" >
                                <h5 id="judulgambarberitaindex">Pelaku UMKM di Tangsel Harus Manfaatkan Teknologi</h5>
                                <h6 id="tanggalgambarberitaindex">30 juli 2020, 14:35:36</h6>
                                <p id="tulisannormal">Pelaku UMKM di Tangsel Harus Manfaatkan Teknologi...</p>
                                <div class="readmore"><a href="" id="tulisannormal" style="color: black">Read More >></a></div>

                            </div>
                        </div>
                    </div>
                
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <h6 id="judulkonten" style="font-size: 22px">GALERI PHOTO</h6> 
                            <div class="bg-white rounded" id="contentkiri" style="padding: 15px;">
                                <a href=""><img src="/img/bg.png" alt="" style="width:130px;"></a>
                            </div>     
                        </div>
                    </div>
            
                </div>  
                {{-- akhir konten kiri --}}

                {{-- konten kanan --}}
                <div class="col-md-4">
                    
                    <div class="tabtab bg-white rounded mb-4" id="contentkanan">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation" id="headtab">
                            <a class="nav-link active text-secondary" id="judultab" data-toggle="tab" href="#baru" role="tab" aria-controls="baru" aria-selected="true">Baru</a>
                            </li>
                            <li class="nav-item" role="presentation" id="headtab">
                            <a class="nav-link text-secondary" id="judultab" data-toggle="tab" href="#tags" role="tab" aria-controls="tags" aria-selected="false">Tags</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active pt-3" id="baru" role="tabpanel" aria-labelledby="baru-tab">
                                
                                <div class="row mb-3">

<<<<<<< HEAD
                                    <div class="col-sm-6">
                                        <img src="/img/baru1.PNG" alt="error" id="gambartabbaru">
                                    </div>
                                    
                                    <div class="col-sm-6 pt-1">
                                        <p style="font-size:13px; font-weight:400px; line-height:15px;";>Pemkot Tangsel Memperingati hari 17 agustus</p>
                                        <p style="font-size:11px; margin-top:-12px; color:#B3B3B3;">05 Agustus 2021</p>
=======
                                    <div class="row mt-1 mb-2" >
                                        <div class="col-5">
                                            {{-- @foreach ($gambar_bacaan->where('id',(int)$key+1)->take(1) as $gambars) --}}
                                            <a href="../{{$item->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$item->gambar}}" alt="error" id="gambartabbaru"></a>
                                            {{-- @endforeach --}}
                                        </div>
                                        
                                        <div class="col-7">
                                            <a href="../{{$item->id}}/isibacaan"><p style="font-size:13px; font-weight:400px; line-height:15px; color:black;">{{$item->judul}}</p></a>
                                            <p style="font-size:11px; margin-top:-12px; color:#B3B3B3;">{{$item->created_at}}</p>
                                        </div>
                                        
>>>>>>> tanparelasi
                                    </div>
                                    
                                </div>
                                {{-- akan perulangan --}}
                                <div class="row mb-3">

                                    <div class="col-sm-6">
                                        <img src="/img/baru1.PNG" alt="error" id="gambartabbaru">
                                    </div>
                                    
                                    <div class="col-sm-6 pt-1">
                                        <p style="font-size:13px; font-weight:400px; line-height:15px;";>Pemkot Tangsel Memperingati hari 17 agustus</p>
                                        <p style="font-size:11px; margin-top:-12px; color:#B3B3B3;">05 Agustus 2021</p>
                                    </div>
                                    
                                </div>

                                <a href="/beritakecamatan"><p style="font-size:12px; margin-top: 15px; color:#B3B3B3;">Tampilkan semua >></p></a>

                            </div>
                            <div class="tab-pane fade pt-3" id="tags" role="tabpanel" aria-labelledby="tags-tab">
                                <a href="../tags/{{'berita'}}"><button id="btntag">Berita</button></a>
                                <a href="../tags/{{'kegiatan'}}"><button id="btntag">Kegiatan</button></a>
                                <a href="../tags/{{'artikel'}}"><button id="btntag">Artikel</button></a>
                            </div>
                        </div>
                    </div>

<<<<<<< HEAD
                    <h6 id="judulkonten">VIDEO</h6> 
=======
                    <div class="row">
                        <div class="col-2">
                            <h6 id="judulkonten">VIDEO</h6>
                        </div>
                        <div class="col-10" id="lokasipatern">
                            <div class="patern"></div>
                        </div>
                    </div>

                    
>>>>>>> tanparelasi
                    <div class="bg-white rounded mb-4 p-2 text-center" id="contentkanan">
                        @foreach ($videogallery as $item)
                            <iframe class="embed-responsive-item mb-1" style="width: 100%;" src="{{$item->video}}" frameborder="0" allowfullscreen></iframe>
                        @endforeach
                    </div>     
                    

                    <div class="rounded mb-4" id="gambarkanan">
<<<<<<< HEAD
=======
                        <img id="myImg" src="/img/gambar.PNG" alt="Pengaduan Tangsel" style="width:100%; height:100%;">

                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <h6 id="judulkonten">SOSIAL MEDIA</h6>
                        </div>
                        <div class="col-6" id="lokasipatern">
                            <div class="patern"></div>
                        </div>
>>>>>>> tanparelasi
                    </div>

                    <h6 id="judulkonten">SOSIAL MEDIA</h6>
                    <div class="bg-white rounded mb-4 p-2 text-center" id="contentkanan">
<<<<<<< HEAD
                        <img src="/img/icon/youtube.png" alt="iconyoutube" id="iconsm">
                        <img src="/img/icon/facebook.png" alt="iconfacebook" id="iconsm">
                        <img src="/img/icon/twitter.png" alt="icontwitter" id="iconsm">
                        <img src="/img/icon/instagram.png" alt="iconinstagram" id="iconsm">
=======
                        <a href="https://www.youtube.com/channel/UCiv-tVNor79V-nnRDp-fRqQ"><img src="/img/icon/youtube.png" alt="iconyoutube" id="iconsm"></a>
                        <a href="https://www.facebook.com/HumasTangsel/"><img src="/img/icon/facebook.png" alt="iconfacebook" id="iconsm"></a>
                        <a href="https://twitter.com/humastangsel/"><img src="/img/icon/twitter.png" alt="icontwitter" id="iconsm"></a>
                        <a href="https://www.instagram.com/humaskotatangsel/"><img src="/img/icon/instagram.png" alt="iconinstagram" id="iconsm"></a>
>>>>>>> tanparelasi
                    </div>

                    <h6 id="judulkonten">TAUTAN</h6>
                    <div class="bg-white rounded mb-4 text-center" id="contentkanan">
                        <a href="https://www.tangerangselatankota.go.id/"><img src="/img/tautan1.PNG" style="width: 100%; border-bottom: 1px solid;" alt=""></a>
                        <a href="https://bantenprov.go.id/"><img src="/img/tautan2.PNG" style="width: 100%; border-bottom: 1px solid; padding-bottom: 5px;" alt=""></a>
                        <a href="https://e-ppid.tangerangselatankota.go.id/"><img src="/img/tautan3.PNG" style="width: 96%; margin-left:8px; margin-top:4px; margin-bottom: 10px;" alt=""></a>
                    </div>
                
                </div>
                {{-- akhir konten kanan --}}
                        
            </div>
        <!-- Akhir Content =====================================================================================-->


        {{-- Footer =====================================================================================--}}
            <div class="row mt-2 pt-3 pl-2 pr-2" id="footer1">
                <div class="col-sm-4">
                    <h5 id="judulfooter">TAG TERKAIT</h5>
                    <div class="isikontenfooter">
                        <button id="btntagbawah">Berita</button>
                        <button id="btntagbawah">Kegiatan</button>
                        <button id="btntagbawah">Artikel</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h5 id="judulfooter">TAUTAN</h5>
                    <div class="isikontenfooter">
                        <a href=""><p class="text-light" id="tautanfooter">Pengaduan Masyarakat</p></a>
                        <a href=""><p class="text-light" id="tautanfooter">Website Tangerang Selatan</p></a>
                        <a href=""><p class="text-light" id="tautanfooter">Disdukcapil</p></a>
                        <a href=""><p class="text-light" id="tautanfooter">Dinas Pendidikan Dan Kebudayaan</p></a>
                        <a href=""><p class="text-light" id="tautanfooter">DPMPTSP</p></a>
                        <a href=""><p class="text-light" id="tautanfooter">Polres Tangsel</p></a>
                        <a href=""><p class="text-light" id="tautanfooter">Diskominfo</p></a>
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <h5 id="judulfooter">ALAMAT KECAMATAN SETU</h5>

                    <div class="isikontenfooter">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.049068149776!2d106.673745!3d-6.3276!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde6d034bf745a26c!2sKantor%20Camat%20Setu%20Tangerang%20Selatan!5e0!3m2!1sid!2sid!4v1617548183617!5m2!1sid!2sid" width="100%" height="145" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <p class="text-light" id="aks">Alamat : <br>
                            Jl. Raya Puspitek, Setu, Kota Tangerang Selatan, Banten 15314</p>
                        <p class="text-light" id="aks">No Telp : (021) 75791444
                            <br>E-mail   : kecsetu@tangerangselatankota.go.id</p>
                        <p class="text-light" id="aks">Waktu Pelayanan:<br>
                            Senin s/d Jum'at Pukul 08.00 - 15.30
                            <br>Istirahat Pukul 12.00 - 13.00</p>
                    </div>
                </div>
            </div>
            
            <div class="row" id="footer2">
                <p style="color: #CCCCCC; font-size:13px; line-height: 50px; text-indent: 10px; font-family: Arial;">&copy Copyright 2020 | </p><a href="/"><p style="color: #CCCCCC; font-size:13px; line-height: 50px; text-indent: 10px; font-family: Arial; text-decoration: none;">Kecamatan Setu - Kota Tangerang Selatan</p></a>
            </div>
        {{-- Akhir Footer =====================================================================================--}}

    </div>
    










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
  </body>
</html>