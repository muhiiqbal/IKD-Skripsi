
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    
    <title>Document</title>
</head>
<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:10px 20px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-0lax{text-align:left;vertical-align:top}
    
    /* rekomendasi */

    /* img */
    img {
    float: left;
    width:  100px;
    height: 100px;
    margin-left: 20vh;
    object-fit: cover;
}   
    /* kepala */
    .kepala{
        text-align: center;
        justify-content: center;
        margin-top:20px ;
    
}
    .kepaladua{
        text-align: center;
        justify-content: center;
        margin-top:20px ;
        padding-right:20px; 
    
}
.kepaladua h6{
        font-size: 15px;
        padding-top: 50px;
        font-weight: bold;
        margin-top: 10px;
    
}
    .kepala h1{
        font-size: 25px;
        padding-top: 50px;
        font-weight: bold;
        margin-top: 10px;
    }
    .konten{
        justify-content: center;
        align-items: center;
        text-align: center;
        padding-top: 2%;
        padding-left: 16%;

    }
    .tg{
        margin-top: 20px;
        justify-content: center;
        align-items: center;
    }
    .biodata{
        text-align: left;
        justify-content: center;
        align-items: left;
        padding-left:20%; 
        margin-top: 30px;
    }
</style>
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="kepala">
                <img src="{{asset('template/assets/img/logo.png')}}" alt="profile_image" class="img border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col">
            <div class="kepala">
                <h1>INDEKS KINERJA DOSEN</h1>
            </div>
          </div>
          <div class="col">
            <div class="kepaladua">
                <h6>FM-UDINUS-BM-09-05/R0</h6>
            </div>
          </div>
        </div>
      </div>
<section>
<div class="container">
  <div class="biodata">
    
    <h6>NIDN: {{Auth::user()->email}}</h6>
    <h6>Nama:  {{Auth::user()->name}}</h6>
    {{-- @foreach ($master as $b )
    @endforeach --}}
  </div>
    <div class="konten">
    <table class="tg">
      <thead>
        <tr>
        <th class="tg-c3ow" rowspan="2">Mata Kuliah</th>
        <th class="tg-0pky" rowspan="2">SKS</th>
        <th class="tg-0pky" rowspan="2">Kelas</th>
        <th class="tg-c3ow" colspan="14">INDEKS KINERJA DOSEN</th>
        <th class="tg-0lax">Rata<br>IKD<br></th>
      </tr>
      <tr>
        <th class="tg-0pky">K1</th>
        <th class="tg-0pky">K2</th>
        <th class="tg-0pky">K3</th>
        <th class="tg-0pky">K4</th>
        <th class="tg-0pky">K5</th>
        <th class="tg-0pky">K6</th>
        <th class="tg-0pky">K7</th>
        <th class="tg-0pky">K8</th>
        <th class="tg-0pky">K9</th>
        <th class="tg-0pky">K10</th>
        <th class="tg-0pky">K11</th>
        <th class="tg-0pky">K12</th>
        <th class="tg-0pky">K13<br></th>
        <th class="tg-0pky">K14</th>
        <th class="tg-0lax"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="tg-0lax">DATA MINING</td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
        </td>
        <td class="tg-0lax">
          
        </td>
        <td class="tg-0lax">
          
        </td>
        <td class="tg-0lax">
          
        </td>
        <td class="tg-0lax">
          
        </td>
        <td class="tg-0lax">
          
        </td>
        <td class="tg-0lax">
          
        </td>
        <td class="tg-0lax">
          
        </td>
        <td class="tg-0lax">
          
        </td>
        <td class="tg-0lax">
          
        </td>
        <td class="tg-0lax">
          
        </td>
        <td class="tg-0lax">
          
        </td>
        <td class="tg-0lax">
          
        </td>
        {{-- @php
                  $n1 = $a->n1;
                  $n2 = $a->n2;
                  $n3 = $a->n3;
                  $n4 = $a->n4;
                  $n5 = $a->n5;
                  $n6 = $a->n6;
                  $n7 = $a->n7;
                  $n8 = $a->n8;
                  $n9 = $a->n9;
                  $n10 = $a->n10;
                  $n11 = $a->n11;
                  $n12 = $a->n12;
                  $n13 = $a->n13;
                  $n14 = $a->n14;
                  $total = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10+$n11+$n12+$n13+$n14;
                  $rata = $total/14;
                  @endphp --}}
        <td class="tg-0lax"></td>
        {{-- @foreach ($master as $a) --}}
      </tr>
      {{-- @endforeach --}}
  </tbody>
  </table>
</div>
</div>
</section>
<section>
  <div class="container">
    <div class="konten">
      <table cellspacing="0" border="0">
        <colgroup width="247"></colgroup>
        <colgroup width="64"></colgroup>
        <colgroup width="238"></colgroup>
        <colgroup span="5" width="64"></colgroup>
        <tr>
          <td style="border-top: 1px solid #000000; border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000">Diperiksa Oleh</font></td>
          <td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000">Tgl:</font></td>
          <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" valign=bottom><font face="Times New Roman" color="#000000">Rekomendasi Ketua Program Studi</font></td>
          </tr>
        <tr>
          <td style="border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000">Program Studi</font></td>
          <td style="border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          <td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=6 rowspan=11 align="center" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          </tr>
        <tr>
          <td style="border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          <td style="border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          </tr>
        <tr>
          <td style="border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          <td style="border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          </tr>
        <tr>
          <td style="border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000">Dr. Muljono S.Si, M.Kom</font></td>
          <td style="border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          </tr>
        <tr>
          <td style="border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          <td style="border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          </tr>
        <tr>
          <td style="border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000">Disahkan Oleh</font></td>
          <td style="border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000">Tgl:</font></td>
          </tr>
        <tr>
          <td style="border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000">Dekan,</font></td>
          <td style="border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          </tr>
        <tr>
          <td style="border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          <td style="border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          </tr>
        <tr>
          <td style="border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          <td style="border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          </tr>
        <tr>
          <td style="border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000">Dr. Guruh Fajar Shidik, S.Kom, M.Cs</font></td>
          <td style="border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          </tr>
        <tr>
          <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="20" align="left" valign=bottom><font face="Times New Roman" color="#000000">0686.11.1992.017</font></td>
          <td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Times New Roman" color="#000000"><br></font></td>
          </tr>
      </table>
    </div>
  </div>
</section>
<script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</script>

{{-- <div class="container">
    <div class="kepala">
        <img src="{{asset('template/assets/img/logo.png')}}" alt="profile_image" class="img border-radius-lg shadow-sm">
        <h1>INDEKS KINERJA DOSEN</h1>
    </div>
    
</div> --}}
{{-- <div class="container">
    <div class="row">
      <div class="col">
        <div class="kepala">
            <img src="{{asset('template/assets/img/logo.png')}}" alt="profile_image" class="img border-radius-lg shadow-sm">
        </div>
      </div>
      <div class="col">
        <h1>INDEKS KINERJA DOSEN</h1>
      </div>
      <div class="col">
        <h1>INDEKS KINERJA DOSEN</h1>
      </div>
    </div>
  </div> --}}
  
    