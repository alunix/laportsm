@extends('DashboardUser.index')
@section('title', 'Dashboard User')
@section('konten-dashboard')
<div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->

    <div class="row">
        
        @foreach ($berita as $berita)
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-responsive" src="{{ asset(Storage::disk('local')->url($berita->gambar)) }}" alt="Card">
                <div class="card-block">
                    <ul class="list-inline font-14">
                        <li class="p-l-0">{{ $berita->created_at->diffForHumans() }}</li>
                    </ul>
                    <a href="{{ route('post', $berita->slug) }}"><h3 class="font-normal"> {{ $berita->judul }} </h3></a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
@endsection