<?php

class QuestionsController extends \BaseController {

	/**
	 * Display a listing of latest questions.
	 *
	 * @return Response
	 */
	public function index()
	{
        $sort = array('name' => '', 'direction' => '');

        switch(Input::get('sort'))
        {
            case 'newest':
                $sort['name'] = 'created_at';
                $sort['direction'] = 'desc';
                break;
            case 'oldest':
                $sort['name'] = 'created_at';
                $sort['direction'] = 'asc';
            case 'most viewed':
                $sort['name'] = 'view_count';
                $sort['direction'] = 'desc';
                break;
            default:
                $sort['name'] = 'created_at';
                $sort['direction'] = 'desc';
                break;
        }

        $questions = Post::orderBy($sort['name'], $sort['direction'])->where('post_type_id', '=', '1')->paginate(1);
        $tags = Tag::all();

		$data = array(
            'questions' => $questions,
            'tags'      => $tags
        );

        // return var_dump($posts);

        return View::make('public.questions.index', $data);
	}

}