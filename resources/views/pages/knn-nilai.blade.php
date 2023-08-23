@extends('layouts.main')
@section('knnnilai','active')
@section('ulnilai', 'active')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{Str::title('knn nilai')}}</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{Str::title('knn nilai')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="mx-auto px-1 mb-4">
                    {{-- <a class="btn btn-primary" id="" tabindex="-1" href="/knn-hitung" role="button">Hitung</a> --}}
                    <form action="/knn/count" method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary">Hitung</button>
                    </form>
                </div>
                <table class="table table-hover display responsive " id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Rata</th>
                            <th>Result</th>
                            <th>Accuracy</th>
                            <th>Recall</th>
                            <th>Precision</th>
                            <th>Details</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($master as $a)
                        <tr>

                            <td>{{$a->user->name}}</td>
                            <td>{{$a->user->email}}</td>
                            <td>{{$a->rata}}</td>
                            <td>{{$a->keterangan}}</td>
                            <td>{{$a->result}}</td>
                            <td>{{$a->accuracy}}</td>
                            <td>{{$a->precision}}</td>
                            <td>{{$a->recall}}</td>
                            <td>
                                <div class="btn-group mb-1">
                                    <a href="/input-nilai/{{$a->id}}/pilih-matkul" class="btn btn-primary btn-sm">Kelola Nilai</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="container">
                <form action="{{route('knn-import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-outline">
                    <span class="input-group-text mx-2" id="basic-addon1"><i class="fas fa-search"></i></span>
                    <input class="form-control input-group input-group-outline px-12" name="file" type="file" id="formFile">
                </div>
                <div class="mx-auto px-1">
                    <button class="btn btn-primary mt-2" type="submit">Import CSV</button>
                </div>
                <table class="table table-hover display responsive nowrap" id="table">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>K1</th>
                            <th>K2</th>
                            <th>K3</th>
                            <th>K4</th>
                            <th>K5</th>
                            <th>K6</th>
                            <th>K7</th>
                            <th>K8</th>
                            <th>K9</th>
                            <th>K10</th>
                            <th>K11</th>
                            <th>K12</th>
                            <th>K13</th>
                            <th>K14</th>
                            <th>Keterangan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($csv as $b)
                        <tr>
                            <td>{{$b->nama}}</td>
                            <td>{{$b->k_satu}}</td>
                            <td>{{$b->k_dua}}</td>
                            <td>{{$b->k_tiga}}</td>
                            <td>{{$b->k_empat}}</td>
                            <td>{{$b->k_lima}}</td>
                            <td>{{$b->k_enam}}</td>
                            <td>{{$b->k_tuju}}</td>
                            <td>{{$b->k_delapan}}</td>
                            <td>{{$b->k_sembilan}}</td>
                            <td>{{$b->k_sepuluh}}</td>
                            <td>{{$b->k_sebelas}}</td>
                            <td>{{$b->k_duabelas}}</td>
                            <td>{{$b->k_tigabelas}}</td>
                            <td>{{$b->k_empatbelas}}</td>
                            <td>{{$b->keterangan}}</td>
                            {{-- <td>
                                <div class="btn-group mb-1">
                                    <a href="/input-nilai/{{$b->id}}/pilih-matkul" class="btn btn-primary btn-sm">Download</a>
                                </div>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#table1').DataTable(
        );
    });
</script>


@endsection
