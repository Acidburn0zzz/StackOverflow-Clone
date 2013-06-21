<!-- Answers Title and Count-->
<div class="row">
    <div class="col col-sm-12">
        <h4>
            {{ $post->answer_count . " " }}
            @if($post->answer_count > 1)
                Answers
            @else
                Answer
            @endif
        </h4>
    </div>
</div>

<!-- Answers -->
@include('public.question.partials.accepted-answer')

@include('public.question.partials.other-answers')
