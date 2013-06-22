<hr>
<h4>Know someone who can answer? Share a <a href="#">link</a> to this question via <a href="#">email</a>, <a href="#">Google+</a>, <a href="#">Twitter</a>, or <a href="#">Facebook</a>.</h4>
<!-- Answer the question form -->
{{ Form::open(array('url' => '/answer', 'method' => 'POST')) }}

    <fieldset>
        
        <legend>Your Answer</legend>

        {{ Form::hidden('post_id', $post->id) }}

        {{ Form::textarea('answer', '', array('required' => 'required')) }}

        {{ Form::submit('Post your answer', array('class' => 'btn btn-primary')) }}
    
    </fieldset>

{{ Form::close() }}