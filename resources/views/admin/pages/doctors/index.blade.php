@extends('admin.layout.auth')
@section('title', 'Doctors')
@section('adminContent')
<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="card-box pb-10">
                <a class="col-12 btn btn-primary btn-lg" href="{{ route('adddoctor') }}">ADD DOCTOR</a>
                <div class="h5 pd-20 mb-0">DOCTORS</div>
                <table class="data-table table nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus">Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Bio</th>
                            <th>Major</th>
                            <th class="datatable-nosort">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($doctors as $doctor )
                        <tr>
                            <td class="table-plus">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img
                                            src="{{ asset('front/assets/images') }}/{{ $doctor->image }}"
                                            class="border-radius-100 shadow"
                                            width="40"
                                            height="40"
                                            alt=""
                                        />
                                    </div>
                                    <div class="txt">
                                        <div class="weight-600">{{ $doctor->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $doctor->gender }}</td>
                            <td>{{ $doctor->email }}</td>
                            <td>{{ $doctor->bio }}</td>
                            <td>
                                <span
                                    class="badge badge-pill"
                                    data-bgcolor="#e7ebf5"
                                    data-color="#265ed7"

                                    >
                                    {{ $doctor->major->title }}

                                </span>
                            </td>
                            <td>
                                <div class="table-actions">
                                    <a href="{{ route('editdoctor',['id'=> $doctor->id]) }}" data-color="#265ed7"
                                        ><i class="icon-copy dw dw-edit2"></i
                                            ></a>
                                            <form action="{{ route('deletedoctor',['id'=>$doctor->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                    <button type="submit" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></button>
                                </form>
                                </div>
                            </td>
                        </tr>

                        @empty
                        <h1>we dont have doctors in our clinic</h1>
                        @endforelse
                    </tbody>
                </table>
            </div>

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
