<!-- Accepted answer -->
@if(!empty($answer))
<div class="row">

    <div class="col col-sm-12">
        <div class="vote-cell">
            <p class="text-center">
                <i class="icon icon-chevron-up icon-2x vote-arrow"></i>
            </p>
            <p class="text-center">
                {{ $answer->votes->count() }}
            </p>
            <p class="text-center">
                <i class="icon icon-chevron-down icon-2x vote-arrow"></i>
            </p>
            <p class="text-center">
                <i class="icon icon-ok icon-2x accept-tick"></i>
            </p>
        </div>
        <div class="body-cell">
            <p>{{ $answer->body }}</p>
        </div>
    </div>
</div>
@endif