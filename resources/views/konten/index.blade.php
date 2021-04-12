@extends('layouts.main')

<link rel="stylesheet" href="/css/index.css">

@section('content')

    <div class="row mb-4">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active">
                <img src="/img/gambar_berita/{{$gambar_satuan->gambar}}" class="d-block w-100" alt="..." style="height: 360px">
                <div class="carousel-caption d-none d-md-block rounded" id="judulberitajumbotron">
                    <h5>{{$bacaan_satuan->judul}}</h5>
                </div>
                </div>

                @foreach ($gambar_terbaru as $key => $item)

                <div class="carousel-item">
                <img src="/img/gambar_berita/{{$item['gambar']}}" class="d-block w-100" alt="..." style="height: 360px">
                <div class="carousel-caption d-none d-md-block" id="judulberitajumbotron">

                    {{-- @foreach ($bacaan_terbaru->where('id',(int)$key+1)->take(1) as $bacaan)
                        <h5>Second slide label {{$bacaan->judul}}</h5>
                    @endforeach --}}

                    <h5>Second slide label {{$item['gambar']}}</h5>
                </div>
                </div>

                @endforeach

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
    </div>


    <div class="row mb-4">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-2">
                    <h6 id="judulkonten" style="font-size: 22px">BERITA</h6>
                </div>
                <div class="col-10" id="lokasipatern">
                    <div class="patern"></div>
                </div>
            </div>
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
                        @foreach ($bacaan as $key => $item)
                        
                        <div class="row pt-2 " style="box-shadow: rgb(181, 181, 181) 0px 0px 4px 0px; background-color:#F7F7F7; width:99.5%; margin-left:1px;">

                            <div class="col-4">
                                @foreach ($gambar_bacaan->where('id',(int)$key+1)->take(1) as $gambars)
                                    <img src="/img/gambar_berita/{{$gambars->gambar}}" alt="error" id="gambarberitaindex">
                                @endforeach
                                <p class="text-center" style="font-size:11px; color:#B3B3B3;">{{$item->tanggal}}</p>
                            </div>
                            
                            <div class="col-8 pt-1">
                                <p style="font-size:14px; font-weight:400px; line-height:15px;";>{{$item->judul}}</p>
                            </div>
                            
                        </div>
                        
                        @endforeach
                    </div>
                   
                </div>
            </div>     
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 mb-4">
            <div class="row">
                <div class="col-4">
                    <h6 id="judulkonten" style="font-size: 22px">KEGIATAN</h6>
                </div>
                <div class="col-8" id="lokasipatern">
                    <div class="patern"></div>
                </div>
            </div>
            <div class="bg-white rounded" id="contentkiri" style="padding:15px; padding-bottom:-10px;">
                    
                
                <img src="/img/baru1.PNG" alt="error" id="gambarberitaindex">
                <h5 id="judulgambarberitaindex">Pelaku UMKM di Tangsel Harus Manfaatkan Teknologi</h5>
                <h6 id="tanggalgambarberitaindex">30 juli 2020, 14:35:36</h6>
                <p id="tulisannormal">Pelaku UMKM di Tangsel Harus Manfaatkan Teknologi...</p>
                <div class="readmore mb-3"><a href="" id="tulisannormal" style="color: black;">Read More >></a></div>
     

                <div class="row pt-2" style="background-color:#F7F7F7; box-shadow: 0 0 5px #cacaca;">

                    @foreach ($bacaan as $key => $item)
                    
                        <div class="col-4">
                            @foreach ($gambar_bacaan->where('id',(int)$key+1)->take(1) as $gambars)
                                <img src="/img/gambar_berita/{{$gambars->gambar}}" alt="error" id="gambarberitaindex">
                            @endforeach
                            <p class="text-center" style="font-size:11px; color:#B3B3B3;">{{$item->tanggal}}</p>
                        </div>
                        
                        <div class="col-8 pt-1">
                            <p style="font-size:14px; font-weight:400px; line-height:15px;";>{{$item->judul}}</p>
                        </div>

                    @endforeach

                </div>
                
            </div>
            
        </div>

        <div class="col-sm-6 mb-4">
            <div class="row">
                <div class="col-3">
                    <h6 id="judulkonten" style="font-size: 22px">ARTIKEL</h6>
                </div>
                <div class="col-9" id="lokasipatern">
                    <div class="patern"></div>
                </div>
            </div>
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
            <div class="row">
                <div class="col-4">
                    <h6 id="judulkonten" style="font-size: 22px">GALERI PHOTO</h6>
                </div>
                <div class="col-8" id="lokasipatern">
                    <div class="patern"></div>
                </div>
            </div>
            <div class="bg-white rounded" id="contentkiri" style="padding: 15px;">
                <a href=""><img src="/img/bg.png" alt="" style="width:130px;"></a>
            </div>     
        </div>
    </div>


@endsection