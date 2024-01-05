@extends('layouts.main')
@section('dashboard','active')
@section('content')
<div class="col-12">
    <a href="/" class="btn btn-primary mb-3">Kembali</a>    
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
                            <td>{{$a->user->nipd}}</td>
                            <td>{{$a->user->nipp}}</td>
                            <td>{{$a->rata}}</td>
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
@endsection