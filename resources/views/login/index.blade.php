@extends('front.layout.nav')
@section('title','login')
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">login</li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 account-form  mx-auto mt-5">
        <form class="form" method="post" action="{{ route('submitLogin') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label required-label" for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="password">password</label>
                <input type="password" class="form-control" name="password" id="password" required>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="d-flex justify-content-center gap-2 flex-column flex-lg-row flex-md-row flex-sm-column">
            <span>don't have an account?</span><a class="link" href="{{ route('register') }}">create account</a>
        </div>
    </div>

</div>
</div>
@endsection
