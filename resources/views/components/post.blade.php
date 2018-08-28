<div class=" navbar bg-primary col-md-4 mx-auto mb-4 p-0" >
  <div class="">
      <p class="card-title mt-2">
        <img class="rounded-circle col-md-2" style="max-width: 13%" src="{{$post->user->avatar}}"  alt="profile picture" >
        <strong> {{$post->user->username}} </strong>
      </p>
    <img class="card-img-bottom rounded-0" src={{$post->image}} alt="Card image cap"  >
    <div class="mx-3 mb-2">
      <a href="#" class="card-link"><i class="tim-icons icon-heart-2"></i></a>
      <a href="#" class="card-link"><i class="tim-icons icon-pencil"></i></a>
      <a href="#" class="card-link"><i class="tim-icons icon-tag"></i></a>
      <p class="card-text">{{$post->caption}}</p>
    </div>
  </div>
</div>