@extends('layouts.main')
@section('inputnilai','active')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pilih Mata Kuliah</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
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
                            <h4 class="card-title">Identitas Dosen</h4>
                            <p class="card-text">{{$user->name}} ({{$user->email}})</p>
                        </div>

                    </div>
                </div>
            </div>
            @foreach ($matkul as $a)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">K2 - K7 (Per Matkul)</h4>
                            <h6 >{{$a->matkul->nama_matkul}} ({{$a->kelas->nama_kelas}})</h6>
                        </div>

                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="/input-nilai/{{$a->id}}/input" class="btn btn-light-primary">Pilih</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <form action="/input-nilai/{{$user->id}}/storekawal" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K1</h4><hr>
                                @if ($k1==NULL)
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Pertemuan 1</label>
                                    <input type="text" class="form-control" id="jumlah1"  name="pertemuan1k1" oninput="hitungk1()" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Pertemuan 2</label>
                                    <input type="text" class="form-control" id="jumlah2"  name="pertemuan2k1" oninput="hitungk1()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Total Kehadiran</label>
                                    <input type="text" class="form-control" id="total"  name="total_hadirk1" onchange="hitungk1(this.value)">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-1</label>
                                    <input type="text" class="form-control" id="nilaik1"  name="nakhirk1" onchange="hitungk1()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-1 * 0.05</label>
                                    <input type="text" class="form-control" id="nilai_akhirk1"  name="nk1" onclick="hitungk1()">
                                </div>
                                @else
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Pertemuan 1</label>
                                    <input type="text" class="form-control" id="jumlah1"  name="pertemuan1k1" value="{{$k1->total_1}}"oninput="hitungk1()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Pertemuan 2</label>
                                    <input type="text" class="form-control" id="jumlah2"  name="pertemuan2k1" value="{{$k1->total_2}}" oninput="hitungk1()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Total Kehadiran</label>
                                    <input type="text" class="form-control" id="total"   name="total_hadirk1" value="{{$k1->total_hadir}}"onchange="hitungk1(this.value)">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-1</label>
                                    <input type="text" class="form-control" id="nilaik1" name="nakhirk1"  value="{{$k1->nakhir}}" onchange="hitungk1()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-1 * 0.05</label>
                                    <input type="text" class="form-control" id="nilai_akhirk1"  name="nk1" value="{{$k1->n1}}"onclick="hitungk1()">
                                </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">K7</h4><hr>
                            @if ($k7 == NULL)
                            <div class="form-group">
                                <label for="basicInput">Jumlah Mahasiswa</label>
                                <input type="text" class="form-control" id="mhsk7" name="jml_mhsk7" oninput="hitungk7()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Jumlah Meluluskan</label>
                                <input type="text" class="form-control" id="mhslulusk7" name="jml_mhs_lulus7"oninput="hitungk7()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Presentase</label>
                                <input type="text" class="form-control" id="persentasek7" name="total_presentasek7" onchange="hitungk7()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Nilai K-7</label>
                                <input type="text" class="form-control" id="nilaik7" name="nakhirk7"  onchange="hitungk7()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Nilai  K-7 * 0.05</label>
                                <input type="text" class="form-control" id="nilai_akhirk7" name="nk7" onclick="hitungk7()">
                            </div>
                            @else
                            <div class="form-group">
                                <label for="basicInput">Jumlah Mahasiswa</label>
                                <input type="text" class="form-control" id="mhsk7" name="jumlah_mhsk7" value="{{$k7->jumlah_mhs}}" oninput="hitungk7()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Jumlah Meluluskan</label>
                                <input type="text" class="form-control" id="mhslulusk7" name="jumlah_mhs_lulusk7" value="{{$k7->jumlah_mhs_lulus}}"oninput="hitungk7()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Presentase</label>
                                <input type="text" class="form-control" id="persentasek7" name="total_presentasek7"value="{{$k7->total_presentase}}"onchange="hitungk7()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Nilai K-7</label>
                                <input type="text" class="form-control"  id="nilaik7" name="nakhirk7" value="{{$k7->nakhir}}"  onchange="hitungk7()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Nilai K-7 * 0.05</label>
                                <input type="text" class="form-control" id="nilai_akhirk7" name="nk7" value="{{$k7->n7}}"onclick="hitungk7()">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">K8</h4><hr>
                            @if ($k8 == NULL)
                            {{-- #penugasank8, --}}
                            <div class="form-group">
                                <label for="basicInput">Jumlah Penugasan</label>
                                <input type="text" class="form-control" id="penugasank8" name="penugasank8" oninput="hitungkedelapan()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Jumlah Tugas Dilaksanakan</label>
                                <input type="text" class="form-control" id="dilaksanakank8" name="jumlah_dilaksanakank8" oninput="hitungkedelapan()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Jumlah Tidak melaksanakan</label>
                                <input type="text" class="form-control" id="tidakdilaksanakank8" name="jumlah_tdkk8" oninput="hitungkedelapan()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Total Jaga</label>
                                <input type="text" class="form-control" id="totaljagak8" name="jagak8"  oninput="hitungkedelapan()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Jumlah Kedelapan</label>
                                <input type="text" class="form-control" id="totalk8" name="jumlah_kedelapank8"  oninput="hitungkedelapan()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Nilai K-8</label>
                                <input type="text" class="form-control" id="nilaik8"  name="nakhirk8"  oninput="hitungkedelapan()">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Nilai K-8 * 0.05</label>
                                <input type="text" class="form-control" id="nilai_akhirk8" name="nk8" onclick="hitungkedelapan()">
                            </div>
                            @else
                            <div class="form-group">
                                <label for="basicInput">Jumlah Penugasan</label>
                                <input type="text" class="form-control" id="penugasank8" name="penugasank8"value="{{$k8->penugasan}}" oninput="hitungkedelapan();">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Jumlah Tugas Dilaksanakan</label>
                                <input type="text" class="form-control" id="dilaksanakank8" name="jumlah_dilaksanakank8" value="{{$k8->jumlah_dilaksanakan}}" oninput="hitungkedelapan();">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Jumlah Tidak melaksanakan</label>
                                <input type="text" class="form-control" id="tidakdilaksanakank8" name="jumlah_tdkk8" value="{{$k8->jumlah_tdk}}" oninput="hitungkedelapan();">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Total Jaga</label>
                                <input type="text" class="form-control" id="totaljagak8" name="jagak8" value="{{$k8->jumlah_jaga}}" oninput="hitungkedelapan();">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Jumlah Kedelapan</label>
                                <input type="text" class="form-control" id="totalk8" name="jumlah_kedelapank8" value="{{$k8->jumlah_kedelapan}}" oninput="hitungkedelapan();">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Nilai K-8</label>
                                <input type="text" class="form-control" id="nilaik8" name="nakhirk8" value="{{$k8->nakhir}}" oninput="hitungkedelapan();">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Nilai K-8</label>
                                <input type="text" class="form-control" id="nilai_akhirk8" name="nk8" value="{{$k8->n8}}" onclick="hitungkedelapan();">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K9</h4><hr>
                                @if ($k9 == NULL)
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Penugasan</label>
                                    <input type="text" class="form-control" id="penugasank9" name="jumlah_penugasank9"  oninput="hitungk9()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Realisasi</label>
                                    <input type="text" class="form-control" id="jumlahlaksanak9" name="jumlah_realisasik9" oninput="hitungk9()" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Presentase</label>
                                    <input type="text" class="form-control" id="persentasek9" name="presentasek9"  oninput="hitungk9()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-9</label>
                                    <input type="text" class="form-control" id="nilaik9" name="nakhirk9" oninput="hitungk9()" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-9 * 0.05</label>
                                    <input type="text" class="form-control" id="nilai_akhirk9" name="nk9"  onclick="hitungk9()">
                                </div>
                                @else
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Penugasan</label>
                                    <input type="text" class="form-control" id="penugasank9" name="jumlah_penugasank9" value="{{$k9->jumlah_penugasan}}" oninput="hitungk9()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Realisasi</label>
                                    <input type="text" class="form-control" id="jumlahlaksanak9" name="jumlah_realisasik9" value="{{$k9->jumlah_realisasi}}" oninput="hitungk9()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Presentase</label>
                                    <input type="text" class="form-control" id="persentasek9" name="presentasek9" value="{{$k9->total_presen}}" oninput="hitungk9()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-9</label>
                                    <input type="text" class="form-control" id="nilaik9" name="nakhirk9" value="{{$k9->nakhir}}" oninput="hitungk9()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-9 * 0.05</label>
                                    <input type="text" class="form-control" id="nilai_akhirk9" name="nk9" value="{{$k9->n9}}" onclick="hitungk9()">
                                </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K10</h4><hr>
                                @if ($k10 == NULL)
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Penelitian</label>
                                    <input type="text" class="form-control" id="jumlahpenelitiank10" name="jumlah_penelitiank10" oninput="hitungk10()"  >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-10</label>
                                    <input type="text" class="form-control" id="nilaik10" name="nakhirk10" oninput="hitungk10()"  >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-10 * 0.25</label>
                                    <input type="text" class="form-control" id="nilai_akhirk10" name="nk10" onclick="hitungk10()" >
                                </div>
                                @else
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Penelitian</label>
                                    <input type="text" class="form-control" id="jumlahpenelitiank10" name="jumlah_penelitiank10" value="{{$k10->jumlah_penelitian}}" oninput="hitungk10()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-10</label>
                                    <input type="text" class="form-control" id="nilaik10" name="nakhirk10" value="{{$k10->nakhir}}"  oninput="hitungk10()" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-10 * 0.25</label>
                                    <input type="text" class="form-control" id="nilai_akhirk10" name="nk10" value="{{$k10->n10}}" onclick="hitungk10()">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K11</h4><hr>
                                @if ($k11 == NULL)
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Karya Ilmiah</label>
                                    <input type="text" class="form-control" id="ilmiahk11" name="jumlah_karyak11" oninput="hitungk11()" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-11</label>
                                    <input type="text" class="form-control" id="nilaik11" name="nakhirk11"  oninput="hitungk11()" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-11 * 0.15</label>
                                    <input type="text" class="form-control" id="nilai_akhirk11" name="nk11"  onclick="hitungk11()" >
                                </div>
                                @else
                                <div class="form-group">
                                    <label for="basicInput">Jumlah Karya Ilmiah</label>
                                    <input type="text" class="form-control" id="ilmiahk11" name="jumlah_karyak11" value="{{$k11->jumlah_karya}}" oninput="hitungk11()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-11</label>
                                    <input type="text" class="form-control" id="nilaik11" name="nakhirk11" value="{{$k11->nakhir}}" oninput="hitungk11()">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-11 * 0.15</label>
                                    <input type="text" class="form-control" id="nilai_akhirk11" name="nk11"  value="{{$k11->n11}}" onclick="hitungk11()">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K12</h4><hr>
                                @if ($k12 == NULL)
                                <div class="form-group">
                                    <label for="basicInput">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="basicInput" name="tgl_masukk12"  >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Masuk</label>
                                    <input type="time" class="form-control" id="waktu_masukk12" onchange="duabelas();" name="waktu_masukk12" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Keluar</label>
                                    <input type="time" class="form-control" id="waktu_keluark12"onchange="duabelas();" name="waktu_keluark12" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu  Pembulatan</label>
                                    <input type="text" class="form-control" id="bulat_k12"onchange="duabelas();" name="masuk_bulatk12" >
                                </div>
                                {{-- <div class="form-group">
                                    <label for="basicInput">Waktu Keluar Pembulatan</label>
                                    <input type="time" class="form-control" id="basicInput" name="keluar_bulatk12">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Total Pembulatan</label>
                                    <input type="time" class="form-control" id="basicInput" name="waktu_totalk12">
                                </div> --}}
                                <div class="form-group">
                                    <label for="basicInput">Jenis</label>
                                    <input type="text" class="form-control" id="basicInput" name="jenisk12">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Total TM</label>
                                    <input type="text" class="form-control" id="basicInput" name="total_tmk12" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-12</label>
                                    <input type="text" class="form-control" id="nilaik12" onchange="duabelas();" name="nakhirk12" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-12 * 0.05</label>
                                    <input type="text" class="form-control" id="nilai_akhirk12" onclick="duabelas();" name="nk12" >
                                </div>
                                @else
                                <div class="form-group">
                                    <label for="basicInput">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="basicInput" name="tgl_masukk12"  value="{{$k12->tgl_masuk}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Masuk</label>
                                    <input type="time" class="form-control" id="waktu_masukk12" onchange="duabelas();" name="waktu_masukk12" value="{{$k12->waktu_masuk}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Keluar</label>
                                    <input type="time" class="form-control" id="waktu_keluark12" onchange="duabelas();" name="waktu_keluark12" value="{{$k12->waktu_keluar}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Masuk Pembulatan</label>
                                    <input type="text" class="form-control" id="bulat_k12" onchange="duabelas();" name="masuk_bulatk12" value="{{$k12->waktu_masuk_bulat}}">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="basicInput">Waktu Keluar Pembulatan</label>
                                    <input type="time" class="form-control" id="basicInput" name="keluar_bulatk12" value="{{$k12->waktu_keluar_bulat}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Total Pembulatan</label>
                                    <input type="time" class="form-control" id="basicInput" name="waktu_totalk12"value="{{$k12->waktu_total}}">
                                </div> --}}
                                <div class="form-group">
                                    <label for="basicInput">Jenis</label>
                                    <input type="text" class="form-control" id="basicInput" onchange="duabelas();" name="jenisk12" value="{{$k12->jenis}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Total TM</label>
                                    <input type="text" class="form-control" id="basicInput" onchange="duabelas();" name="total_tmk12" value="{{$k12->total_tm}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-12</label>
                                    <input type="text" class="form-control" id="nilaik12" onchange="duabelas();" name="nakhirk12" value="{{$k12->nakhir}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-12 * 0.05 </label>
                                    <input type="text" class="form-control" id="nilai_akhirk12" onclick="duabelas();" name="nk12" value="{{$k12->n12}}">
                                </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K13</h4><hr>
                                @if ($k13 == NULL)
                                <div class="form-group">
                                    <label for="basicInput">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="tgl_masukk13" name="tgl_masukk13" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Masuk</label>
                                    <input type="time" class="form-control" onchange="jam();" id="waktumasukk13" name="waktu_masukk13" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Keluar</label>
                                    <input type="time" class="form-control" onchange="jam();" id="waktukeluark13" name="waktu_keluark13" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Pembulatan</label>
                                    <input type="text" class="form-control" onchange="jam();" id="bulat_k13" name="masuk_bulatk13">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="basicInput">Waktu Keluar Pembulatan</label>
                                    <input type="text" class="form-control" id="bulatkeluark13" name="keluar_bulatk13" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Total Pembulatan</label>
                                    <input type="text" class="form-control" id="totalbulatk13" name="waktu_totalk13" >
                                </div> --}}
                                <div class="form-group">
                                    <label for="basicInput">Jenis</label>
                                    <input type="text" class="form-control" id="jenisk13" name="jenisk13" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Total TM</label>
                                    <input type="text" class="form-control" id="totalk13" name="total_tmk13">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-13</label>
                                    <input type="text" class="form-control" id="nilaik13" onchange="jam();" name="nakhirk13">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-13 * 0.05</label>
                                    <input type="text" class="form-control" id="nilai_akhirk13" onclick="jam();" name="nk13" >
                                </div>
                                @else
                                <div class="form-group">
                                    <label for="basicInput">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="tglmasukk13" name="tgl_masukk13" value="{{$k13->tgl_masuk}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Masuk</label>
                                    <input type="time" class="form-control" id="waktumasukk13" onchange="jam();" name="waktu_masukk13" value="{{$k13->waktu_masuk}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Keluar</label>
                                    <input type="time" class="form-control" id="waktukeluark13" onchange="jam();"name="waktu_keluark13" value="{{$k13->waktu_keluar}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Pembulatan</label>
                                    <input type="text" class="form-control" id="bulat_k13" onchange="jam();" name="masuk_bulatk13"value="{{$k13->waktu_masuk_bulat}}">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="basicInput">Waktu Keluar Pembulatan</label>
                                    <input type="text" class="form-control" id="bulatkeluark13" name="keluar_bulatk13" value="{{$k13->waktu_keluar_bulat}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Total Pembulatan</label>
                                    <input type="text" class="form-control" id="totalbulatk13" name="waktu_totalk13" value="{{$k13->waktu_total}}">
                                </div> --}}
                                <div class="form-group">
                                    <label for="basicInput">Jenis</label>
                                    <input type="text" class="form-control" id="jenisk13" name="jenisk13" value="{{$k13->jenis}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Total TM</label>
                                    <input type="text" class="form-control" id="totalk13" name="total_tmk13"value="{{$k13->total_tm}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-13</label>
                                    <input type="text" class="form-control" id="nilaik13" onchange="jam();" value="{{$k13->nakhir}}" name="nakhirk13">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-13 * 0.05</label>
                                    <input type="text" class="form-control" id="nilai_akhirk13" onclick="jam();" name="nk13" value="{{$k13->n13}}">
                                </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K14</h4><hr>
                                @if ($k14 == null)
                                <div class="form-group">
                                    <label for="basicInput">Total Pengurangan</label>
                                        <input type="text" class="form-control" id="pengurangank14" name="total_pengurangank14" oninput="hitungk14();">
                                    </div>
                                    <div class="form-group">
                                    <label for="basicInput">Nilai K-14</label>
                                        <input type="text" class="form-control" id="nilaik14" name="nakhirk14" oninput="hitungk14();">
                                    </div>
                                    <label for="basicInput">Nilai K-14 * 0.05</label>
                                        <input type="text" class="form-control" id="nilai_akhirk14" name="nk14"onclick="hitungk14();" >
                                    </div>
                                @else
                                <div class="form-group">
                                    <label for="basicInput">Total Pengurangan</label>
                                        <input type="text" class="form-control" id="pengurangank14" name="total_pengurangank14" value="{{$k14->total_pengurangan}}"oninput="hitungk14();">
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">Nilai K-14</label>
                                            <input type="text" class="form-control" id="nilaik14" name="nakhirk14" value="{{$k14->nakhir}}"oninput="hitungk14();">
                                        </div>
                                    <div class="form-group">
                                    <label for="basicInput">Nilai K-14 * 0.05</label>
                                        <input type="text" class="form-control" id="nilai_akhirk14" name="nk14" value="{{$k14->n14}}"onclick="hitungk14();">
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary w-100">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- script perhitungan -->
@endsection
@section('script')
<script>
    function refresh() {
        $.ajax({
            url: '/refresh-csrf',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).then(function(d) {
            $('meta[name="csrf-token"]').attr('content', d);
        });
    }
</script>

<script>
    function hitungk1(){
        var jumlah1 = document.getElementById('jumlah1').value;
        var jumlah2 = document.getElementById('jumlah2').value;
        var akhir = document.getElementById('nilaik1').value;
        var total1  = parseInt(jumlah1)/ 14 *50;
        var total2  = parseInt(jumlah2)/ 14 *50;
        var total = parseInt(total1) + parseInt(total2);
        document.getElementById('total').value = total;

        if(total >=80  ){
            document.getElementById('nilaik1').value = 4}
        else if(total < 79  && total >= 60){
            document.getElementById('nilaik1').value = 3}
        else if(total < 69&& total >=50){
            document.getElementById('nilaik1').value = 2}
        else if(total < 59 && total >= 30){
            document.getElementById('nilaik1').value = 1}
        else if(total < 30){
            document.getElementById('nilaik1').value = 0}
        var akhir1 = parseFloat(akhir) * 0.05 ;
        document.getElementById('nilai_akhirk1').value = akhir1.toFixed(2);
    }
    
    function hitungk7(){
            var dlk = document.getElementById('mhsk7').value;
            var tdk = document.getElementById('mhslulusk7').value;
            var akhir = document.getElementById('nilaik7').value;
            var totalk7 = parseInt(tdk) / parseInt(dlk) * 100;
            document.getElementById('persentasek7').value= totalk7;
            document.getElementById('nilaik7').value= totalk7;

            if(totalk7 >=100 ){
                document.getElementById('nilaik7').value = 4}
            else if(totalk7 < 90 && totalk7 >=70 ){
                document.getElementById('nilaik7').value = 3}
            else if(totalk7 < 70 && totalk7 >=50){
                document.getElementById('nilaik7').value = 2}
            else if(totalk7 < 50 && totalk7 >=30){
                document.getElementById('nilaik7').value = 1}
            else if(totalk7 < 30){
                document.getElementById('nilaik7').value = 0}
            
            var totalakhir = parseFloat(akhir) * 0.05;
            document.getElementById('nilai_akhirk7').value = totalakhir.toFixed(2);
    }

    function hitungkedelapan(){
    
            var tugas1 = document.getElementById('penugasank8').value;
            var dlk1 = document.getElementById('dilaksanakank8').value;
            var tdk1 = document.getElementById('tidakdilaksanakank8').value;
            var akhir8 = document.getElementById('nilaik8').value;
            var totaltdk1 = parseInt(tugas1) - parseInt(dlk1);
            var totalk8 = parseInt(dlk1) / parseInt(tugas1)*100;
            document.getElementById('tidakdilaksanakank8').value = totaltdk1;
            document.getElementById('totaljagak8').value= dlk1;
            document.getElementById('totalk8').value = totalk8;

            if(totalk8 >=100 ){
                document.getElementById('nilaik8').value = 4}
            else if(totalk8 <89 && totalk8 >=70 ){
                document.getElementById('nilaik8').value = 3}
            else if(totalk8 < 69 && totalk8 >=50){
                document.getElementById('nilaik8').value = 2}
            else if(totalk8 < 49 && totalk8 >=30){
                document.getElementById('nilaik8').value = 1}
            else if(totalk8 <30){
                document.getElementById('nilaik8').value = 0}
            
            var totalakhir = parseFloat(akhir8) * 0.05;
            document.getElementById('nilai_akhirk8').value = totalakhir.toFixed(2);
    }

    function hitungk9(){
            var dlk = document.getElementById('penugasank9').value;
            var tdk = document.getElementById('jumlahlaksanak9').value;
            var akhir9 = document.getElementById('nilaik9').value;
            var totalk9 = (parseInt(tdk) / parseInt(dlk)) * 100 ;// 20 ->convert ke persen
            document.getElementById('persentasek9').value= totalk9;
            document.getElementById('nilaik9').value = totalk9;
            document.getElementById('nilaik9').value= totalk9;

            if(totalk9 >=100 ){
                document.getElementById('nilaik9').value= 4}
            else if(totalk9 <89 && totalk9 >=70 ){
                document.getElementById('nilaik9').value= 3}
            else if(totalk9 < 69 && totalk9 >=50){
                document.getElementById('nilaik9').value= 2}
            else if(totalk9 < 49 && totalk9 >=30){
                document.getElementById('nilaik9').value= 1}
            else if(totalk9 <30){
                document.getElementById('nilaik9').value = 0}
            
            var totalakhir = parseFloat(akhir9) * 0.05;
            document.getElementById('nilai_akhirk9').value = totalakhir.toFixed(2);
            
    }
    
    function hitungk10(){
            var dlk = document.getElementById('jumlahpenelitiank10').value;
            var akhir10 = document.getElementById('nilaik10').value;
            document.getElementById('nilaik10').value= dlk;

            if(dlk >=2 ){
                document.getElementById('nilaik10').value = 4}
            else if(dlk <2 && dlk >=1 ){
                document.getElementById('nilaik10').value = 2}
            else if(dlk <1){
                document.getElementById('nilaik10').value = 0}
            
            var totalakhir = parseFloat(akhir10) * 0.25;
            document.getElementById('nilai_akhirk10').value = totalakhir.toFixed(2);
    }
    function hitungk11(){
            var dlk = document.getElementById('ilmiahk11').value;
            var akhir11 = document.getElementById('nilaik11').value;
            document.getElementById('nilaik11').value= dlk;

            if(dlk >=2){
                document.getElementById('nilaik11').value = 4}
            else if(dlk <2 && dlk >=1 ){
                document.getElementById('nilaik11').value = 2}
            else if(dlk <1){
                document.getElementById('nilaik11').value = 0}
            
            var totalakhir = parseFloat(akhir11) * 0.15;
            document.getElementById('nilai_akhirk11').value = totalakhir.toFixed(2);
    }

    


    function jam(){
        let txtFirstNumberValue = document.getElementById('waktumasukk13').value;
        let txtSecondNumberValue = document.getElementById('waktukeluark13').value;
        let akhir = document.getElementById('nilai_akhirk13').value;
        let nilai = document.getElementById('nilaik13').value;
        // 
        var jam_first = parseInt(txtFirstNumberValue.substring(0,2)) * 60;
        var jam_second = parseInt(txtSecondNumberValue.substring(0,2)) * 60;
        var menit_first = parseInt(txtFirstNumberValue.substring(3,5));
        var menit_second = parseInt(txtSecondNumberValue.substring(3,5));

        var hasil_first = jam_first + menit_first;
        var hasil_second = jam_second + menit_second;
        var selisih = hasil_second - hasil_first;
        var jam = Math.floor(selisih / 60);
        var menit = selisih - (jam * 60);
        
        if (!isNaN(jam || menit)) {
        document.getElementById('bulat_k13').value = jam;
        }

        var hasil = document.getElementById('bulat_k13').value;

        if (hasil >=8) {
            document.getElementById('nilaik13').value = 4; 
        } else  {
            document.getElementById('nilaik13').value = 0;
        }
        var totalakhir = parseFloat(nilai) * 0.05;
        document.getElementById('nilai_akhirk13').value = totalakhir.toFixed(2);
    }

    function duabelas(){
        let txtFirstNumberValue = document.getElementById('waktu_masukk12').value;
        let txtSecondNumberValue = document.getElementById('waktu_keluark12').value;
        let akhir = document.getElementById('nilai_akhirk12').value;
        
        let nilai = document.getElementById('nilaik12').value;


        var jam_first = parseInt(txtFirstNumberValue.substring(0,2)) * 60;
        var jam_second = parseInt(txtSecondNumberValue.substring(0,2)) * 60;
        var menit_first = parseInt(txtFirstNumberValue.substring(3,5));
        var menit_second = parseInt(txtSecondNumberValue.substring(3,5));

        var hasil_first = jam_first + menit_first;
        var hasil_second = jam_second + menit_second;
        var selisih = hasil_second - hasil_first;
        var jam = Math.floor(selisih / 60);
        var menit = selisih - (jam * 60);

        if (!isNaN(jam || menit)) {
        document.getElementById('bulat_k12').value = jam ;
        }

        var hasil = document.getElementById('bulat_k12').value;

        if (hasil >=8) {
            document.getElementById('nilaik12').value = 4; 
        } else  {
            document.getElementById('nilaik12').value = 0;
        }

        var totalakhir = parseFloat(nilai) * 0.05;
        document.getElementById('nilai_akhirk12').value = totalakhir.toFixed(2);

    }
    function hitungk14(){
        let txtFirstNumberValue = document.getElementById('pengurangank14').value;
        let akhir = document.getElementById('nilai_akhirk14').value;
        let nilai = document.getElementById('nilaik14').value;
        document.getElementById('nilaik14').value= txtFirstNumberValue;

        if(txtFirstNumberValue >=2 ){
            document.getElementById('nilaik14').value = 0}
        else if(txtFirstNumberValue <2 && txtFirstNumberValue >=0 ){
            document.getElementById('nilaik14').value = 4}
        
        var totalakhir = parseFloat(nilai) * 0.05;
        document.getElementById('nilai_akhirk14').value = totalakhir.toFixed(2);
    }
</script>



@endsection
