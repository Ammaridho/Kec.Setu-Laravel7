<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/jpg" href="img/icon/lambang.png"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/animate.css">
    
    <title>Kec. Setu- Kota Tangerang Selatan</title>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


    <style>

        /* hilangkan scroll */
        .navbar-nav::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .navbar-nav {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }


        /* Respondsive ===================================================================================== */

        @media (max-width: 766px) {
            #containerUtama{
                width:424px;
            }
            #miniheader2{ 
                width: 314px;
            }
            #asasasas{
                /* background-color: #000000; */
                background-image: url("/img/mobile.png");
            }
            .navbar-collapse{
                border-top: 3px solid rgb(23,165,137);
                margin-right: 220px;
                background-color: #242424e3;
                margin-left: -2px;
                margin-top: -1px;
                border-radius: 0px 30px 30px 30px;
            }
            .dropdown-menu{
                border-top: 3px solid rgb(23,165,137);
                border-bottom: 3px solid rgb(23,165,137);
            }
            .navbar-nav{
                border: 1px solid rgb(23,165,137);
                height: 420px;
                overflow-y:scroll;
                background-color: rgba(15, 15, 15, 0.479);
                border-radius: 0px 30px 30px 30px;
            }
            #watermark{
                font-size: 12px;
                margin-left: 12px;
            }

            #hntext{
                line-height: 27px;
            } 
        }

        @media (min-width: 766px) {
            #containerUtama{
                width:766px;
            }
            #miniheader2{ 
                width: 655px;
            }
            #gambarkanan{
                height: 250px;
            }
            #asasasas{
                background-image: url("/img/tablet.png");
                /* background-color: #000000; */
            }
            #hntext{
                line-height: 23px;
            } 
        }

        @media all and (max-width: 1046px) and (min-width: 766px) {
            .navbar-collapse{
                border-top: 3px solid rgb(23,165,137);
                margin-right: 550px;
                background-color: #242424e3;
                margin-left: -2px;
                margin-top: -1px;
                border-radius: 0px 30px 30px 30px;
            }
            .navbar-nav{
                border: 1px solid rgb(23,165,137);
                height: 420px;
                overflow-y:scroll;
                background-color: rgba(15, 15, 15, 0.479);
                border-radius: 0px 30px 30px 30px;
            }
            #hntext{
                line-height: 23px;
            } 
        }

        @media all and (max-width: 1199px) and (min-width: 1046px) {
            .navbar-collapse{
                border-top: 3px solid rgb(23,165,137);
                margin-right: 800px;
                background-color: #242424e3;
                margin-left: -2px;
                margin-top: -1px;
                border-radius: 0px 30px 30px 30px;
            }
            .navbar-nav{
                border: 1px solid rgb(23,165,137);
                height: 420px;
                overflow-y:scroll;
                background-color: rgba(15, 15, 15, 0.479);
                border-radius: 0px 30px 30px 30px;
            }
            #hntext{
                line-height: 22px;
            } 
        }


        @media (min-width: 1045px) {
            #containerUtama{
                width:1045px;
            }
            #miniheader2{ 
                width: 935px;
            }
            #gambarkanan{
                height: 400px;
            }   
            #asasasas{
                /* background-color: #000000; */
                background-image: url("/img/banner.png");
            }
            #hntext{
                line-height: 22px;
            } 
        }

        #asasasas{
            height: 130px;
            background-position: center;
            overflow:auto;
            background-size: cover;
        }

        /* Akhir Respondsive ================================================================================= */
    </style>

  </head>
  <body>

    <div class="container-fluid" id="containerUtama">

        <!-- Header  =====================================================================================-->
        
            <!-- layer 1 -->
            <div class="row bg-light" id="headerlayer1">

                <div class="col-2" id="divtanggalheader">
                    <input type="text" name="search" value="{{Carbon\Carbon::now()->format('d  M  Y')}}" id="tanggalheader" disabled>
                </div>

                <div class="col-5">
                    <h6 class="text-right" style="line-height: 30px; font-family:Fantasy;" id="watermark">Re-built By Ammaridho</h6>
                </div>


                <div class="col-5" id="divsearchtextinput">
                    <form class="formSearch" id="searchForm" action="/search" method="get">
                        <input type="text" name="search" placeholder="Pencarian Berita" id="searchtextinput">
                        <button type="submit" id="submitSearch"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search text-light" viewBox="0 -2 20 20">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg></button>
                    </form>
                </div>

            </div>

            <!-- layer 2 -->




            <div class="bannertop row" >
                <div class="col"id="asasasas">
                </div>
            </div>

            <!-- layer 3 -->
            <div class="row sticky-top" id="headerlayer3">
                <nav class="navbar navbar-expand-xl navbar-dark" id="navbaratas">
                    <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="navbaratasCollapse" style="border:1px solid rgb(23,165,137); padding-bottom:10px; margin-left:-5px;  line-height:1px; font-size:15px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#F8F9FA" class="bi bi-menu-button-wide-fill" viewBox="0 0 16 16">
                            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0h-13zm1 2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1zm9.927.427A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0l-.396-.396zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                          </svg> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/" style="line-height: 14px; margin-left:-10px;"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item active dropdown" id="ygborder">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profile
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../{{2}}/deskripsi">Sekilas Kecamatan</a>
                                    <a class="dropdown-item" href="../{{3}}/deskripsi">Visi dan Misi</a>
                                    <a class="dropdown-item" href="../{{4}}/deskripsi">Tugas Pokok dan fungsi</a>
                                    <a class="dropdown-item" href="../{{6}}/deskripsi">Struktur Organisasi</a>
                                    <a class="dropdown-item" href="../{{7}}/deskripsi">Profil Pejabat</a>
                                    <a class="dropdown-item" href="../{{8}}/deskripsi">Sambutan</a>
                                    <a class="dropdown-item" href="../{{9}}/deskripsi">Prestasi Kecamatan</a>
                                </div>
                            </li>
                            <li class="nav-item active dropdown" id="ygborder">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pelayanan
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../{{10}}/deskripsi">Penerbitan E-KTP</a>
                                    <a class="dropdown-item" href="../{{11}}/deskripsi">Penerbitan Kartu Keluarga</a>
                                    <a class="dropdown-item" href="../{{12}}/deskripsi">Permohonan Surat Pindah</a>
                                    <a class="dropdown-item" href="../{{13}}/deskripsi">Pengesahan SKDU dan Yayasan </a>
                                    <a class="dropdown-item" href="../{{14}}/deskripsi">Pengesahan SKCK</a>
                                    <a class="dropdown-item" href="../{{15}}/deskripsi">Pengesahan Surat Pernyataan Waris</a>
                                    <a class="dropdown-item" href="../{{16}}/deskripsi">Permohonan Surat Dispensasi Pernikahan</a>
                                    <a class="dropdown-item" href="../{{17}}/deskripsi">Pengesahan SKTM</a>
                                    <a class="dropdown-item" href="../{{18}}/deskripsi">Penerbitan Akta Jual Beli/Hibah/Pembagian Hak</a>
                                </div>
                            </li>
                            <li class="nav-item active dropdown" id="ygborder">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kelurahan
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../{{'Kelurahan Setu'}}/kelurahan">Kelurahan Setu</a>
                                    <a class="dropdown-item" href="../{{'Kelurahan Keranggan'}}/kelurahan">Kelurahan Keranggan</a>
                                    <a class="dropdown-item" href="../{{'Kelurahan Muncul'}}/kelurahan">Kelurahan Muncul</a>
                                    <a class="dropdown-item" href="../{{'Kelurahan Babakan'}}/kelurahan">Kelurahan Babakan</a>
                                    <a class="dropdown-item" href="../{{'Kelurahan Bakti Jaya'}}/kelurahan">Kelurahan Bakti Jaya</a>
                                    <a class="dropdown-item" href="../{{'Kelurahan Kademangan'}}/kelurahan">Kelurahan Kademangan</a>
                                </div>
                            </li>
                            <li class="nav-item active dropdown" id="ygborder">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Produk Hukum
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/perda">Peraturan Daerah</a>
                                    <a class="dropdown-item" href="/perwal">Peraturan Walikota</a>
                                    <a class="dropdown-item" href="/kepwal">Keputusan Walikota</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="../beritakecamatan" id="ygborder">Berita Kecamatan</a>
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
                                <a class="nav-link" href="/formpengaduan" id="ygborder">Pengaduan</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="https://e-ppid.tangerangselatankota.go.id/" id="ygborder">Informasi Publik</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link text-warning font-weight-bold" href="../login" id="ygborder">BACK END</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

           
        <!-- Akhir Header =====================================================================================-->


        <!-- Mini Header =====================================================================================-->
            <div class="row mt-1">
                <div class="col-fluid shadow-md p-1" id="miniheader1">
                    <h6 class="animate__animated animate__pulse animate__infinite infinite" id="hntext">HEADLINE NEWS</h6>
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
                <div class="col-md-8 mb-4">
                    <link rel="shortcut icon" type="image/jpg" href="img/icon/lambang.png"/>
                    
                    @yield('content')

                    {{-- <div class="bg-white rounded" id="contentkiri"> </div> --}}


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
                                
                                @foreach ($bacaan as $key => $item)

                                    <div class="row mt-1 mb-2" >
                                        <div class="col-5">
                                            {{-- @foreach ($gambar_bacaan->where('id',(int)$key+1)->take(1) as $gambars) --}}
                                            <a href="../{{$item->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$item->gambar}}" alt="error" id="gambartabbaru"></a>
                                            {{-- @endforeach --}}
                                        </div>

                                        <div class="col-7">
                                            <a href="../{{$item->id}}/isibacaan"><p id="judulBerita">{{$item->judul}}</p></a>
                                            <p style="font-size:11px; margin-top:-12px; color:#B3B3B3;">{{$item->created_at}}</p>
                                        </div>
                                        
                                        <hr size="10px"/>

                                    </div>

                                @endforeach

                                <a href="/beritakecamatan"><p style="font-size:12px; margin-top: 15px; color:#B3B3B3;">Tampilkan semua >></p></a>

                            </div>
                            <div class="tab-pane fade pt-3" id="tags" role="tabpanel" aria-labelledby="tags-tab">
                                <a href="../tags/{{'berita'}}"><button id="btntag">Berita</button></a>
                                <a href="../tags/{{'kegiatan'}}"><button id="btntag">Kegiatan</button></a>
                                <a href="../tags/{{'artikel'}}"><button id="btntag">Artikel</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <h6 id="judulkonten">VIDEO</h6>
                        </div>
                        <div class="col-10" id="lokasipatern">
                            <div class="patern"></div>
                        </div>
                    </div>

                    
                    <div class="bg-white rounded mb-4 p-2 text-center" id="contentkanan">
                        @foreach ($videogallery as $item)
                            <iframe class="embed-responsive-item mb-1" style="width: 100%;" src="{{$item->video}}" frameborder="0" allowfullscreen></iframe>
                        @endforeach
                    </div>     
                    

                    <div class="rounded mb-4" id="gambarkanan">
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
                    </div>

                    <div class="bg-white rounded mb-4 p-2 text-center" id="contentkanan">
                        <a href="https://www.youtube.com/channel/UCiv-tVNor79V-nnRDp-fRqQ"><img src="/img/icon/youtube.png" alt="iconyoutube" id="iconsm"></a>
                        <a href="https://www.facebook.com/HumasTangsel/"><img src="/img/icon/facebook.png" alt="iconfacebook" id="iconsm"></a>
                        <a href="https://twitter.com/humastangsel/"><img src="/img/icon/twitter.png" alt="icontwitter" id="iconsm"></a>
                        <a href="https://www.instagram.com/humaskotatangsel/"><img src="/img/icon/instagram.png" alt="iconinstagram" id="iconsm"></a>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <h6 id="judulkonten">TAUTAN</h6>
                        </div>
                        <div class="col-10" id="lokasipatern">
                            <div class="patern"></div>
                        </div>
                    </div>
                    
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
                <div class="col-md-4">
                    <h5 id="judulfooter">TAG TERKAIT</h5>
                    <div class="isikontenfooter">
                        <a href="../tags/{{'berita'}}"><button id="btntagbawah">Berita</button></a>
                        <a href="../tags/{{'kegiatan'}}"><button id="btntagbawah">Kegiatan</button></a>
                        <a href="../tags/{{'artikel'}}"><button id="btntagbawah">Artikel</button></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 id="judulfooter">TAUTAN</h5>
                    <div class="isikontenfooter">
                        <a href="https://siaran.tangerangselatankota.go.id/report"><p class="text-light" id="tautanfooter">Pengaduan Masyarakat</p></a>
                        <a href="https://tangerangselatankota.go.id/"><p class="text-light" id="tautanfooter">Website Tangerang Selatan</p></a>
                        <a href="https://disdukcapil.tangerangselatankota.go.id/"><p class="text-light" id="tautanfooter">Disdukcapil</p></a>
                        <a href="https://dikbud.tangerangselatankota.go.id/"><p class="text-light" id="tautanfooter">Dinas Pendidikan Dan Kebudayaan</p></a>
                        <a href="https://dpmptsp.tangerangselatankota.go.id/"><p class="text-light" id="tautanfooter">DPMPTSP</p></a>
                        <a href="https://restangsel.id/"><p class="text-light" id="tautanfooter">Polres Tangsel</p></a>
                        <a href="https://diskominfo.tangerangselatankota.go.id/"><p class="text-light" id="tautanfooter">Diskominfo</p></a>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <h5 id="judulfooter">ALAMAT KECAMATAN SETU</h5>

                    <div class="isikontenfooter">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.049068149776!2d106.673745!3d-6.3276!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde6d034bf745a26c!2sKantor%20Camat%20Setu%20Tangerang%20Selatan!5e0!3m2!1sid!2sid!4v1617548183617!5m2!1sid!2sid" width="100%" height="145" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <br><br>
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

        
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
        </script>
  </body>
</html>