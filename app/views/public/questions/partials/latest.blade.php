<!-- Latest Questions -->
<div class="row">
    <div class="col col-lg-12">
        <h2>Latest Questions</h2>
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
                    <p>
                        <span class="badge"><a href="#">Tag</a></span>&nbsp;<span class="badge"><a href="#">Tags</a></span>
                        <span class="pull-right">&nbsp;&nbsp;{{ $q->user->reputation }}</span>
                        <span class="pull-right"><a href="/user/{{ $q->user_id }}">{{ $q->user->display_name }}</a></span>
                    </p>
                </td>
            </tr>
        @endforeach
        </table>
    </div>
</div>