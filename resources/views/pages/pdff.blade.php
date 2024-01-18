
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail Nilai</title>
    <style>
        .table-bordered td, .table-bordered th {
            border: 1px solid #000000;
        }
        /* DivTable.com */
.divTable{
	display: table;
	width: 100%;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
}
.divTableCell, .divTableHead {
	border: 1px solid #999999;
	display: table-cell;
	padding: 3px 10px;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}
    </style>
  </head>
  <body>
    <h4 style="text-align: right">FM-UDINUS-BM-09-05/R0</h4>
    <center>
        <h1 style="margin-top: -2">INDEKS KINERJA DOSEN</h1>
    </center>
    <table>
        <tr>
            <td>NIPD</td>
            <td>:</td>
            <td>{{ $user->nipd }}</td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td>{{$user->name}}</td>
        </tr>
    </table>
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center">
                
                <th rowspan="2">
                    Mata Kuliah
                </th>
                <th rowspan="2">
                    SKS
                </th>
                <th rowspan="2">
                    KELAS
                </th>
                <th colspan="15" style="text-align: center">
                    INDEKS KINERJA DOSEN 
                </th>
            </tr>
            <tr>
                <th style="text-align: center">K1</th>
                <th style="text-align: center">K2</th>
                <th style="text-align: center">K3</th>
                <th style="text-align: center">K4</th>
                <th style="text-align: center">K5</th>
                <th style="text-align: center">K6</th>
                <th style="text-align: center">K7</th>
                <th style="text-align: center">K8</th>
                <th style="text-align: center">K9</th>
                <th style="text-align: center">K10</th>
                <th style="text-align: center">K11</th>
                <th style="text-align: center">K12</th>
                <th style="text-align: center">K13</th>
                <th style="text-align: center">K14</th>
                <th style="text-align: center">Rata-Rata IKD</th>
                {{-- <th style="text-align: center">KETERANGAN</th> --}}
                {{-- <th style="text-align: center">RANGKING</th> --}}
            </tr>
        </thead>
        <tbody style="text-align: center">
        @php
            $no = 1;
        @endphp
        @foreach ($matkul as $n)
        <tr>
            <td>{{$n->matkul->nama_matkul}}</td>
            <td>{{$n->matkul->sks}}</td>
            <td>{{$n->kelas->nama_kelas}}</td>
            @if ($no == 1)
            <td>{{$nilai->n1}}</td>
            <td>{{$nilai->n2}}</td>
            <td>{{$nilai->n3}}</td>
            <td>{{$nilai->n4}}</td>
            <td>{{$nilai->n5}}</td>
            <td>{{$nilai->n6}}</td>
            <td>{{$nilai->n7}}</td>
            <td>{{$nilai->n8}}</td>
            <td>{{$nilai->n9}}</td>
            <td>{{$nilai->n10}}</td>
            <td>{{$nilai->n11}}</td>
            <td>{{$nilai->n12}}</td>
            <td>{{$nilai->n13}}</td>
            <td>{{$nilai->n14}}</td>
            <td>{{$nilai->rata}}</td>
            {{-- <td>{{$nilai->keterangan}}</td> --}}
            {{-- <td>{{$nilai->rank}}</td> --}}

            @else
            {{-- <td></td> --}}
            {{-- <td></td> --}}
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
                
            @endif
        </tr>
        @php
            $no++;
        @endphp
        @endforeach
        </tbody>
    </table>
    <table style="height: 200px; margin-left: auto; margin-right: auto;" border="1px" width="600"><caption>&nbsp;</caption>
        <tbody>
        <tr style="height: 22.875px;">
        <td style="height: 22.875px;">Diperisa Oleh</td>
        <td style="width: 89.5312px; height: 22.875px;">Tgl:</td>
        <td style="width: 149.74px; height: 22.875px; border-color: #000000;"border="2px"  colspan="5">Rekomendasi Ketua Program Studi</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 2px; height: 22px;">Program Studi</td>
        <td style="width: 40px; height: 22px;">&nbsp;</td>
        <td style="width: 149.74px; height: 22px;" colspan="5" rowspan="13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">&nbsp;</td>
        <td style="width: 89.5312px; height: 22px;">&nbsp;</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">&nbsp;</td>
        <td style="width: 89.5312px; height: 22px;">&nbsp;</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">Dr guruh</td>
        <td style="width: 89.5312px; height: 22px;">&nbsp;</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">&nbsp;</td>
        <td style="width: 89.5312px; height: 22px;">&nbsp;</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">&nbsp;</td>
        <td style="width: 89.5312px; height: 22px;">&nbsp;</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">&nbsp;</td>
        <td style="width: 89.5312px; height: 22px;">&nbsp;</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">Diperiksa oleh</td>
        <td style="width: 89.5312px; height: 22px;">Tgl:</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">Dekan,</td>
        <td style="width: 89.5312px; height: 22px;">&nbsp;</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">&nbsp;</td>
        <td style="width: 89.5312px; height: 22px;">&nbsp;</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">&nbsp;</td>
        <td style="width: 89.5312px; height: 22px;">&nbsp;</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">SRI WINARNO, Ph.D</td>
        <td style="width: 89.5312px; height: 22px;">&nbsp;</td>
        </tr>
        <tr style="height: 22px;">
        <td style="width: 279.062px; height: 22px;">0686.11.1998.142</td>
        <td style="width: 89.5312px; height: 22px;">&nbsp;</td>
        </tr>
        </tbody>
        </table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
