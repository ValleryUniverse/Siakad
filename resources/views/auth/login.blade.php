@extends('auth.layout.template')

@section('title', 'Perpus | Login')

@section('content')
<div class="mt-7 w-25 center border rounded px-3 py-3 mx-auto">
  <h1 class="text-center">Login</h1>
  <form action={{ route('auth.login') }} method="POST">
    @csrf
      <!-- Email input -->
      <div class="mb-4">
        <label class="form-label" for="email">Email address</label>
        <input type="email" name="email" class="form-control" />
        @if($errors->has('email'))
          <p class="text-danger">{{ $errors->first('email') }}</p>
        @endif
      </div>
    
      <!-- Password input -->
      <div class="mb-4">
        <label class="form-label" for="password">Password</label>
        <input type="password" name="password" class="form-control"/>
        @if($errors->has('password'))
          <p class="text-danger">{{ $errors->first('password') }}</p>
        @endif
      </div>
    
      <!-- Submit button -->
      <div class="mb-3 d-grid">
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
      </div>

      @if($errors->has('loginError'))
        <div class="alert alert-danger">
          {{ $errors->first('loginError') }}
        </div>
      @endif
      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href={{ route('auth.regisIndex') }}>Register</a></p>
      </div>
    </form>
</div>
@endsection