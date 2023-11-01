@extends('front.layout.nav')
@section('title','register')
@section('content')

<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">login</li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        <form class="form" enctype="multipart/form-data" action="{{ route('submit_register') }}" method="post">
            @csrf
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" class="form-control" name="name" required>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">email</label>
                    <input type="email" class="form-control" name="email" required>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">password</label>
                    <input type="password" class="form-control" name="password" required>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="password">Image</label>
                    <input type="file" class="form-control" name="image" required>
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="password">Confirm password</label>
                    <input type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create account</button>
        </form>
        <div class="d-flex justify-content-center gap-2">
            <span>already have an account?</span><a class="link" href="{{ route('login') }}"> login</a>
        </div>
    </div>

</div>
</div>
@endsection
