<!-- Post / Question body cell -->
<div class="body-cell">
    <div class="row">
        <div class="col col-sm-12">
            <p>{{ $post->body }}</p>                    
        </div>                
    </div>

    @include('public.question.partials.post-tags')

    @include('public.question.partials.post-actions')

    @include('public.question.partials.post-comments')    

</div>