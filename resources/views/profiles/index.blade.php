@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"><img src="https://instagram.fbog4-1.fna.fbcdn.net/v/t51.2885-19/11313596_862907453798678_769514955_a.jpg?_nc_ht=instagram.fbog4-1.fna.fbcdn.net&_nc_ohc=c4vFb1EhnFgAX8Iv4pR&oh=043384c6579f52028237a7734cc9fb2e&oe=5EE1D77E" alt="profile-pic" class="rounded-circle"></div>
        <div class="col-9 pt flex">
            <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{$user->username}}</h1>
            @can('update',$user->profile)
            <a class="btn btn-primary" href="{{ route('posts.create') }}" role="button">New post</a>
            @endcan
            </div>
            
            <div class="d-flex">
                <div class="pr-5"><strong>{{sizeOf($user->posts)}}</strong> Posts</div>
                <div class="pr-5"><strong>22</strong> Followers</div>
                <div class="pr-5"><strong>42</strong> Following</div>
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
                <a href="/p/{{$post->id}}">    
                    <img src="/storage/{{$post['image']}}" class="w-100">
                </a>
            </div>
            
        @endforeach
        
        
    </div>
</div>
@endsection