@extends('layout.home')
@section('title', 'Login')

@section('content')
<div class="container mx-auto px-2">
<h1 class="my-4 text-center">Enter Your credentials</h1>
<div class="row">
    <div class="col-6 mx-auto">
<form method="POST" action="/login">
    @csrf
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" id="form1Example1" name="email" value="{{old('email')}}" class="form-control" />
      <label class="form-label" for="form1Example1">Email address</label>

      @include('partials.error-message', ['field' => 'email'])
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="form1Example2" name="password" class="form-control" />
      <label class="form-label" for="form1Example2">Password</label>

      @include('partials.error-message', ['field' => 'password'])
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="agreed" value="1" id="form1Example3" checked />
          <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
      </div>

      <div class="col">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
      </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block">Sign in</button>

    @if (isset($invalidCredentials) && $invalidCredentials == true)
    <div>
        <span class="text-dange">Invalid email or password!</span>
    </div>
    <br>
@endif
  </form>
</div>
</div>
</div>

@endsection
