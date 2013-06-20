@extends('public.master')

@section('content')

    <!-- View a Post -->
    <h1>{{ $post->title }}</h1>

    <hr>

    <div class="row">
        
        <!-- Votes & Favorite -->
        <div class="col col-lg-1 col-sm-1">
            <p class="text-center">
                <i class="icon icon-chevron-up icon-2x"></i>
            </p>
            <p class="text-center">{{ $post->votes->count() }}</p>
            <p class="text-center">
                <i class="icon icon-chevron-down icon-2x"></i>
            </p>
            <p class="text-center">
                <i class="icon icon-star-empty icon-2x"></i>
            </p>
        </div>

        <!-- Post Body -->
        <div class="col col-lg-11 col-sm-11">
            <p>{{ $post->body }}</p>
            <p>
                @foreach($post->postTags as $tag)
                    {{ $tag }}
                @endforeach
            </p>
        </div>

    </div>

@stop

@section('side-menu')

    @include('public.side-menus.questions')

@stop