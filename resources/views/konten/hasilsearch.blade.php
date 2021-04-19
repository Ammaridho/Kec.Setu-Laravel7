@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-md-4 mt-2">
            <h6 id="judulkonten" style="font-size: 22px">Cari : {{$keyword}}</h6>
        </div>
        <div class="col-md-8 mt-2" id="lokasipatern">
            <div class="patern"></div>
        </div>
    </div>

    <div class="bg-white rounded p-4 mt-3" id="contentkiri">

        @foreach ($hasilsearch as $item)

            <div class="row">
                <div class="col-12">
                    <a href="../{{$item->id}}/isibacaan"><p style="font-size:20px; font-weight:400px; color: black; margin-bottom: 13px;">{{$item->judul}}</p></a>
                    
                    @if (($item->updated_at) != null)
                        <?php $tanggal = $item->updated_at?>
                    @elseif (($item->created_at) != null)
                        <?php $tanggal = $item->created_at?>
                    @else
                        <?php $tanggal = 'Belum ada tanggal' ?>
                    @endif
                    <p style="font-size:12px; margin-top:-12px; color:#B3B3B3;">Tanggal: {{$tanggal}}</p>
                </div>
            </div>

            <div class="row mt-1 mb-4">
                <div class="col-5" style="margin-top: -12px">
                    <a href="{{$item->id}}/isibacaan"><img src="/img/gambar_bacaan/{{$item->gambar}}" alt="error" id="gambartabbaru" style="height: 125px;"></a>
                </div>
                
                <div class="col-7" style="margin-top: -12px">
                    <a href="{{$item->id}}/isibacaan"><p style="text-align:justify; font-weight: bold; font-size:12px; font-weight:400px; color: black;">{{substr($item->isi,0,250)}}...</p></a>
                    <a href="{{$item->id}}/isibacaan"><p style="font-size:12px; margin-top:-12px; color:#B3B3B3;">Baca Lebih Lanjut >></p></a>
                </div>
            </div>

        @endforeach
        
    </div>

@endsection