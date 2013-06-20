@extends('public.master')

@section('content')
    <div class="row">
        <div class="col col-lg-9">
            @include('public.questions.partials.latest')
        </div>
        <div class="col col-lg-3">
            @include('public.questions.partials.side-menu')
        </div>
    </div>
@stop