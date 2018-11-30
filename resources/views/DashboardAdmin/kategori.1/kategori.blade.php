@extends('DashboardAdmin.index')
@section('title', 'Kategori')

@section('konten-dashboard')
<h2 class="text-themecolor m-b-0 m-t-0">Kategori</h2>

<div class="row" style="margin-top: 2%;">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material">

                    <div class="form-group">
                        <label class="col-md-12" for="judul"><h3 class="text-themecolor m-b-0 m-t-0">Judul</h3></label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Nama kategori" class="form-control form-control-line" name="kategori">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="slug"><h3 class="text-themecolor m-b-0 m-t-0">Slug</h3></label>
                        <div class="col-md-12">
                            <input type="Slug" placeholder="Slug kategori" class="form-control form-control-line" name="slug">
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