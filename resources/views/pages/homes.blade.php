@extends('layouts.main')
@section('dashboard','active')
@section('content')
@if (Auth::user()->role == 'admin')
<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Dosen</h6>
                                    <h6 class="font-extrabold mb-0">{{$total_dosen}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Admin</h6>
                                    <h6 class="font-extrabold mb-0">{{$total_admin}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Dekan</h6>
                                    <h6 class="font-extrabold mb-0">{{$total_dekan}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Kaprodi</h6>
                                    <h6 class="font-extrabold mb-0">{{$total_kaprodi}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Dashboard</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-hover" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Rata-Rata</th>
                                            <th>Keterangan</th>
                                            <th>Rangking</th>
                                            <th>Detail</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $a)
                                        <tr>
                                            <td>{{$a->user->name}}</td>
                                            <td>{{$a->user->email}}</td>
                                            <td>{{$a->rata}}</td>
                                            <td>{{$a->keterangan}}</td>
                                            <td>{{$a->rank}}</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <a href="/pdff/{{$a->user_id}}" target="_blank" class="btn btn-primary btn-sm"> PDF</a>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-md2" >
                            <img src="{{asset('temp/assets/images/faces/1.jpg')}}" alt="Avatar">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">{{Auth::user()->name}}</h5>
                            <h6 class="text-muted mb-0">{{Auth::user()->email}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Ranking Dosen</h4>
                </div>
                <div class="card-content pb-4"> 
                    @foreach ($master as $l)
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-md2" >
                                <img src="{{asset('temp/assets/images/faces/1.jpg')}}" alt="Avatar">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">{{$l->user->name}}</h5>
                                <h6 class="text-muted mb-0">{{$l->rank}}</h6>
                            </div>
                        </div>
                    @endforeach
                    <div class="px-4">
                        <a  class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Detail</a>
                    </div>
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-header">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div> --}}
        </div>
    </section>
</div>
@elseif (Auth::user()->role == 'dekan')
<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="page-content">
    <section>
        <div class="row">
        </div>
        <div class="row">
            <div class="col-9">
                <div class="col-12 col-lg-12">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Dekan</h6>
                                        <h6 class="font-extrabold mb-0">{{$total_dekan}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Dashboard</h4>                            
                            <table width="100%">
                                <tr>
                                    <td align="right">
                                        <select>
                                            <button>
                                                <option value="pilihSemester">Pilih Semester</option>
                                                <option value="semester1">Semester 1</option>
                                                <option value="semester2">Semester 2</option>
                                                <option value="semester3">Semester 3</option>
                                            </button>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-body">
                            <img src="{{asset('temp/assets/images/GraphicChart.jpg')}}" 
                            alt="Grafik" style="max-width:100%; height:auto;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-md2" >
                                <img src="{{asset('temp/assets/images/faces/1.jpg')}}" alt="Avatar">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{Auth::user()->name}}</h5>
                                <h6 class="text-muted mb-0">{{Auth::user()->email}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Ranking Dosen</h4>
                    </div>
                    <div class="card-content pb-4">
                        @foreach ($master as $l)
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-md2" >
                                    <img src="{{asset('temp/assets/images/faces/1.jpg')}}" alt="Avatar">
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1">{{$l->user->name}}</h5>
                                    <h6 class="text-muted mb-0">{{$l->rank}}</h6>
                                </div>
                            </div>
                        @endforeach
                        <div class="px-4">
                            <a  class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Detail</a>
                        </div>
                    </div>
                </div>
        </div>
        </div>
        
             {{-- <div class="card">
                <div class="card-header">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div> --}}
        </div>
    </section>
</div>
@elseif (Auth::user()->role == 'dosen')
<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Dosen</h6>
                                    <h6 class="font-extrabold mb-0">{{$total_dosen}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Dashboard</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-hover" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Rata-Rata</th>
                                            <th>Keterangan</th>
                                            <th>Rangking</th>
                                            <th>Detail</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $a)
                                        <tr>
                                            <td>{{$a->user->name}}</td>
                                            <td>{{$a->user->email}}</td>
                                            <td>{{$a->rata}}</td>
                                            <td>{{$a->keterangan}}</td>
                                            <td>{{$a->rank}}</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <a href="/pdff/{{$a->user_id}}" target="_blank" class="btn btn-primary btn-sm"> PDF</a>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-md2" >
                            <img src="{{asset('temp/assets/images/faces/1.jpg')}}" alt="Avatar">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">{{Auth::user()->name}}</h5>
                            <h6 class="text-muted mb-0">{{Auth::user()->email}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Ranking Dosen</h4>
                </div>
                <div class="card-content pb-4"> 
                    @foreach ($master as $l)
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-md2" >
                                <img src="{{asset('temp/assets/images/faces/1.jpg')}}" alt="Avatar">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">{{$l->user->name}}</h5>
                                <h6 class="text-muted mb-0">{{$l->rank}}</h6>
                            </div>
                        </div>
                    @endforeach
                    <div class="px-4">
                        <a  class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Detail</a>
                    </div>
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-header">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div> --}}
        </div>
    </section>
</div>
@elseif (Auth::user()->role == 'kaprodi')
<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="page-content">
    <section>
        <div class="row">
        </div>
        <div class="row">
            <div class="col-9">
                <div class="col-12 col-lg-12">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Kaprodi</h6>
                                        <h6 class="font-extrabold mb-0">{{$total_kaprodi}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Dashboard</h4>
                            <table width="100%">
                                <tr>
                                    <td align="right">
                                        <select>
                                            <button>
                                                <option value="pilihSemester">Pilih Semester</option>
                                                <option value="semester1">Semester 1</option>
                                                <option value="semester2">Semester 2</option>
                                                <option value="semester3">Semester 3</option>
                                            </button>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-body">
                            <img src="{{asset('temp/assets/images/GraphicChart.jpg')}}" 
                            alt="Grafik" style="max-width:100%; height:auto;">
                        </div>                      
                    </div>
                </div>
                {{-- <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Dashboard</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-hover" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>NIPD</th>
                                            <th>NIPP</th>
                                            <th>Nilai IKD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $a)
                                        <tr>
                                            <td>{{$a->user->name}}</td>
                                            
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <a href="/pdf/{{$a->user_id}}" target="_blank" class="btn btn-primary btn-sm">Download PDF</a>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-md2" >
                                <img src="{{asset('temp/assets/images/faces/1.jpg')}}" alt="Avatar">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{Auth::user()->name}}</h5>
                                <h6 class="text-muted mb-0">{{Auth::user()->email}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Ranking Dosen</h4>
                    </div>
                    <div class="card-content pb-4">
                        @foreach ($master as $l)
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-md2" >
                                    <img src="{{asset('temp/assets/images/faces/1.jpg')}}" alt="Avatar">
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1">{{$l->user->name}}</h5>
                                    <h6 class="text-muted mb-0">{{$l->rank}}</h6>
                                </div>
                            </div>
                        @endforeach
                        <div class="px-4">
                            <a  class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Detail</a>
                        </div>
                    </div>
                </div>
        </div>
        </div>
        
             {{-- <div class="card">
                <div class="card-header">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div> --}}
        </div>
    </section>
</div>
@endif


@endsection
@section('script')

<script>
    $(document).ready(function() {
        $('#table1').DataTable();
    } );
</script>
@endsection
