<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite([
    'resources/css/app.css',
    'resources/js/app.js'
    ])

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
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

<script>
  feather.replace()
</script>

<script>
  const checkbox = document.querySelector ('#toggle');
  const html = document.querySelector('html');

  checkbox.addEventListener('click', function(){
    checkbox.checked ? html.classList.add('dark') : html.classList.remove('dark');
  });
</script>

</body>
</html>