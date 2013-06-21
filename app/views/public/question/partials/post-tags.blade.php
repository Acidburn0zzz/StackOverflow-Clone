<!-- Post tags -->
<div class="row">
    <p>
        @foreach($post->postTags as $tag)
            <span><a href="/tag/{{ $tag->name }}" class="badge">{{ $tag->name }}</a></span>
        @endforeach
    </p>
</div>