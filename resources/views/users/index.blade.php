@extends('layouts.app')

@section('content')

  {{-- Title name --}}
  <h1>{{ $user->name }}</h1>
  
  <div class="text-center justify-content-center">


    {{-- Button toolbar --}}
    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-secondary active"><i class="tim-icons icon-components"></i></button>
      <button type="button" class="btn btn-secondary"><i class="tim-icons icon-bullet-list-67"></i></button>
    </div>

    {{-- posts --}}
    {{-- @foreach ($userPosts as $post)
        @include('posts.post')
    @endforeach --}}

    {{-- Grid Posts --}}
    <div class="col-md-12 row pd-0 mx-0 ">
      @foreach ($userPosts as $post)
          @include('posts.gridPost')
      @endforeach
    </div>

    {{-- page links --}}
    @if (count($userPosts))
      <div class="row">
        <div class="mt-2 mx-auto ">
            {{ $userPosts->links() }}
        </div>
      </div>
    @endif

  </div>

@endsection