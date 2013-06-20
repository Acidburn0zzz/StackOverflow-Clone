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

		$data = array(
            'questions' => Post::orderBy($sort['name'], $sort['direction'])->get(),
            'tags'      => Tag::all()
        );

        return View::make('public.questions.index', $data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Get questions by $id = ('newest', 'oldest', 'mostviewed')
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