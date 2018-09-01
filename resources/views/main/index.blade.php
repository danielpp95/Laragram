@extends('layouts.index')

@section('content')
<div class="container">
    <div class="card text-center justify-content-center">
        <div class="card-body">
          <h1 class="card-title">Laragram</h1>
          <h2 class="card-text">
            <small class="text-muted">A dark-theme instagram made with Laravel.</small>
          </h2>

          @include('auth.registerForm')

        </div>
      </div>
      
      <div class="card text-center justify-content-center">
        <div>
          <p class="mb-3 mt-3" >Have an account?  &nbsp; <a href="/login">Login</a> </p>
        </div>
      </div>

</div>
  
@endsection