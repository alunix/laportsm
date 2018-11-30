@extends('HalamanDepan.index')

@section('gambar-header', asset('../img/bg/header3.jpg'))

@section('judul','Tasikmalaya Smart City')
@section('judulhead','Tasikmalaya Smart City')

@section('sub-judul','untuk kebahagian warga Tasikmalaya')

@section('konten-utama')
    <!--Bagian Informasi Tentang Tasikmalaya Smart City-->
    <section id="tentang">
            <div class="container">
                @include('HalamanDepan.bagian._penjelasan')
            </div>
        </section>
    
        <!-- Bagian Informasi untuk Masyarakat -->
        <section id="informasi">
            @include('HalamanDepan.bagian._kotakinformasi')
        </section>
    
        <!-- Bagian Layanan Online Masyarakat -->
        <section id="layanan">
            @include('HalamanDepan.bagian._layanan')
        </section>
    
        <section id="sorotan">
            @include('HalamanDepan.bagian._sorotan')
        </section>

@endsection