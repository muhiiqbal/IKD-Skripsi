@extends('layouts.main')
@section('inputmatkul','active')
@section('content')
<div class="page-heading">
    <div class="page-title">
        {{-- <a href="/" class="btn btn-primary mb-3">Kembali</a> --}}
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pilih Mata Kuliah</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Card</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic card section start -->
    <section id="content-types">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Masukan Matkul</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="/mmatkul/tambahmatkul" method="post">
            @csrf
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Matkul</h4><hr>
                                
                                <div class="form-group">
                                    <label for="basicInput">Matkul</label>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">SKS</label>
                                    <input type="text" class="form-control"   name="sks">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

    </section>
    <section id="content-types">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Masukan Matkul</h4>
                            {{-- <input type="text" class="form-control"   name=""> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="/mmatkul/tambahkelas" method="post">
            @csrf
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Kelompok</h4><hr>
                                <div class="form-group">
                                    <label for="basicInput">kelas</label>
                                    <input type="text" class="form-control"  name="nama_kelas" >
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        
    </section>
@endsection
