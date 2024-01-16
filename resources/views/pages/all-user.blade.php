@extends('layouts.main')
@section('headuser', 'active')
@section('uluser', 'active')

{{-- @if (request('role') == 'dosen')
    @section('alldosen','active')
@endif

@if (request('role') == 'admin')
    @section('alladmin','active')
@endif --}}

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{Str::title('all ' . request('role'))}}</h3>
                <h3></h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{Str::title('all ' . request('role'))}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="/all-user/add?role=dosen" class="btn btn-success rounded-pill"><i class="bi bi-plus-lg"></i> {{Str::title('Add ' . request('role'))}}</a>
            </div>
            <div class="card-body">
                <table class="table table-hover" id="table1">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Name</th>
                            {{-- <th>Phone</th> --}}
                            <th>Role</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $a)
                        <tr>
                            <td>{{$a->email}}</td>
                            <td>{{$a->name}}</td>
                            {{-- <td>{{$a->phone}}</td> --}}
                            <td>{{Str::title($a->role)}}</td>
                            <td>
                                <div class="btn-group mb-1">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            @if (request('role') == 'dosen')
                                            <a class="dropdown-item" href="/all-user/{{$a->id}}/input-matkul?role=dosen"><i class="fa fa-edit"></i> Input Matkul</a>
                                            {{-- <a class="dropdown-item" href="#delconfirm" data-bs-toggle="modal" data-bs-name="{{$a->name}}" data-bs-id="{{$a->id}}"><i class="fa fa-trash"></i> Delete</a> --}}
                                            @endif
                                        </div>
                                    </div>
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

<!-- Vertically Centered modal Modal -->
<div class="modal fade" id="delconfirm" tabindex="-1" role="dialog"
aria-labelledby="delconfirmTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="delconfirmTitle">Confirmation</h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
            <p id="isidelconfirm">
                Croissant jelly-o halvah chocolate sesame snaps. Brownie caramels candy
                canes chocolate cake
                marshmallow icing lollipop I love. Gummies macaroon donut caramels
                biscuit topping danish.
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary"
                data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Close</span>
            </button>
            <form action="/user/destroy" method="post">
                @csrf
                <input type="hidden" id="iddelconfirm" name="id">
                <button type="submit" class="btn btn-primary ml-1">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    var delconfirm = document.getElementById('delconfirm')
    delconfirm.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var name = button.getAttribute('data-bs-name')
    var id = button.getAttribute('data-bs-id')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalBodyInput = delconfirm.querySelector('.modal-body #isidelconfirm')
    var iddel = delconfirm.querySelector('.modal-footer #iddelconfirm')

    modalBodyInput.innerHTML = 'Apakah anda yakin ingin menghapus user <strong>' + name + '?'
    iddel.value = id
    })
</script>
@endsection
