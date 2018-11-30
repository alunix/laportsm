@extends('DashboardAdmin.index')
@section('title', 'Tulis Tanggapan')

@section('konten-dashboard')
<h2 class="text-themecolor m-b-0 m-t-0">Tulis Tanggapan</h2>

<div class="row" style="margin-top: 2%;">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material">

                    <!--Judul-->
                    <div class="form-group">
                        <label class="col-md-12" for="judul"><h3 class="text-themecolor m-b-0 m-t-0">Judul</h3></label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Judul Tanggapan" class="form-control form-control-line" name="judul">
                        </div>
                    </div>

                    <!--Slug-->
                    <div class="form-group">
                        <label class="col-md-12" for="slug"><h3 class="text-themecolor m-b-0 m-t-0">Slug</h3></label>
                        <div class="col-md-12">
                            <input type="Slug" placeholder="Slug Tanggapan" class="form-control form-control-line" name="slug">
                        </div>
                    </div>

                    <!--Kategori-->
                    <div class="form-group">
                        <label class="col-sm-12"><h3 class="text-themecolor m-b-0 m-t-0">Kategori</h3></label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" name="kategori">
                                <option>London</option>
                                <option>India</option>
                                <option>Usa</option>
                                <option>Canada</option>
                                <option>Thailand</option>
                            </select>
                        </div>
                    </div>

                    <!--Detail Tanggapan-->
                    <div class="form-group">
                        <label class="col-md-12"><h3 class="text-themecolor m-b-0 m-t-0">Detail Tanggapan</h3></label>
                        <div class="col-md-12" style="margin-top: 2%;" name="tanggapan">
                                <textarea placeholder="Tulis Tanggapan"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12"><h3 class="text-themecolor m-b-0 m-t-0">Upload Gambar</h3></label>
                        <div class="col-md-12" style="margin-top: 2%;" name="tanggapan">
                            <input type="file" name="gambar">
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 2%;">
                        <div class="col-sm-12">
                            <input type="checkbox" name="status" id="">Terbitkan</input>
                        </div>

                    <div class="form-group" style="margin-top: 2%;">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Terbitkan</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>


@endsection