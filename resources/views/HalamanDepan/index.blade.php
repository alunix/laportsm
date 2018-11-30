@include('HalamanDepan.bagian._head')
<body>

    <!--Bagian Header-->
    <header class="container" id="header1" style="
            width: 100%;
            height: 100vh;
            background: linear-gradient(rgba(39, 39, 39, .747), rgba(39, 39, 39, .747)), url(@yield('gambar-header'));
            background-size: cover;
            background-attachment: fixed;
            background-repeat: none;
            background-position: center;">
        <!--Navigasi-->

        @include('HalamanDepan.bagian._navigasi')
        
        <!--Headline, Textline dan Tombol -->
        @include('HalamanDepan.bagian._headline')
    </header>

    @section('konten-utama')
        @show

   <!-- Footer -->
   <footer class="footer bg-light">
        @include('HalamanDepan.bagian._footer')
   </footer>



    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <script src="{{ asset('/js/jquery-1.10.2.min') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/tether.min.js') }}"></script>
</body>
</html>
