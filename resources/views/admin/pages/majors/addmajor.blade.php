@extends('admin.layout.auth')
@section('title', 'Add Majors')
@section('adminContent')
<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">

                </div>
                <form action="{{ route('submitmajor') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">MajorTitle</label>
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
                                name="title"
                            />
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="file"
                                name="image"
                                placeholder="Johnny Brown"
                            />
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary col-sm-12 col-md-2 " id="">

                </form>
                <div class="collapse collapse-box" id="basic-form1">
                    <div class="code-box">
                        <div class="clearfix">
                            <a
                                href="javascript:;"
                                class="btn btn-primary btn-sm code-copy pull-left"
                                data-clipboard-target="#copy-pre"
                                ><i class="fa fa-clipboard"></i> Copy Code</a
                            >
                            <a
                                href="#basic-form1"
                                class="btn btn-primary btn-sm pull-right"
                                rel="content-y"
                                data-toggle="collapse"
                                role="button"
                                ><i class="fa fa-eye-slash"></i> Hide Code</a
                            >
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
            <a href="https://github.com/dropways" target="_blank"
                >Ankit Hingarajiya</a
            >
        </div>
    </div>
</div>

@endsection
