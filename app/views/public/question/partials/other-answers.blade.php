<!-- Other answers -->
@foreach($answers as $a)
<hr>
<div class="row">

    <div class="col col-sm-12">

        <div class="vote-cell">
            <p class="text-center">
                <i class="icon icon-chevron-up icon-2x vote-arrow"></i>
            </p>
            <p class="text-center">
                {{ $a->votes->count() }}
            </p>
            <p class="text-center">
                <i class="icon icon-chevron-down icon-2x vote-arrow"></i>
            </p>
        </div>
        <div class="body-cell">
            <p>{{ $a->body }}</p>
        </div>

    </div>
</div>
@endforeach