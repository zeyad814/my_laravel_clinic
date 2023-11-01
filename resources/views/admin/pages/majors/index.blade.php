@extends('admin.layout.auth')
@section('title','majors')
@section('adminContent')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>MAJORS</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    MAJORS
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <a class="col-12 btn btn-primary btn-lg" href="{{ route('admin.pages.majors.addmajor') }}">ADD MAJOR</a>
            <div class="row clearfix">
                @forelse ($majors as  $major )
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card card-box">
                        <img
                            class="card-img-top"
                            src="{{ asset('front/assets/images') }}/{{ $major->image }}"
                            alt="Card image cap"
                            width="163"
                            height="219"
                        />
                        <div class="card-body">
                            <h5 class="card-title weight-500">{{ $major->title }}</h5>
                            <p class="card-text">
                            </p>

                        </div>
                    </div>
                </div>
                @empty
                <h2>we dont have majors</h2>
                @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
