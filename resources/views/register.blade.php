@extends('layout.home')
@section('title', 'Register')

@section('content')
<div class="container mx-auto px-2">
<h1 class="my-4 text-center">Register new Account</h1>
<div class="row">
    <div class="col-6 mx-auto">

        <form method="POST" action="/register">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="first_name" name="first_name" value="{{old('first_name')}}" required class="form-control" />
                  <label class="form-label" for="form3Example1">First name</label>
                  @include('partials.error-message', ['field' => 'first_name'])
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form3Example2" name="last_name" value="{{old('last_name')}}" required class="form-control" />
                  <label class="form-label" for="form3Example2">Last name</label>
                  @include('partials.error-message', ['field' => 'last_name'])
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" name="email" value="{{old('email')}}" required class="form-control" />
              <label class="form-label" for="form3Example3">Email address</label>

              @include('partials.error-message', ['field' => 'email'])
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" name="password" value="{{old('password')}}" required class="form-control" />
              <label class="form-label" for="form3Example4">Password</label>
              @include('partials.error-message', ['field' => 'password'])
            </div>

            <!-- Password confirmation -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" name="password_confirmation" value="{{old('password_confirmation')}}" required class="form-control" />
              <label class="form-label" for="form3Example4">Confirm Password</label>
              @include('partials.error-message', ['field' => 'password_confirmation'])
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" name="agreed" value="1" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
                Subscribe to our newsletter
              </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>or sign up with:</p>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>

              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>



    </div>
</div>

</div>

@endsection
