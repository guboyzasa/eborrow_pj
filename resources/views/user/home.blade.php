{{-- @extends('layouts.auth.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.home.app')

@section('title', 'Main page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                        <h1>
                                ยินดีต้อนรับเข้าสู่ ระบบบริหารจัดการวัสดุ และครุภัณฑ์ สาขาวิชาวิศวกรรมคอมพิวเตอร์
                        </h1>
                        <img src="/img/wallpaper.png" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>
@endsection
