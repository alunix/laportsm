@extends('DashboardAdmin.index')
@section('title', 'Dashboard Berita')

@section('konten-dashboard')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Kategori</h3>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="{{ route('berita.create') }}" class="btn pull-right hidden-sm-down btn-success">Tulis berita</a>
    </div>
</div>

<div class="row" style="margin-top: 1%;">
    <div class="col-12">
        <div class="card">
            <div class="card-block">

                <h3 class="text-themecolor m-b-0 m-t-0">Daftar Berita</h3>
                <div class="table-responsive m-t-40"  style="margin-top: 1% !important;">
                    <table class="table stylish-table">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Tag</th>
                                <th>Penulis</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beritas as $berita)
                            <tr>
                                <td>{{ $berita->judul }}</td>
                                <td>{{ $berita->kategori }}</td>
                                <td>{{ $berita->tag }}</td>
                                <td>Penulis Berita</td>
                                <td><a href="{{ route('berita.edit', $berita->id) }}"><i class="fa fa-edit"></i>Sunting</a>
                                
                                    <form id="delete-form-{{ $berita->id }}" action="{{ route('berita.destroy', $berita->id) }}"
                                    method="post">
                                    {{ csrf_field('') }}
                                    {{ method_field('DELETE') }}
                                    </form>
                                    <a href="{{ route('berita.index') }}" onClick="
                                    if(confirm('Apakah anda yakin akan menghapus berita in?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $berita->id }}').submit();
                                    }
                                    else{
                                        event.preventDefault();
                                    }" ><i class="fa fa-trash-o"></i>Hapus</a>
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