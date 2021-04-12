@extends('layouts.main')

<link rel="stylesheet" href="/css/bacaan.css">

@section('content')

    <div class="container bg-white rounded pl-3" id="contentkiri"> 

    <div class="row">
            <div class="col-sm-12 mt-3">
                <h4 id="judulBerita">{{$bacaan->judul}}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p style="font-size:11px; font-family: Arial; color:#aaaaaa;">Posted by: {{$bacaan->postedby}} , 05 Agustus 2020, 11:42:02 , <span style="font-size:11px; font-family: Arial; font-weight:bold; color:red;"> Telah Di Lihat Sebanyak: 105</span></p>
            </div>
        </div>

        <div class="row" id="lokasigambarbacaan">
            <img src="/img/gambar_berita/gambar1.png" alt="" id="gambarbacaan">
            <img src="/img/gambar_berita/gambar1.png" alt="" id="gambarbacaan"> 
        </div>

        <div class="row">
            <div class="col-12 mt-4">
                <pre id="isibacaan" disabled>CIPUTAT, WEB TANGSEL - Pemerintah Kota Tangerang Selatan memastikan bahwa pemulihan perekonomian akan mengandalkan Koperasi. Hal tersebut dijelaskan dalam Kegiatan Peringatan Hari Koperasi ke 73 Tingkat Kota Tangerang Selatan tahun 2020 di Puspemkot, Ciputat, Selasa (04/08).
                    
                    Walikota Tangerang Selatan, Airin Rachmi Diany menjelaskan bahwa pemulihan perekonomian ini merupakan kebijakan yang sudah ditetapkan oleh Presiden RI, Joko Widodo. Dimana, pelaku UMKM bisa survive atau tetap melakukan kegiatan usahanya di tengah pandemi seperti ini.
                    
                    Adapun strategi yang dibuat oleh Pemerintah Kota Tangerang Selatan, menurut Airin berupa kebijakan mengenai APBD yang akan dialokasikan untuk memberdayakan pelaku usaha. ”Contohnya saya mendorong ketika kita membutuhkan APD, kita bisa dorong UMKM kita yang melakukan produksi,” ujar Airin.
                    
                    Dalam kesempatan itu, Airin juga meminta, bahwa saat ini Pemkot sedang melakukan berbagai macam upaya untuk memastikan kegiatan UMKM dan Koperasi tetap mematuhi peraturan protokol kesehatan. Yang mana sudah ditentukan oleh pemerintah pusat.
                    
                    Selanjutnya, Ketua Dekopinda Kota Tangerang Selatan Dudung Diredja menjelaskan bahwa UMKM dan Koperasi merupakan beberapa sektor yang terdampak sangat serius pada saat pandemi ini terjadi. Karena itu, dia berharap kepada pemerintah bisa segera melahirkan kebijakan yang bisa memastikan proses kegiatan usaha agar bisa tetap berlangsung.
                    
                    Menurutnya, berkaca dari krisis pada tahun 1998, tentunya kami Dekopinda sudah menyiapkan rekomendasi kepada pemerintah. ”Jadi, seperti tahun itu, bahwa Koperasi dan UMKM bisa menjadi motor pemulih keadaan ekonomi,” kata Dudung.
                    
                    Menanggapi usulan dan rencana dari pemerintah, Dudung menjelaskan pada anggaran perubahan nanti akan ada beberapa program yang akan dilangsungkan untuk kembali meningkatkan kualitas koperasi dan UMKM. Dengan cara melatih inovasi mereka untuk bisa bersaing di situasi seperti ini.
                    
                    ”Tapi tentunya ada pembatasan untuk program tersebut. Jangan sampai kita menyalahi protokol kesehatan,” kata dia.
                    
                    Salah satu kegiatan yang disebutkan Dudung adalah, kegiatan bazar dengan penyesuaian kondisi yang terjadi saat ini. Misalnya, dengan kuota terbatas dan jarak stand yang harus memuhi standar protokol kesehatan.
                    
                    Yang perlu dipastikan, Dudung menjamin bahwa akan ada kebijakan yang dibuat pemerintah untuk pelaku Koperasi dan UMKM. Baik itu kebijakan kesehatan, ekonomi atau lainnya.(humas-kominfo)</pre style="width: 100%; height: 400px;">
            </div>
        </div>

    </div>
@endsection