@extends('DashboardUser.index')
@section('title', 'Dashboard laporan')

@section('konten-dashboard')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Kategori</h3>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="{{ route('laporan.create') }}" class="btn pull-right hidden-sm-down btn-success">Tulis laporan</a>
    </div>
</div>

<div class="row" style="margin-top: 1%;">
    <div class="col-12">
        <div class="card">
            <div class="card-block">

                <h3 class="text-themecolor m-b-0 m-t-0">Daftar laporan</h3>
                <div class="table-responsive m-t-40"  style="margin-top: 1% !important;">
                    <table class="table stylish-table">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Waktu Pelaporan</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($laporans as $laporan)
                            <tr>
                                <td>{{ $laporan->judul }}</td>
                                <td>{{ $laporan->kategori }}</td>
                                <td>{{ $laporan->created_at->diffForHumans() }}</td>
                                <td><a href="{{ route('laporan.edit', $laporan->id) }}"><i class="fa fa-edit"></i>Sunting</a>
                                
                                    <form id="delete-form-{{ $laporan->id }}" action="{{ route('laporan.destroy', $laporan->id) }}"
                                    method="post">
                                    {{ csrf_field('') }}
                                    {{ method_field('DELETE') }}
                                    </form>
                                    <a href="{{ route('laporan.index') }}" onClick="
                                    if(confirm('Apakah anda yakin akan menghapus laporan in?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $laporan->id }}').submit();
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