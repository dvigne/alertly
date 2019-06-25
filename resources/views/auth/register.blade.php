@extends('layouts.app')

@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

@section('content')
<div id="auth-container"></div>
<div class="container-fluid h-100">
  <div class="row h-100 align-items-center justify-content-center">
    <div class="col-4">
      <div class="card">
        <h5 class="card-header">Register</h5>
        <div class="card-body">
          <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="first">First:</label>
              <input class="form-control" id="first" type="first" name="first" placeholder="First Name">
              @error('first')
                  <span style="display: unset;" class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="last">Last:</label>
              <input class="form-control" id="last" type="last" name="last" placeholder="Last Name">
              @error('last')
                  <span style="display: unset;" class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input class="form-control" id="email" type="email" name="email" placeholder="Email Address">
              @error('email')
                  <span style="display: unset;" class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="password">Password: </label>
              <input class="form-control" type="password" name="password" placeholder="Password">
              @error('password')
                  <span style="display: unset;" class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="password_confirmation">Confirm Password: </label>
              <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
              @error('password_confirmation')
                  <span style="display: unset;" class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js" integrity="sha256-+u54FaX9J+k40eAcg5K2YzICSQjrEYBI9gju5nE3HfY=" crossorigin="anonymous"></script>
<script src="{{ asset('js/auth.js') }}" charset="utf-8"></script>
@endpush
