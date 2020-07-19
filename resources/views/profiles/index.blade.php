@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-3 p-5">
             <img alt="Foto del perfil de freecodecamp" class="rounded-circle" data-testid="user-avatar" draggable="false" src="https://instagram.fbne5-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fbne5-1.fna.fbcdn.net&amp;_nc_ohc=R4RWsNsSv3wAX-1fh4h&amp;oh=2a8bc27d674d7d61cd2e7129f9675274&amp;oe=5F3AF0E7">
        </div>
 
        <div class="col-9 pt-5">
          <div class="d-flex justify-content-between align-items-baseline" ><h1>{{$user->username}}</h1>
                <a href='/p/create'>Add New </a>
          </div>
          <div class="d-flex"> 
              <div class="pr-5"><strong> {{$user->posts->count()}}</strong> Post</div>
              <div class="pr-5"><strong> 23k</strong> followers</div>
              <div class="pr-5"><strong> 212</strong> following</div>
                  
          </div>
          <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
          <div>{{$user->profile->description}}</div>
          <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
              
          </div>

        </div>


        <div class="row pt-5">
          @foreach($user->posts as $post)
            <div class="col-4 pb4">
              <a href="/p/{{$post->id}}">
                <img class="w-100" src="/storage/{{$post->image}}">
              </a>
            </div>
          @endforeach
        </div>

</div>

@endsection


