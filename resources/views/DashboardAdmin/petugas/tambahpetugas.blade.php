@extends('DashboardAdmin.index')
@section('title', 'Tambah Petugas')

@section('konten-dashboard')
<h2 class="text-themecolor m-b-0 m-t-0">Tambah Petugas</h2>

<div class="row" style="margin-top: 2%;">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material">

                    <div class="form-group">
                        <label class="col-md-12" for="judul"><h3 class="text-themecolor m-b-0 m-t-0">Nama</h3></label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Nama Petugas" class="form-control form-control-line" name="Nama" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="slug"><h3 class="text-themecolor m-b-0 m-t-0">Email</h3></label>
                        <div class="col-md-12">
                            <input type="Slug" placeholder="Email Petugas" class="form-control form-control-line" name="email" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="slug"><h3 class="text-themecolor m-b-0 m-t-0">Password</h3></label>
                        <div class="col-md-12">
                            <input type="Password" placeholder="" class="form-control form-control-line" name="password" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="slug"><h3 class="text-themecolor m-b-0 m-t-0"> Konfirmasi Password</h3></label>
                        <div class="col-md-12">
                            <input type="Password" placeholder="" class="form-control form-control-line" name="password-confirmation" required="required">
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 2%;">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Submit</button>
                        </div>

                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>


@endsection