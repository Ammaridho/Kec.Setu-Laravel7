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

        

            <div class="row">
                @foreach ($videogallery as $item)
                <div class="col-6">
                    <iframe class="embed-responsive-item" style="width: 100%;" src="{{$item->video}}" frameborder="0" allowfullscreen></iframe>                    

                </div>
                @endforeach
            </div>

            {{-- <div class="row mt-1 mb-4">
                <div class="col-5" style="margin-top: -12px">
                                   </div>
            </div> --}}

        
        
    </div>

@endsection