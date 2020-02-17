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
                        <div><img src="https://instagram.fbog4-1.fna.fbcdn.net/v/t51.2885-19/11313596_862907453798678_769514955_a.jpg?_nc_ht=instagram.fbog4-1.fna.fbcdn.net&_nc_ohc=c4vFb1EhnFgAX8Iv4pR&oh=043384c6579f52028237a7734cc9fb2e&oe=5EE1D77E" alt="profile-pic" class="rounded-circle" style="width: 50px"></div>
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