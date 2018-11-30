@extends('DashboardAdmin.index')
@section('title', 'Sunting Berita')

@section('konten-dashboard')
<div class="row page-titles">

    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Sunting Berita</h3>
    </div>

    <div class="col-md-6 col-4 align-self-center">
        <a href="{{ route('berita.index') }}" class="btn pull-right hidden-sm-down btn-success">Kembali</a>
    </div>

</div>

@include('DashboardAdmin.pesan')

<div class="row" style="margin-top: 2%;">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material" action="{{ route('berita.update',$berita->id) }}" method="post" role="form" enctype="multipart/form-data">
                    {{ csrf_field('') }}
                    {{ method_field('PATCH') }}

                    <!--Judul-->
                    <div class="form-group">
                        <label class="col-md-12" for="judul"><h3 class="text-themecolor m-b-0 m-t-0">Judul</h3></label>
                        <div class="col-md-12">
                                <input type="text" placeholder="Judul Berita" class="form-control form-control-line"
                                name="judul" value="{{ $berita->judul }}">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="deskripsi"><h3 class="text-themecolor m-b-0 m-t-0">Deskripsi</h3></label>
                        <div class="col-md-12">
                                <input type="text" placeholder="Deskripsi" class="form-control form-control-line"
                                name="deskripsi" value="{{ $berita->deskripsi }}">
                        </div>
                    </div>

                    <!--Slug-->
                    <div class="form-group">
                        <label class="col-md-12" for="slug"><h3 class="text-themecolor m-b-0 m-t-0">Slug</h3></label>
                        <div class="col-md-12">
                            <input type="Slug" placeholder="Slug Berita" 
                            class="form-control form-control-line" name="slug" value="{{ $berita->slug }}">
                        </div>
                    </div>

                    <!--Kategori-->
                    <div class="form-group">
                        <label class="col-sm-12"><h3 class="text-themecolor m-b-0 m-t-0">Kategori</h3></label>
                        <div class="col-sm-12">
                                <select class="form-control form-control-line" name="kategori" value="0">
                                        <option >Pilih Kategori</option>
                                        @foreach ($kategoris as $kategori)
                                            <option value"{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                        @endforeach
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12"><h3 class="text-themecolor m-b-0 m-t-0">Tag</h3></label>
                        <div class="col-sm-12">
                                <select class="form-control form-control-line" name="tag" value="0">
                                        <option >Pilih Tag</option>
                                        @foreach ($tags as $tag)
                                            <option value"{{ $tag->id }}">{{ $tag->nama }}</option>
                                        @endforeach
                                </select>
                        </div>
                    </div>

                    <!--Detail Berita-->
                    <div class="form-group">
                        <label class="col-md-12"><h3 class="text-themecolor m-b-0 m-t-0">Detail Berita</h3></label>
                        <div class="col-md-12" style="margin-top: 2%;">
                                <textarea placeholder="Tulis Berita" name="detail">{{ $berita->detail }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12"><h3 class="text-themecolor m-b-0 m-t-0">Upload Gambar</h3></label>
                        <div class="col-md-12" style="margin-top: 2%;">
                            <input type="file" name="gambar">
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 2%;">
                        <div class="col-sm-12">
                            <input type="checkbox" name="status" id="" value="1">Terbitkan</input>
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