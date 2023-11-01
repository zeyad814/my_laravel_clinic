@extends('admin.layout.auth')
@section('title', 'update')
@section('adminContent')
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">


                        <div class="pull-left">
                            <h4 class="text-blue h4">Update Doctor</h4>
                            <p class="mb-30">Fill this form to Updata doctor</p>
                        </div>
                        <div class="pull-right">
                        </div>

                    </div>
                    <form action="{{ route('submiteditdoctor', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">name</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" value="{{ $doctor->name }}" name="name">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" value="{{ $doctor->email }}" name="email" type="email">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="password"  type="password">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Bio</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="bio" value="{{ $doctor->bio }}" type="text">
                                @error('bio')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="image" value="{{ $doctor->image }}" type="file">
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Select Major</label>
                            <div class="col-sm-12 col-md-10">
                                <select class="custom-select col-12" name="major_id">
                                    @foreach ($majors as $major)
                                        <option {{ old('major_id') == $major->id ? 'selected' : '' }} value="{{ $major->id }}">
                                            {{ $major->title }}</option>
                                    @endforeach
                                </select>
                                @error('major_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Select Gender</label>
                            <div class="col-sm-12 col-md-10">
                                <select class="custom-select col-12" name="gender" value="{{ $doctor->gender }}">

                                    <option value="male">male</option>
                                    <option value="female">female</option>

                                </select>
                                @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label"></label>
                            <div class="col-sm-12 col-md-10">
                                <input class="btn btn-primary btn-lg" type="submit">
                            </div>
                        </div>

                    </form>
                    <div class="collapse collapse-box" id="basic-form1">
                        <div class="code-box">
                            <div class="clearfix">
                                <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"
                                    data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
                                <a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"
                                    data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                            </div>
                            <pre><code class="xml copy-pre" id="copy-pre">

                    </code></pre>
                        </div>
                    </div>
                </div>


                </code></pre>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-wrap pd-20 mb-20 card-box">
        DeskApp - Bootstrap 4 Admin Template By
        <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
    </div>
    </div>
    </div>

@endsection
