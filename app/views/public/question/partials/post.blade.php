<!-- Post / Question -->
<h1>{{ $post->title }}</h1>

<hr>

<div class="row">

    <div class="col col-sm-12">

        @include('public.question.partials.post-vote-cell')

        @include('public.question.partials.post-body-cell')

    </div>

</div>