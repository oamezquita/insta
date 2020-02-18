@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 text-center"><img src="{{$user->profile->profileImage()}}" class="rounded-circle w-50"></div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center">
                <div class="h3">{{$user->username}}</div>
            
            <follow-button user-id="{{$user->id}}" follows="{{$follows?true:false}}"></follow-button>
            </div>
            
            @can('update',$user->profile)
            <a class="btn btn-primary" href="{{ route('posts.create') }}" role="button">New post</a>
            @endcan
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{sizeOf($user->posts)}}</strong> Posts</div>
            <div class="pr-5"><strong>{{$user->profile->followers->count()}}</strong> Followers</div>
                <div class="pr-5"><strong>{{$user->following->count()}}</strong> Following</div>
            </div>
            @can('update',$user->profile)
            <div class="pt-4"><a href="{{ route('profile.edit',$user->id) }}" role="button">Edit Profile</a></div>
            @endcan
            
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="{{$user->profile->url}}">{{$user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="{{route('posts.show',$post->id)}}">    
                    <img src="/storage/{{$post['image']}}" class="w-100">
                </a>
            </div>
            
        @endforeach
        
        
    </div>
</div>
@endsection