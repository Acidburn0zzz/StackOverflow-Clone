<!-- Post comments -->
<div class="row">
    @foreach($post->comments as $com)
    <hr class="hr-comment">
    <div class="vote-cell comment-vote-cell">
        <p class="text-center comment-up-vote">
            {{ $com->score }}
            <i class="icon icon-hand-up"></i>
        </p>
        <p class="text-center">
            <i class="icon icon-flag comment-flag-icon"></i>
        </p>
    </div>
    <div class="body-cell">
        <p class="comment-body">{{ $com->body }}</p>
    </div>
    @endforeach

</div>
<hr class="hr-comment-final">
<div class="row">
    <p>
        <a href="#">add comment</a>
    </p>
    <p>
        <a href="#">start bounty</a>
    </p>
</div>
