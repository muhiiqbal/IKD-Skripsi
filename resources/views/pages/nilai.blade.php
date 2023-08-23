@extends('layouts.main')
@section('inputnilai','active')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input Nilai</h3>
                <h3>{{$ambil->matkul->nama_matkul}}</h3>

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
                            <p class="card-text">{{$ambil->user->name}} ({{$ambil->user->email}})</p>
                        </div>

                    </div>
                </div>
            </div>
            <form action="/input-nilai/{{$ambil->id}}/store" method="post">
                @csrf
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K2</h4><hr>
                                <div class="form-group">
                                    <label for="basicInput">Penyerahan</label>
                                    @if ($k2 == NULL)
                                    <input type="date" class="form-control"   id="penyerahank2"  onchange="hari()" name="penyerahank2">

                                    @else
                                    <input type="date" class="form-control"  id="penyerahank2" onchange="hari()" name="penyerahank2" value="{{$k2->penyerahan}}">

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Tanggal Penyerahan</label>
                                    @if ($k2 == NULL)
                                    <input type="date" class="form-control"  id="tanggalpenyerahank2" onchange="hari()" name="tanggal_penyerahank2">

                                    @else
                                    <input type="date" class="form-control"  id="tanggalpenyerahank2" onchange="hari()" name="tanggal_penyerahank2"value="{{$k2->tgl_serah}}">

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Pembulatan Hari</label>
                                    @if ($k2 == NULL)
                                    <input type="text" class="form-control"  id="pembulatank2"  onchange="hari()" name="terlambatk2">

                                    @else
                                    <input type="text" class="form-control"  id="pembulatank2"  onchange="hari()" name="terlambatk2" value="{{$k2->terlambat}}">

                                    @endif
                                </div>
                                {{-- <div class="form-group">
                                    <label for="basicInput">Terlambat</label>
                                    @if ($k2 == NULL)
                                    <input type="text" class="form-control"  id="terlambatk2"  onchange="hari()" name="terlambatk2">

                                    @else
                                    <input type="text" class="form-control"  id="terlambatk2"  onchange="hari()" name="terlambatk2"value="{{$k2->terlambat}}">

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Ketepatan</label>
                                    @if ($k2 == NULL) 
                                    <input type="text" class="form-control"  id="tepatk2"  onchange="hari()" name="ketepatank2">

                                    @else
                                    <input type="text" class="form-control"  id="tepatk2"  onchange="hari()" name="ketepatank2" value="{{$k2->total_serah}}">

                                    @endif
                                </div> --}}
                                <div class="form-group">
                                    <label for="basicInput">Nilai K2</label>
                                    @if ($k2 == NULL)
                                    <input type="text" class="form-control" id="nilaik2"  onchange="hari()" name="nakhirk2">

                                    @else
                                    <input type="text" class="form-control"  id="nilaik2"  onchange="hari()"name="nakhirk2" value="{{$k2->nakhir}}" >

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai 2 * 0.05</label>
                                    @if ($k2 == NULL)
                                    <input type="text" class="form-control" id="nilai_akhirk2"  onclick="hari()" name="nk2">

                                    @else
                                    <input type="text" class="form-control"  id="nilai_akhirk2"  onclick="hari()"name="nk2" value="{{$k2->n2}}">

                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K3</h4><hr>
                                <div class="form-group">
                                    <label for="basicInput">Tanggal Penyerahan</label>
                                    @if ($k3 == NULL)
                                    <input type="date" class="form-control" id="tanggalk3" onchange="haritiga()"name="tanggal_penyerahank3">

                                    @else
                                    <input type="date" class="form-control" id="tanggalk3" onchange="haritiga()"name="tanggal_penyerahank3"value="{{$k3->tanggal_pertama}}">

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Tanggal Upload</label>
                                    @if ($k3 == NULL)
                                    <input type="date" class="form-control" id="tanggaluploadk3" onchange="haritiga()"name="tanggal_uploadk3">

                                    @else
                                    <input type="date" class="form-control" id="tanggaluploadk3" onchange="haritiga()"name="tanggal_uploadk3" value="{{$k3->tanggal_kedua}}">

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Waktu Upload</label>
                                    @if ($k3 == NULL)
                                    <input type="time" class="form-control" id="basicInput"onchange="haritiga()" name="waktu_uploadk3">

                                    @else
                                    <input type="time" class="form-control" id="basicInput" onchange="haritiga()"name="waktu_uploadk3" value="{{$k3->waktu_upload}}">

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Pembulatan </label>
                                    @if ($k3 == NULL)
                                    <input type="text" class="form-control" id="bulatk3" onchange="haritiga()"name="ketepatank3">

                                    @else
                                    <input type="text" class="form-control" id="bulatk3" onchange="haritiga()"name="ketepatank3" value="{{$k3->total_ketepatan}}">

                                    @endif
                                </div>
                                {{-- <div class="form-group">
                                    <label for="basicInput">Ketepatan</label>
                                    @if ($k3 == NULL)
                                    <input type="text" class="form-control" id="tepatk3" onchange="haritiga()"name="ketepatank3">

                                    @else
                                    <input type="text" class="form-control" id="tepatk3"onchange="haritiga()" name="ketepatank3" value="{{$k3->total_ketepatan}}">

                                    @endif
                                </div> --}}
                                <div class="form-group">
                                    <label for="basicInput">Nilai K3</label>
                                    @if ($k3 == NULL)
                                    <input type="text" class="form-control" id="nilaik3" onchange="haritiga()"name="nakhirk3">

                                    @else
                                    <input type="text" class="form-control" id="nilaik3" onchange="haritiga()"name="nakhirk3" value="{{$k3->nakhir}}" >

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K3 * 0.05</label>
                                    @if ($k3 == NULL)
                                    <input type="text" class="form-control" id="nilai_akhirk3" onclick="haritiga()"name="nk3">

                                    @else
                                    <input type="text" class="form-control" id="nilai_akhirk3" onclick="haritiga()"name="nk3" value="{{$k3->n3}}">

                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K4</h4><hr>
                                <div class="form-group">
                                    <label for="basicInput">Bahan Ajar</label>
                                    @if ($k4 == NULL)
                                    <input type="text" class="form-control" id="ajark4" oninput="hitungk4();" name="bahan_ajark4">
                                    
                                    @else
                                    <input type="text" class="form-control" id="ajark4" oninput="hitungk4();" name="bahan_ajark4" value="{{$k4->total_ajar}}">

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-4</label>
                                    @if ($k4 == NULL)
                                    <input type="text" class="form-control" id="nilai_akhirk4" oninput="hitungk4();" name="nakhirk4">
                                    
                                    @else
                                    <input type="text" class="form-control" id="nilai_akhirk4" oninput="hitungk4();" name="nakhirk4" value="{{$k4->nakhir}}" >

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-4 * 0.05</label>
                                    @if ($k4 == NULL)
                                    <input type="text" class="form-control" id="nilaik4" onclick="hitungk4();" name="nk4">

                                    @else
                                    <input type="text" class="form-control" id="nilaik4" onclick="hitungk4();" name="nk4" value="{{$k4->n4}}">

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K5</h4><hr>
                                <div class="form-group">
                                    <label for="basicInput">Score Quisioner</label>
                                    @if ($k5 == NULL)
                                    <input type="text" class="form-control" id="totalk5" name="total_quisk5" oninput="hitungk5();">

                                    @else
                                    <input type="text" class="form-control" id="totalk5" name="total_quisk5" value="{{$k5->total_kuis}}" oninput="hitungk5();">

                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="basicInput">Total Rata-Rata</label>
                                    @if ($k5 == NULL)
                                    <input type="text" class="form-control" id="totalratak5" name="total_ratak5" oninput="hitungk5();">

                                    @else
                                    <input type="text" class="form-control" id="totalratak5" name="total_ratak5" value="{{$k5->total_rata}}" oninput="hitungk5();">

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-5</label>
                                    @if ($k5 == NULL)
                                    <input type="text" class="form-control" id="nilaik5" name="nakhirk5" oninput="hitungk5();">

                                    @else
                                    <input type="text" class="form-control" id="nilaik5" name="nakhirk5"  oninput="hitungk5();" value="{{$k5->nakhir}}">

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-5 * 0.05</label>
                                    @if ($k5 == NULL)
                                    <input type="text" class="form-control" id="nilai_akhirk5" name="nk5" onclick="hitungk5();">

                                    @else
                                    <input type="text" class="form-control" id="nilai_akhirk5" name="nk5"value="{{$k5->n5}}"  onclick="hitungk5();">

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">K6</h4><hr>
                                <div class="form-group">
                                    <label for="basicInput">Bahan Ajar</label>
                                    @if ($k6 == NULL)
                                    <input type="text" class="form-control" id="ajark6" name="bahan_ajark6" oninput="hitungk6();">

                                    @else
                                    <input type="text" class="form-control" id="ajark6" name="bahan_ajark6" value="{{$k6->total_rencana}}" oninput="hitungk6();">

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-6</label>
                                    @if ($k6 == NULL)
                                    <input type="text" class="form-control" id="nilai_akhirk6" name="nakhirk6" oninput="hitungk6();">

                                    @else
                                    <input type="text" class="form-control" id="nilai_akhirk6" name="nakhirk6" oninput="hitungk6();" value="{{$k6->nakhir}}">

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nilai K-6 * 0.05</label>
                                    @if ($k6 == NULL)
                                    <input type="text" class="form-control" id="nilaik6" name="nk6" onclick="hitungk6();">

                                    @else
                                    <input type="text" class="form-control" id="nilaik6" name="nk6"value="{{$k6->n6}}" onclick="hitungk6();">

                                    @endif
                                </div>
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
            </form>
        </div>
    </section>
    <!-- Basic Card types section end -->
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
    // k-3
    function hitungk4(){
            let x="Selesai"
            let y="Tidak Selesai"
            var dlk = document.getElementById('ajark4').value;
            var nilai= document.getElementById('nilaik4').value;
            var akhir = document.getElementById('nilai_akhirk4').value;
            
            if(dlk == x ){
                document.getElementById('nilai_akhirk4').value = 4;
            }else if(dlk == y ){
                document.getElementById('nilai_akhirk4').value = 0;
            }

            var hasil = parseFloat(akhir) * 0.05;
            document.getElementById('nilaik4').value = hasil;
            
    }
    
    function hitungk5(){
            var dlk = document.getElementById('totalk5').value;
            var tdk = document.getElementById('totalratak5').value;
            var total = document.getElementById('nilaik5').value;
            var totalk5 = parseInt(dlk) / parseInt(tdk);
            document.getElementById('nilaik5').value = totalk5;

            if(totalk5 >=100 ){
                document.getElementById('nilaik5').value = 4 }
            else if(totalk5 <90 && totalk5 >=78 ){
                document.getElementById('nilaik5').value = 3 }
            else if(totalk5 <77 && totalk5 >=52){
                document.getElementById('nilaik5').value = 2 }
            else if(totalk5 <51 && totalk5 >=26){
                document.getElementById('nilaik5').value = 1 }
            else if(totalk5 < 25 ){
                document.getElementById('nilaik5').value = 0 }
            
            var hasil = parseFloat(total) * 0.05;
            document.getElementById('nilai_akhirk5').value = hasil;
    }
    //k5
    
    //k6
    function hitungk6(){
            let x="Selesai"
            let y="Tidak Selesai"
            var dlk = document.getElementById('ajark6').value;
            var nilai= document.getElementById('nilaik6').value;
            var akhir = document.getElementById('nilai_akhirk6').value;
            
            if(dlk == x ){
                document.getElementById('nilai_akhirk6').value = 4;
            }else if(dlk == y ){
                document.getElementById('nilai_akhirk6').value = 0;
            }

            var hasil = parseFloat(akhir) * 0.05;
            document.getElementById('nilaik6').value = hasil;
            
    }
    
    function hari(){
        let date1 = document.getElementById("penyerahank2").value;
        let date2 = document.getElementById("tanggalpenyerahank2").value;
        var nilai = document.getElementById('nilaik2').value;
        let dates1 = new Date(date1);
        let dates2 = new Date(date2);
// hitung perbedaan waktu dari dua tanggal
        var Difference_In_Time = dates2.getTime() - dates1.getTime();

// hitung jml hari antara dua tanggal
        var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

// tampilkan jml akhir hari (hasil)
        let string = "Jumlah total hari di antara tanggal  <br>"
            + date1 + "<br> dan <br>"
            + date2 + " adalah: <br> "
            + Difference_In_Days;
        if (Difference_In_Days >= 10)
        {
            document.getElementById("nilaik2").value=0;
        }else if(Difference_In_Days < 10 && Difference_In_Days >= 5){
            document.getElementById("nilaik2").value=1;
        }else if(Difference_In_Days < 5 && Difference_In_Days >= 0){
            document.getElementById("nilaik2").value=2;
        }else if(Difference_In_Days < 0){
            document.getElementById("nilaik2").value=4;
        }
        document.getElementById("pembulatank2").value=Math.abs(Difference_In_Days);

        var total = parseFloat(nilai)*0.05;
        document.getElementById("nilai_akhirk2").value=total;

        }



    function haritiga(){
        let date1 = document.getElementById("tanggalk3").value;
        let date2 = document.getElementById("tanggaluploadk3").value;
        var nilai = document.getElementById('nilaik3').value;
        let dates1 = new Date(date1);
        let dates2 = new Date(date2);
// hitung perbedaan waktu dari dua tanggal
        var Difference_In_Time = dates2.getTime() - dates1.getTime();

// hitung jml hari antara dua tanggal
        var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

// tampilkan jml akhir hari (hasil)
        let string = "Jumlah total hari di antara tanggal  <br>"
            + date1 + "<br> dan <br>"
            + date2 + " adalah: <br> "
            + Difference_In_Days;
        if (Difference_In_Days >= 10)
        {
            document.getElementById("nilaik3").value=0;
        }else if(Difference_In_Days < 10 && Difference_In_Days >= 5){
            document.getElementById("nilaik3").value=1;
        }else if(Difference_In_Days < 5 && Difference_In_Days >= 0){
            document.getElementById("nilaik3").value=2;
        }else if(Difference_In_Days < 0){
            document.getElementById("nilaik3").value=4;
        }
        document.getElementById("bulatk3").value=Math.abs(Difference_In_Days);

        var total = parseFloat(nilai)*0.05;
        document.getElementById("nilai_akhirk3").value=total;

        }
</script>

