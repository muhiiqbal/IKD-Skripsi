@extends('layouts.main')
@section('headuser', 'active')
@section('uluser', 'active')
@if (request('role') == 'dosen')
    @section('alldosen','active')
@endif

@if (request('role') == 'admin')
    @section('alladmin','active')
@endif
@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>{{Str::title('add matkul ' . request('role'))}}</h3>
            <h5>{{$dosen->name}}</h5>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/all-user?role={{request('role')}}">{{Str::title('all ' . request('role'))}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{Str::title('add ' . request('role'))}}</li>
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
                        <form class="form form-vertical" action="/all-user/{{$dosen->id}}/input-matkul" method="POST">
                            @csrf
                            <input type="hidden" value="{{request('role')}}" name="role">
                            <div class="form-body">
                                <div class="row fieldGroup">
                                    <div class="col-6">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Matkul</label>
                                            <div class="position-relative">
                                                <div class="form-group">
                                                    <select class="choices form-select" name="matkul[]">
                                                        @foreach ($matkul as $m)
                                                            <option value="{{$m->id}}">{{$m->nama_matkul}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Kelas</label>
                                            <div class="position-relative">
                                                <div class="form-group">
                                                    <select class="choices form-select" name="kelas[]">
                                                        @foreach ($kelas as $k)
                                                            <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <button type="submit" class="btn btn-primary me-1 mb-1 w-100">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <div class="fieldGroupCopy row" style="display: none;">
                            <div class="col-md-6">
                                <div class="form-group has-icon-left">
                                    <label for="password-id-icon">Matkul</label>
                                    <div class="position-relative">
                                        <div class="form-group">
                                            <select class="form-select" name="matkul[]">
                                                @foreach ($matkul as $mm)
                                                    <option value="{{$mm->id}}">{{$mm->nama_matkul}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-icon-left">
                                    <label for="password-id-icon">Kelas</label>
                                    <div class="position-relative">
                                        <div class="form-group">
                                            <select class="form-select" name="kelas[]">
                                                @foreach ($kelas as $kk)
                                                    <option value="{{$kk->id}}">{{$kk->nama_kelas}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="javascript:void(0)" class="btn btn-danger remove "><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic multiple Column Form section end -->
@endsection
@section('script')
    <script>
        $(document).ready(function(){
        // membatasi jumlah inputan
        var maxGroup = 20;

        //melakukan proses multiple input
        $(".addMore").click(function(){
            if($('body').find('.fieldGroup').length < maxGroup){
                var fieldHTML = '<div class="row fieldGroup mt-3">'+$(".fieldGroupCopy").html()+'</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            }else{
                alert('Maximum '+maxGroup+' groups are allowed.');
            }
        });

        //remove fields group
        $("body").on("click",".remove",function(){
            $(this).parents(".fieldGroup").remove();
        });
    });
    </script>
@endsection
