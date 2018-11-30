@extends('HalamanDepan.index')
@section('judul', 'Tasikmalaya Smart City')
@section('sub-judul', 'simak informasi terbaru di Tasikmalaya')
@section('gambar-header', asset('../img/bg/tamankota.jpg'))
@section('konten-utama')

<section class="blog-area section">
    <div class="container">
        <div class="row">
            @foreach ($berita as $berita1)
            <div class="col-lg-4 col-md-6" >
                <div class="card h-100" style="margin-top=15%;">
                    <div class="single-post post-style-1">

                        <div class="blog-image"><img src="{{ asset(Storage::disk('local')->url($berita1->gambar)) }}" alt="Gambar postingan"></div>

                        {{--  <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>  --}}

                        <div class="blog-info">

                            <h4 class="title"><a href="{{ route('post', $berita1->slug) }}"><b> {{ $berita1->judul }} </b></a></h4>
                            <p>{{ $berita1->deskripsi }}</p>
                            {{--  <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>  --}}

                        </div><!-- blog-info -->
                    </div><!-- single-post -->
                </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->
            @endforeach
        </div>
    </div>
    {{ $berita->links() }}
</section>
@endsection