<!-- Latest questions side menu -->
<div class="row">
    <div class="col col-lg-12">
        <h2>Tags</h2>
        @foreach($tags as $t)
        <p>
            <a href="/tag/{{ $t->id }}">
                <span class="badge">{{ $t->name }}</span>
            </a>
        </p>
        @endforeach
        {{ $tags->links() }}
    </div>
</div>