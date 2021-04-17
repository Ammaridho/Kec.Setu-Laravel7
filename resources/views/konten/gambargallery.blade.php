@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-4 mt-2">
            <h6 id="judulkonten" style="font-size: 22px">SEMUA BERITA</h6>
        </div>
        <div class="col-8 mt-2" id="lokasipatern">
            <div class="patern"></div>
        </div>
    </div>

    <div class="bg-white rounded p-4" id="contentkiri">

        @foreach ($gambargallery as $item)

            <div class="row">
                <div class="col-12">
                    <a href="../{{$item->id}}/isibacaan"><p style="font-size:20px; font-weight:400px; color: black; margin-bottom: 13px;">{{$item->nama}}</p></a>
                    
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
                    <a href="{{$item->id}}/isibacaan"><img src="/img/gambargallery/{{$item->gambar}}" alt="error" id="gambartabbaru" style="height: 125px;"></a>
                </div>
            </div>

        @endforeach
        
    </div>

@endsection