@extends('layouts.app')

@section('content')

<div class="home-body">
    <div class="profile-flex">
        <div class="profile-image">
           <img  src="https://images-na.ssl-images-amazon.com/images/I/61tqfa+xbWL._AC_UL254_SR254,254_.jpg" width="80px" height="60px">
        </div>

        <div class="profile-top">
         <div class="profile-top2">
            <p> {{ $user->username }} </p>
            <a href="/p/create">Add a new post</a>
        </div>
         <div class="profile-flex ">
            <div class=""> <strong> {{ $user->posts->count()}} </strong>posts</div>
            <div class="for-followers"><strong>23k</strong>followers</div>
            <div class="for-followers"><strong>213</strong>Following</div>
         </div>
         <div><h1 class="authname">{{ $user->profile->title }}</h1></div>
             <div>{{ $user->profile->description }}</div>
             <a href={{ $user->profile->url }}><div class=""><b>{{ $user->profile->url }}</b></div> </a>
        </div>
    </div>
    <hr class="for-home-hr">
    <div class="profile-flex">
        @foreach( $user->posts as $post )
            
        <div class="profile-posts">
            <a href="/p/{{ $post->id }}">
                <img src='/storage/{{ $post-> image }}' class="for-thr-image">
            </a>
        </div>    

        @endforeach
        
    </div>
</div>
@endsection
