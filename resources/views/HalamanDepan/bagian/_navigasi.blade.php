<!--Navigasi Full Screen Khusus di Mobile-->
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="#">Tentang Kami</a>
      <a href="#">Informasi</a>
      <a href="#">Layanan</a>
      <a href="#">Sorotan</a>
      <a class="nav-link" href="{{route ('login')}}    ">Masuk</a>
      <a class="nav-link" href="{{route ('register')}}">Daftar</a>
    </div>
    
<!--Navigasi di desktop-->
</div>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">

    <!--Tombol Navigasi untuk Smartphone atau Tablet-->
    <button class="navbar-toggler navbar-toggler-right" type="button" onclick="openNav()">
        <span class="navbar-inverse navbar-toggler-icon"></span>
    </button>

    <!--Logo-->
    <a class="navbar-brand" href="#">
        <div class="logoheader">
            <a href="{{ route('beranda') }}"><img class="logoheader" src="{{ asset('img/icon/logoputih1.png') }}"></a>
        </div>
    </a>

    <!--Navigasi/Menu di Desktop-->
    <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Informasi</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Layanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Sorotan</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route ('login')}}">Masuk</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route ('register')}}">Daftar</a></li>
        </ul>
</nav>