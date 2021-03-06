<div class="card  col-md-4 mx-auto mb-4 p-0" >
  {{-- title bar --}}
  <div class="navbar bg-primary my-0 py-0" style="height: 40px !important; min-height: 40px !important;" >
    <p>
      @if ($post->user->avatar)
        <img 
          class="rounded-circle col-md-2 p-0" 
          style="max-width: 7%" 
          src="{{$post->user->avatar}}"  
          alt="profile picture" >
        @else
          <img 
            class="rounded-circle col-md-2 p-0" 
            style="max-width: 7%" 
            src="{{asset('images/user-icon.png') }}"  
            alt="profile picture" >
          
      @endif
      <a class="btn btn-default btn-link ml-0 pl-1" href={{'@'}}{{ $post->user->username }}>
        {{$post->user->username}}
      </a>
    </p>
  </div>

  {{-- image --}}
  <img class="card-img-bottom rounded-0" src={{$post->image}} alt="Card image cap"  >

  {{-- Buttons --}}
    <div class="mx-3 mt-2">
      <a href="#" class="card-link"><i class="tim-icons icon-heart-2"></i></a>
      <a href="#" class="card-link"><i class="tim-icons icon-pencil"></i></a>
      <a href="#" class="card-link"><i class="tim-icons icon-tag"></i></a>
    </div>
    <div class="card-footer">
      <p class="card-text"> <strong>{{$post->user->username}}</strong> {{$post->caption}}</p>
    </div>
    
</div>