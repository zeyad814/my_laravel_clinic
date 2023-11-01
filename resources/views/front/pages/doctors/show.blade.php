@extends('front.layout.nav')
@section('title','show doctor')
@section('content')

<div class="container">
    <nav
      style="--bs-breadcrumb-divider: '>'"
      aria-label="breadcrumb"
      class="fw-bold my-4 h4"
        >
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item">
          <a class="text-decoration-none" href="{{ route('front.pages.home') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-decoration-none" href="{{ route('front.pages.doctors') }}">doctors</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          doctor name
        </li>
      </ol>
    </nav>
    <div class="d-flex flex-column gap-3 details-card doctor-details">


        <div class="details d-flex gap-2 align-items-center">
            <img
            src="../{{ $doctor['image'] }} "
            alt="doctor"
            class="img-fluid rounded-circle"
            height="150"
            width="150"
            />
            <div class="details-info d-flex flex-column gap-3">
                <h4 class="card-title fw-bold">{{ $doctor['name'] }}</h4>
                <h6 class="card-title fw-bold">
                    {{ $doctor['bio'] }}
                </h6>
            </div>

      </div>
      <hr />
      <form class="form" action="{{ route('submitBooking') }}" method="post">
        @csrf
        <div class="form-items">
          <div class="mb-3">
            <label class="form-label required-label" for="name">Name</label>
            <input type="text" class="form-control" name="name" required />
            @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
          </div>
          <div class="mb-3">
            <label class="form-label required-label" for="phone"
              >Phone</label>
            <input type="tel" class="form-control" name="phone" required />
            <input type="hidden" name="doctor_id" value="{{ $doctor['id'] }}" >
            @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
          </div>
          <div class="mb-3">
            <label class="form-label required-label" for="email"
              >Email</label
            >
            <input type="email" class="form-control" name="email" required />
            @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
          </div>
        </div>
        <button type="submit" class="btn btn-primary">
          Confirm Booking
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
