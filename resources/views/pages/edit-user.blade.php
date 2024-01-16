@extends('layouts.main')
@section('headuser', 'active')
@section('uluser', 'active')
@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Edit User</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Users</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="/user/update" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="Your Name" id="first-name-icon" name="name" value="{{$user->name}}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Username</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="Username" id="first-name-icon" name="username" value="{{$user->email}}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Email</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Email"
                                                    id="email-id-icon" name="email" value="{{$user->emails}}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Phone</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Phone"
                                                    id="mobile-id-icon" name="phone" value="{{$user->phone}}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Password</label>
                                                <div class="position-relative">
                                                <input type="password" class="form-control" placeholder="Password"
                                                    id="password-id-icon" name="pass">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Role</label>
                                            <div class="position-relative">
                                                <div class="form-group">
                                                    <select class="choices form-select" name="role">
                                                        <option value="staff">Staff</option>
                                                        <option value="manajer">Manajer</option>
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic multiple Column Form section end -->
@endsection
