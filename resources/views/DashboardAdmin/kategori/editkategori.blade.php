@extends('DashboardAdmin.index')
@section('title', 'Sunting Kategori')

@section('konten-dashboard')
<div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Sunting Kategori</h3>
        </div>
    
        <div class="col-md-6 col-4 align-self-center">
            <a href="{{ route('kategori.index') }}" class="btn pull-right hidden-sm-down btn-success">Kembali</a>
        </div>
    
    </div>

    @include('DashboardAdmin.pesan')


<div class="row" style="margin-top: 2%;">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material" action="{{ route('kategori.update',$kategori->id) }}" method="post" role="form">
                    {{ csrf_field('') }}
                    {{ method_field('PATCH') }}

                    {{--  Form Nama Kategorui --}}
                    <div class="form-group">
                        <label class="col-md-12" for="judul"><h3 class="text-themecolor m-b-0 m-t-0">Nama</h3></label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Nama kategori" class="form-control form-control-line"
                             name="nama" value="{{ $kategori->nama }}">
                        </div>
                    </div>

                    {{--  Form Deskripsi Kategori  --}}
                    <div class="form-group">
                            <label class="col-md-12" for="judul"><h3 class="text-themecolor m-b-0 m-t-0">Deskripsi Kategori</h3></label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Deskripsi kategori" 
                                class="form-control form-control-line" name="deskripsi" value="{{ $kategori->deskripsi }}">
                            </div>
                        </div>

                    {{--  Form Slug  --}}
                    <div class="form-group">
                        <label class="col-md-12" for="slug"><h3 class="text-themecolor m-b-0 m-t-0">Slug</h3></label>
                        <div class="col-md-12">
                            <input type="Slug" placeholder="Slug kategori" 
                            class="form-control form-control-line" name="slug" value="{{ $kategori->slug }}">
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 2%;">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Sunting</button>
                        </div>

                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>


@endsection