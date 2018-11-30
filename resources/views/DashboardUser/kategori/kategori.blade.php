@extends('DashboardAdmin.index')
@section('title', 'Dashboard Kategori')

@section('konten-dashboard')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Kategori</h3>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="{{ route('kategori.create') }}" class="btn pull-right hidden-sm-down btn-success">Tambah kategori</a>
    </div>
</div>

<div class="row" style="margin-top: 1%;">
    <div class="col-12">
        <div class="card">
            <div class="card-block">

                <h3 class="text-themecolor m-b-0 m-t-0">Daftar kategori</h3>
                <div class="table-responsive m-t-40"  style="margin-top: 1% !important;">
                    <table class="table stylish-table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th colspan="2">Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoris as $kategori)
                            <tr>
                                <td>{{ $kategori->nama }}</td>
                                <td >{{ $kategori->deskripsi }}</td>
                                <td><a href="{{ route('kategori.edit', $kategori->id) }}"><i class="fa fa-edit"></i>Sunting</a>
                                    <form id="delete-form-{{ $kategori->id }}" action="{{ route('kategori.destroy', $kategori->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                    <a href="{{ route('kategori.index') }}" onClick="
                                    if(confirm('Apakah anda yakin akan menghapus kategori ini ?'))
                                        {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $kategori->id }}').submit();
                                        }
                                    else{
                                        event.preventDefault();
                                    }">
                                        <i class="fa fa-trash-o"></i>Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection