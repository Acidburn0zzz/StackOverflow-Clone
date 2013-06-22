<!-- Latest Questions -->
<div class="row">
    <div class="col col-lg-12">
        <h2>Latest Questions</h2>
        <?php echo $questions->appends(Input::all())->links(); ?>
        <table class="table table-hover">
        @foreach($questions as $q)
            <tr>
                <td>
                    <p class="text-center">{{ $q->votes->count() }}</p>
                    <p class="text-center">Vote</p>
                </td>
                <td>
                    <p class="text-center">{{ $q->answer_count }}</p>
                    <p class="text-center">Answer</p>
                </td>
                <td>
                    <p class="text-center">{{ $q->view_count }}</p>
                    <p class="text-center">Views</p>
                </td>
                <td>
                    <p>
                        <a href="/question/{{ $q->id }}" >{{ $q->title }}</a>
                    </p>
                    
                </td>
            </tr>
        @endforeach
        </table>
        {{ $questions->append(Input::all()->links() }}
    </div>

</div>