@extends('public.master')

@section('content')

    <!-- Post / Question -->
    @include('public.question.partials.post')

    <!-- Answers -->
    @include('public.question.partials.answers')

@stop

@section('side-menu')

    @include('public.side-menus.question')

@stop