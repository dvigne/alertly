@extends('layouts.app')

@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

@section('content')
<div id="auth-container"></div>
<div class="container-fluid h-100">
  <div class="row h-100 align-items-center justify-content-center">
    <div class="col-3">
      <div class="card">
        <h5 class="card-header">Login</h5>
        <div class="card-body">
          <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="email">Email:</label>
              <input class="form-control" id="email" type="email" name="email" placeholder="Email Address">
              @error('email')
              <span style="display: unset;" class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            </div>
            @enderror
            <div class="form-group">
              <label for="password">Password: </label>
              <input class="form-control" type="password" name="password" placeholder="Password">
              @error('password')
              <span style="display: unset;" class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
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
