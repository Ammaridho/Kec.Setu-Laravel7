@extends('layouts.main')

<link rel="stylesheet" href="/css/index.css">

@section('content')

{{-- @if ($message = Session::get('sukses'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $message }}</strong>
</div>
@endif --}}

    <div class="row mb-2">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <a href="/{{$bacaan[0]->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$bacaan[0]->gambar}}" class="d-block" alt="."  id="ukurangambarjumbotron"></a>
                    <div class="carousel-caption rounded" id="judulberitajumbotron">
                        <a class="text-dark" href="/{{$bacaan[0]->id}}/isibacaan" style="text-decoration: none;"id="tulisanjumbotron">{{$bacaan[0]->judul}}</a>
                    </div>
                </div>

                @for ($i = 1; $i < 3; $i++)
                <div class="carousel-item">
                    <a class="text-dark" href="/{{$bacaan[$i]->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$bacaan[$i]->gambar}}" class="d-block" alt="."  id="ukurangambarjumbotron"></a>
                    <div class="carousel-caption rounded" id="judulberitajumbotron">
                        <a class="text-dark" href="/{{$bacaan[0]->id}}/isibacaan" style="text-decoration: none;" id="tulisanjumbotron">{{$bacaan[$i]->judul}}</a>
                    </div>
                </div>
                @endfor
                

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
        <div class="col-sm-12 pt-3">
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
                
                    <div class="col-md-6" style="padding:10px;">
                        <div style="margin-left:20px; margin-right:20px;">
                            {{-- <a href="/{{$kegiatan[0]->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$kegiatan[0]->gambar}}" alt="error" id="gambarberitaindex"></a> --}}
                            <a href="/{{$berita[0]->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$berita[0]->gambar}}" alt="error" id="gambarberitaindex"></a>
                            <a class="text-dark" href="/{{$berita[0]->id}}/isibacaan"><h5 id="judulgambarberitaindex">{{$berita[0]->judul}}</h5></a>
                        
                        @if (($berita[0]->updated_at) != null)
                            <?php $tanggal = $berita[0]->updated_at?>
                        @elseif (($berita[0]->created_at) != null)
                            <?php $tanggal = $berita[0]->created_at?>
                        @else
                            <?php $tanggal = 'Belum ada tanggal' ?>
                        @endif
                            
                        <h6 id="tanggalgambarberitaindex">{{$tanggal}}</h6>
                        {{-- <p id="tulisannormal">{{substr($berita[0]->isi,0,100)}}</p> --}}
                        <p id="tulisannormal">{{substr(strip_tags(str_replace(["&nbsp;","&rdquo;","&rsquo;","&hellip;"],' ',$berita[0]->isi)),0,250)}}</p>
                        
                        <div class="readmore"><a href="/{{$berita[0]->id}}/isibacaan" id="tulisannormal" style="color: black">Read More >></a></div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6">
                        
                        @for ($i = 1; $i < count($berita); $i++)
                        
                            <div class="row pt-2 " style="box-shadow: rgb(181, 181, 181) 0px 0px 4px 0px; background-color:#F7F7F7; width:99.5%; margin-left:1px;">

                                <div class="col-4">
                                    <a class="text-dark" href="/{{$berita[$i]->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$berita[$i]->gambar}}" alt="error" id="gambarberitaindex"></a>
                                    
                                    @if (($berita[$i]->updated_at) != null)
                                        <?php $tanggal = $berita[$i]->updated_at?>
                                    @elseif (($berita[$i]->created_at) != null)
                                        <?php $tanggal = $berita[$i]->created_at?>
                                    @else
                                        <?php $tanggal = 'Belum ada tanggal' ?>
                                    @endif
                                    <a class="text-dark" href="/{{$berita[$i]->id}}/isibacaan"><p class="text-center" style="font-size:11px; color:#B3B3B3;">{{$tanggal}}</p></a>
                                </div>
                                
                                <div class="col-8 pt-1">
                                    <a class="text-dark" href="/{{$berita[$i]->id}}/isibacaan"><p style="font-size:14px; font-weight:400px; line-height:15px; text-align:justify;">{{$berita[$i]->judul}}</p></a>
                                </div>
                                
                            </div>

                        @endfor

                    </div>
                   
                </div>
            </div>     
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="row">
                <div class="col-4">
                    <h6 id="judulkonten" style="font-size: 22px">KEGIATAN</h6>
                </div>
                <div class="col-8" id="lokasipatern">
                    <div class="patern"></div>
                </div>
            </div>
            <div class="bg-white rounded" id="contentkiri" style="padding:15px; padding-bottom:-10px;">
                    
        
                <a href="/{{$kegiatan[0]->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$kegiatan[0]->gambar}}" alt="error" id="gambarberitaindex"></a>
                <a class="text-dark" href="/{{$kegiatan[0]->id}}/isibacaan"><h5 id="judulgambarberitaindex">{{$kegiatan[0]->judul}}</h5></a>

                @if (($kegiatan[0]->updated_at) != null)
                    <?php $tanggal = $kegiatan[0]->updated_at?>
                @elseif (($kegiatan[0]->created_at) != null)
                    <?php $tanggal = $kegiatan[0]->created_at?>
                @else
                    <?php $tanggal = 'Belum ada tanggal' ?>
                @endif
                <h6 id="tanggalgambarberitaindex">{{$tanggal}}</h6>
                <p id="tulisannormal">{{substr(strip_tags(str_replace(["&nbsp;","&rdquo;","&rsquo;","&hellip;"],' ',$kegiatan[0]->isi)),0,250)}}</p>
                <div class="readmore mb-3"><a href="/{{$kegiatan[0]->id}}/isibacaan" id="tulisannormal" style="color: black;">Read More >></a></div>
     

                @for ($i = 1; $i < count($kegiatan); $i++)
                
                   <div class="row pt-2" style="background-color:#F7F7F7; box-shadow: 0 0 5px #cacaca;">

                        
                        <div class="col-4">
                            <a class="text-dark" href="/{{$kegiatan[$i]->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$kegiatan[$i]->gambar}}" alt="error" id="gambarberitaindex"></a>
                            
                            @if (($kegiatan[$i]->updated_at) != null)
                                <?php $tanggal = $kegiatan[$i]->updated_at?>
                            @elseif (($kegiatan[$i]->created_at) != null)
                                <?php $tanggal = $kegiatan[$i]->created_at?>
                            @else
                                <?php $tanggal = 'Belum ada tanggal' ?>
                            @endif
                            <p class="text-center" style="font-size:11px; color:#B3B3B3;">{{$tanggal}}</p>
                        </div>
                        
                        <div class="col-8 pt-1">
                            <a class="text-dark" href="/{{$kegiatan[$i]->id}}/isibacaan"><p style="font-size:14px; font-weight:400px; line-height:15px; text-align:justify;">{{$kegiatan[$i]->judul}}</p></a>
                        </div>

                    
                    </div>
                
                @endfor

            </div>
            
        </div>

        <div class="col-md-6 mb-4">
            <div class="row">
                <div class="col-3">
                    <h6 id="judulkonten" style="font-size: 22px">ARTIKEL</h6>
                </div>
                <div class="col-9" id="lokasipatern">
                    <div class="patern"></div>
                </div>
            </div>
            <div class="bg-white rounded" id="contentkiri" style="padding:15px; padding-bottom:-10px;">


                {{-- melakukan pencetakan data pertama dengan index 0 --}}

                <a class="text-dark" href="/{{$artikel[0]->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$artikel[0]->gambar}}" alt="error" id="gambarberitaindex"></a>
                <a class="text-dark" href="/{{$artikel[0]->id}}/isibacaan"><h5 id="judulgambarberitaindex">{{$artikel[0]->judul}}</h5></a>
                
                @if (($artikel[0]->updated_at) != null)
                    <?php $tanggal = $artikel[0]->updated_at?>
                @elseif (($artikel[0]->created_at) != null)
                    <?php $tanggal = $artikel[0]->created_at?>
                @else
                    <?php $tanggal = 'Belum ada tanggal' ?>
                @endif
                <h6 id="tanggalgambarberitaindex">{{$tanggal}}</h6>
                <p id="tulisannormal">{{substr(strip_tags(str_replace(["&nbsp;","&rdquo;","&rsquo;","&hellip;"],' ',$artikel[0]->isi)),0,250)}}</p>
                <div class="readmore"><a href="/{{$artikel[0]->id}}/isibacaan" id="tulisannormal" style="color: black">Read More >></a></div>

                {{-- melakukan pencetakan selanjutnya dengan for dari index 1 sampai sebanyak jumlahnya --}}
                
                {{-- bagaimana kalau ini menggunakan foreach? --}}
                @for ($i = 1; $i < count($artikel); $i++)

                    <div class="row pt-2 mt-2" style="background-color:#F7F7F7; box-shadow: 0 0 5px #cacaca;">
                        
                        <div class="col-4">
                            <a class="text-dark" href="/{{$artikel[$i]->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$artikel[$i]->gambar}}" alt="error" id="gambarberitaindex"></a>
                            
                            @if (($artikel[$i]->updated_at) != null)
                                <?php $tanggal = $artikel[$i]->updated_at?>
                            @elseif (($artikel[$i]->created_at) != null)
                                <?php $tanggal = $artikel[$i]->created_at?>
                            @else
                                <?php $tanggal = 'Belum ada tanggal' ?>
                            @endif
                            <p class="text-center" style="font-size:11px; color:#B3B3B3;">{{$tanggal}}</p>
                        </div>
                        
                        <div class="col-8 pt-1">
                            <a class="text-dark" href="/{{$artikel[$i]->id}}/isibacaan"><p style="font-size:14px; font-weight:400px; line-height:15px; text-align:justify;">{{$kegiatan[$i]->judul}}</p></a>
                        </div>

                    </div>

                @endfor
                
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
                @foreach ($gambargallery as $item)

                    <img src="/img/gambargallery/{{$item->gambar}}" alt="{{$item->nama}}" style="width:100px; height: 70px;">

                        {{-- kalau ini di commend di main bisa jalan --}}
                        {{-- <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div> --}}
                @endforeach
            </div>     
        </div>
    </div>


@endsection