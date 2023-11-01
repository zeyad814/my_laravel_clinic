@extends('front.layout.nav')
@section('title','contacts')
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">contact</li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        <form class="form" method="post" action="{{ route('submitContact') }}">
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
                    <label class="form-label required-label" for="phone">Phone</label>
                    <input type="tel" class="form-control" name="phone" required>
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="message">message</label>
                    <textarea class="form-control" name="message" required></textarea>
                    @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

</div>
</div>
@endsection
