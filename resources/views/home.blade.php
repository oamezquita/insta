@extends('layouts.app')

@section('content')
<div class="container">
    @isset($posts)
        @foreach ($posts as $post)
        <div class="row">
        <div class="col-6 offset-md-3">
            <div class="d-flex">
                <div><a href="{{route('profile.index',$post->user->id)}}"><img src="{{ $post->user->profile->profileImage() }}" class="w-5 rounded-circle" style="height:30px"></a></div>
                <div class="pl-2 align-self-center"><h5 class="card-title">{{$post->user->username}}</h5></div>
            </div>
            
            <figure class="figure">
                <img src="/storage/{{$post->image}}" class="figure-img img-fluid rounded">
                <figcaption class="figure-caption"><strong>{{$post->user->username}} </strong>{{$post->caption}}</figcaption>
            </figure>
        </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>

    @endisset
</div>

    

@endsection
