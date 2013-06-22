<!-- Post actions -->
<div class="row">
    <div class="col col-sm-3">
        <p>
            <span>
                <a href="/question/{{ $post->id }}/share">share</a>&nbsp;| 
                <a href="/question/{{ $post->id }}/edit">edit</a>&nbsp;|
                <a href="/question/{{ $post->id }}/flag">flag</a>&nbsp;
            </span>
        </p>
        
    </div>
    <div class="col col-sm-3">
        
    </div>
    <div class="col col-sm-3">
        @if($post->last_editor_user_id != "")
        <div class="well user-info-box">
            <span>
                <a href="/user/{{ $post->user_id }}">
                    {{ $post->owner_display_name }}
                </a> - {{ $post->user->reputation }}
            </span>
        </div>
        @endif
    </div>
    <div class="col col-sm-3">
        <div class="well user-info-box">
            <p>
                <?php $askedDate = Carbon::instance($post->created_at); ?>
                asked {{ $askedDate->toFormattedDateString() }}
            </p>
            <span>
                <a href="/user/{{ $post->user_id }}">
                    {{ $post->owner_display_name }}
                </a> - {{ $post->user->reputation }}
            </span>
        </div>
    </div>
</div>