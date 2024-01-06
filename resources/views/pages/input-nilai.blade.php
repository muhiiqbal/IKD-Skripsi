@extends('layouts.main')
@section('inputnilai','active')
@section('content')
<div class="page-heading">
    <div class="page-title">
        {{-- <a href="/" class="btn btn-primary mb-3">Kembali</a> --}}
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{Str::title('input nilai')}}</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{Str::title('input nilai')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            {{-- <th>Phone</th> --}}
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dosen as $a)
                        <tr>
                            <td>{{$a->name}}</td>
                            <td>{{$a->email}}</td>
                            {{-- <td>{{$a->phone}}</td> --}}
                            <td>
                                <div class="btn-group mb-1">
                                    <a href="/input-nilai/{{$a->id}}/pilih-matkul" class="btn btn-primary btn-sm">Pilih Matkul</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>

@endsection
