@extends('auth.layout.template')

@section('title', 'Perpus | Register')

@section('content')
<div class="mt-7 w-25 center border rounded px-3 py-3 mx-auto">
  <h1 class="text-center">Register</h1>
  @if(session('error'))
      <div class="alert alert-success">
          {{ session('error') }}
      </div>
  @endif
  <form action={{ route('auth.register') }} method="POST">
    @csrf
      <!-- Name input -->
      <div class="mb-4">
        <label class="form-label" for="name">Name</label>
        <input type="text" name="nama" class="form-control" />
        @if($errors->has('name'))
          <p class="text-danger">{{ $errors->first('name') }}</p>
        @endif
      </div>

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
        <button type="submit" name="submit" class="btn btn-primary">Register</button>
      </div>
    
      <!-- Register buttons -->
      <div class="text-center">
        <p>Have Account? <a href={{ route('auth.loginIndex') }}>Login</a></p>
      </div>
    </form>
</div>
@endsection