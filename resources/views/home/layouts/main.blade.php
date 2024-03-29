<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite([
    'resources/css/app.css',
    'resources/js/app.js'
    ])

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Slick Cdn --}}
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    {{-- Ion Icons --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link href="css/myStyle.css" rel="stylesheet">

</head>
<body class="font-poppins">
  
@include('home.layouts.navbar')

<div class="bg-slate-100 dark:bg-slate-900">
<div class="max-w-screen-lg mx-auto p-4">
    @yield('content')
</div>
</div>

@include('home.layouts.footer')

{{-- <script src="js/script.js"></script> --}}

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.your-class').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      centerMode: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 2
          }
        },
        {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          slidesToShow: 1
        }
      }
      ]
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.epaper-slick').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      centerMode: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 770,
          settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 3
          }
        },
        {
        breakpoint: 430,
        settings: {
          arrows: false,
          centerMode: true,
          slidesToShow: 2
        }
      },
        {
        breakpoint: 330,
        settings: {
          arrows: false,
          centerMode: true,
          slidesToShow: 1
        }
      }
      ]
    });
  });
</script>

</body>
</html>