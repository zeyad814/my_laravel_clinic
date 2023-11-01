@extends('admin.layout.auth')
@section('title','Booking')
@section('adminContent')

<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="card-box pb-10">
                <div class="h5 pd-20 mb-0">BOOKING</div>
                <table class="data-table table nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus">Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Doctor</th>
                            <th class="datatable-nosort">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($books as $book )
                        <tr>
                            <td class="table-plus">
                                <div class="name-avatar d-flex align-items-center">

                                    <div class="txt">
                                        <div class="weight-600">{{ $book->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $book->email }}</td>
                            <td>{{ $book->phone   }}</td>
                            <td>
                                <span
                                    class="badge badge-pill"
                                    data-bgcolor="#e7ebf5"
                                    data-color="#265ed7"

                                    >
                                    {{ $book->doctor->name }}

                                </span>
                            </td>
                            <td>
                                <form  method="POST" action="{{ route('deletebook',['id'=>$book->id]) }}">
                                    @csrf
                                    @method('DELETE')
                        <button type="submit"  class="btn btn-primary">confirm</button>
                    </form>
                    </div>
                            </td>
                        </tr>

                        @empty
                        <h1>we dont have books in our clinic</h1>
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
