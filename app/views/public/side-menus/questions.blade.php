<!-- Latest questions side menu -->
<h2>Tags</h2>
@foreach($tags as $t)
<p>
    <a href="/tag/{{ $t->id }}">
        <span class="badge">{{ $t->name }}</span>
    </a>
</p>
@endforeach