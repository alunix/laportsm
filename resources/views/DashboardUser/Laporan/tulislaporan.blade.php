@extends('DashboardUser.index')
@section('title', 'Tulis Laporan')

@section('konten-dashboard')
<div class="row page-titles">

    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Laporan</h3>
    </div>

    <div class="col-md-6 col-4 align-self-center">
        <a href="{{ route('laporan.index') }}" class="btn pull-right hidden-sm-down btn-primary">Kembali</a>
    </div>

</div>

@include('DashboardAdmin.pesan')

<div class="row" style="margin-top: 2%;">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material" action="{{ route('laporan.store') }}" method="post" role="form" enctype="multipart/form-data">
                    {{ csrf_field('') }}

                    <!--Judul-->
                    <div class="form-group">
                        <label class="col-md-12" for="judul"><h3 class="text-themecolor m-b-0 m-t-0">Judul</h3></label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Judul laporan" class="form-control form-control-line" name="judul">
                        </div>
                    </div>

                    <!--Kategori-->
                    <div class="form-group">
                        <label class="col-sm-12"><h3 class="text-themecolor m-b-0 m-t-0">Kategori</h3></label>
                        <div class="col-sm-12">
                                <select class="form-control form-control-line" name="kategori">
                                        <option>Pilih Kategori</option>
                                        @foreach ($kategoris as $kategori)
                                            <option value"{{ $kategori->nama }}">{{ $kategori->nama }}</option>
                                        @endforeach
                                </select>
                        </div>
                    </div>

                    <!--Detail laporan-->
                    <div class="form-group">
                        <label class="col-md-12"><h3 class="text-themecolor m-b-0 m-t-0">Detail Laporan</h3></label>
                        <div class="col-md-12" style="margin-top: 2%;">
                                <textarea placeholder="Tulis laporan" name="detail"></textarea>
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
                            <button class="btn btn-success">Laporkan</button>
                            <a href="{{ route('laporan.index') }}" class="btn hidden-sm-down btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

@endsection