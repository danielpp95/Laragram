@extends('layouts.app')

@section('content')

@foreach ($posts as $post)
    @include('components.post')
@endforeach

@if (count($posts))
<div class="row">
    <div class="mt-2 mx-auto ">
        {{ $posts->links() }}
    </div>
</div>
@endif

@endsection