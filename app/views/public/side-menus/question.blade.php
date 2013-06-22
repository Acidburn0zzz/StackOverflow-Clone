<!-- Question side menu -->
<h2>Question info</h2>
<ul>
    <li>
        <p>
            <b>Asked: </b>
            <?php
                $date = Carbon::instance($post->created_at);
                echo $date->diffForHumans(Carbon::now());
            ?>
        </p>
    </li>
    <li>
        <p>
            <b>Views:</b>
            {{ $post->view_count }}
        </p>
    </li>
    <li>
        <p>
            <b>Active: </b>
            <?php
                $date = Carbon::instance($post->updated_at);
                echo $date->diffForHumans(Carbon::now());
            ?>
        </p>
    </li>
</ul>

<h2>Tags</h2>
@foreach($tags as $t)
<p>
    <a href="/tag/{{ $t->id }}">
        <span class="badge">{{ $t->name }}</span>
    </a>
</p>
@endforeach