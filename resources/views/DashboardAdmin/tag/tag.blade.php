@extends('DashboardAdmin.index')
@section('title', 'Dashboard Tag')

@section('konten-dashboard')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Tag</h3>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="{{ route('tag.create') }}" class="btn pull-right hidden-sm-down btn-success">Tambah Tag</a>
    </div>
</div>

<div class="row" style="margin-top: 1%;">
    <div class="col-12">
        <div class="card">
            <div class="card-block">

                <h3 class="text-themecolor m-b-0 m-t-0">Daftar Tag</h3>
                <div class="table-responsive m-t-40"  style="margin-top: 1% !important;">
                    <table class="table stylish-table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Slug</th>
                                <th colspan="2">Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $tag->nama }}</td>
                                <td >{{ $tag->deskripsi }}</td>
                                <td >{{ $tag->slug }}</td>
                                <td><a href="{{ route('tag.edit', $tag->id) }}"><i class="fa fa-edit"></i>Sunting</a>
                                    <form id="delete-form-{{ $tag->id }}" action="{{ route('tag.destroy', $tag->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                    <a href="{{ route('tag.index') }}" onClick="
                                    if(confirm('Apakah anda yakin akan menghapus tag ini ?'))
                                        {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $tag->id }}').submit();
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