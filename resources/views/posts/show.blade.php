@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="row no-gutters">
                  <div class="col-8">
                    <img class="w-100" src="/storage/{{$post->image}}" alt="Image">
                  </div>
                  <div class="col-4">
                    <div class="card-body">
                    <div class="col-12 d-flex pb-5">
                        <div><a href="{{route('profile.index',$post->user->id)}}"><img src="{{ $post->user->profile->profileImage() }}" class="w-50 rounded-circle"></a></div>
                        <div class="pl-2 align-self-center"><h5 class="card-title">{{$post->user->username}}</h5></div>
                        <div class="pl-5 pr-1 align-self-center"><h5 class="card-title"><a href="#" class="btn btn-primary">Follow</a></h5></div>
                    </div>
                    <div class="col-12"><p class="card-text"><strong>Caption: </strong>{{$post->caption}}</p></div>
                      
                    </div>
                  </div>
                </div>
              </div>    
        </div>
        
    </div>
@endsection