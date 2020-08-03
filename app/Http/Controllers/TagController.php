<?php

namespace App\Http\Controllers;


use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('tag.index')->with('tags', $tags);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required | min: 3', //style required, min 3 signs
                'style' => 'required'

            ]
        );


        $tag = new Tag(
            [
                'name' => $request['name'],
                'style' => $request['style']
            ]
        );
        $tag->save();

        return $this->index()->with([
            'input_success' => 'Der Tag <b>'  .$tag->name. '</b> wurde angelegt.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */

    public function edit(Tag $tag)
    {
        return view('tag.edit')->with('tag', $tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate(
            [
                'name' => 'required | min: 3', //name required, min 3 signs
                'style' => 'required'

            ]
        );

        $tag->update([

            'name' => $request->name,
            'style' => $request->style

        ]);

        return $this->index()->with([
            'input_success' => 'Der Tag <b>'  .$request->name. '</b> wurde bearbeitet.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {

        $old_name = $tag->name; // save the old name
        $tag->delete();

        return $this->index()->with([
            'input_success' => 'Der Tag <b>'  .$old_name. '</b> wurde gelöscht.'
        ]);
    }
}
