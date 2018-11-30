@extends('DashboardAdmin.index')
@section('title', 'Dashboard Petugas')

@section('konten-dashboard')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Petugas</h3>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="{{ route('kategori.create') }}" class="btn pull-right hidden-sm-down btn-success">Tambah Petugas</a>
    </div>
</div>

<div class="row" style="margin-top: 2%;">
    <div class="col-12">
        <div class="card">
            <div class="card-block">

                <h3 class="text-themecolor m-b-0 m-t-0">Daftar Petugas</h3>
                <div class="table-responsive m-t-40">
                    <table class="table stylish-table">
                        <thead>
                            <tr>
                                <th>Assigned</th>
                                <th>Name</th>
                                <th>Budget</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small></td>
                                <td>Elite Admin</td>
                                <td>$3.9K</td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Andrew</h6><small class="text-muted">Project Manager</small></td>
                                <td>Real Homes</td>
                                <td>$23.9K</td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Bhavesh patel</h6><small class="text-muted">Developer</small></td>
                                <td>MedicalPro Theme</td>
                                <td>$12.9K</td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small></td>
                                <td>Elite Admin</td>
                                <td>$10.9K</td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small></td>
                                <td>Helping Hands</td>
                                <td>$12.9K</td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Johnathan</h6><small class="text-muted">Graphic</small></td>
                                <td>Digital Agency</td>
                                <td>$2.6K</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection