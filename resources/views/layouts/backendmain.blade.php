<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/backend.css">

    <title>Back End</title>
    <link rel="shortcut icon" type="image/jpg" href="/img/icon/lambang.png"/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


  </head>
  <body>
    

    <div class="container mt-2">
        {{-- navbar atas --}}
          <nav class="navbar text-light sticky-top rounded" id="navbaratas">
              <img src="/img/icon/lambang.png" width="30" height="30" alt="">
              {{-- <p class="navbar-brand text-light font-weight-bold"> Kec. Setu</p> --}}
              <a class="navbar-brand text-light font-weight-bold float-left mr-auto ml-2" href="" style="font-size: 20px">Kec. Setu</a>
              <a class="navbar-brand text-warning font-weight-bold" href="{{route('logout')}}" style="font-size: 14px">FRONT END</a>
          </nav>    
        {{-- akhir navbar atas --}}

        <main>

          @yield('backendcontent')

        </main>
    </div>
    

  </body>

  <script>
    $('.summernote').summernote({
        placeholder: 'Isi konten',
        tabsize: 2,
        height: 100
    });

    $('#summernote').summernote({
            height: ($(window).height() - 300),
            callbacks: {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                }
            }
        });

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    function uploadImage(image) {
      var data = new FormData();
      data.append("image", image);
      $.ajax({
          url: "/backendinputbacaan/storegambarbacaan",
          cache: false,
          contentType: false,
          processData: false,
          data: data,
          type: "post",
          success: function(url) {
              alert('berhasil');
              var image = $('<img>').attr('src', 'http://' + url);
              $('#summernote').summernote("insertNode", image[0]);
          },
          error: function(data) {
              alert('gagal');
              console.log(data);
          }
      });
    }
  </script>

</html>