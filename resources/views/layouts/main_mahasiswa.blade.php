<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Melati | {{ $navbar }}</title>

  <!-- link Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Link icon -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <!-- Link CSS -->
  @stack('css_costum')

  <!-- Link icon tab browser -->
  <link rel="icon" href="{{ asset('img/logo-tab-melati.png') }}">
</head>

<body>
  



  @include('partials.navbar_mahasiswa')
  @yield('konten_mahasiswa')
  @include('partials.footer_mahasiswa')




  








  <!-- AWAL SCRIPT JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
  <!-- AKHIR SCRIPT JS -->
</body>





<!-- AWAL BTN AUTO SCROLL -->
<a href="#" class="btn-scoll">
  <i class='bx bx-chevron-up'></i>
</a>
<!-- AWAL BTN AUTO SCROLLl -->

</html>