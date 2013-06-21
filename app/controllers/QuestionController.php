<?php

class QuestionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array(
            'question' => Question::where('id', '=', $id)->first()
        );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $post    = Post::where('id', '=', $id)->first();
        $answer  = Post::where('id', '=', $post->accepted_answer_id)->first();
        $answers = Post::where('parent_id', '=', $post->id)->where('id', "<>", $post->accepted_answer_id)->get();
        $tags    = Tag::all();
        
        $data = array(
            'post'    => $post,
            'answer'  => $answer,
            'answers' => $answers,
            'tags'    => $tags
        );


        return View::make('public.question.index', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}