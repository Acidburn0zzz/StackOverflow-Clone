@extends('public.master')

@section('content')
    <div class="row">
        <div class="col col-lg-9">
            @include('public.tables.questions')
        </div>
        <div class="col col-lg-3">
            @include('public.questions.partials.side-menu')
        </div>
    </div>
@stop