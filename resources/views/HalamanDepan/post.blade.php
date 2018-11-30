@extends('HalamanDepan.index')
@section('judul', $berita->judul)
@section('sub-judul', $berita->deskripsi)
@section('judulhead', $berita->judul)
@section('gambar-header', Storage::disk('local')->url($berita->gambar))

@section('konten-utama')
<section class="post-area">
    <div class="container">

        <div class="row">

            <div class="col-lg-1 col-md-0"></div>
            <div class="col-lg-10 col-md-12">

                <div class="main-post">

                    <div class="post-top-area">

                        {!! htmlspecialchars_decode($berita->detail) !!}

                    </div><!-- post-bottom-area -->

                </div><!-- main-post -->
            </div><!-- col-lg-8 col-md-12 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- post-area -->
@endsection
