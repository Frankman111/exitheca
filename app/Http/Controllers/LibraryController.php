<?php

namespace App\Http\Controllers;

use App\Library;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class LibraryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libraries = Library::orderBy('created_at', 'DESC')->paginate(10);
        return view('library.index')->with('libraries', $libraries);
        //Carbon::
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('library.create');
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
                'titel' => 'required | min: 3', //titel required, min 3 signs
                'beschreibung' => 'required | min: 5'

            ]
        );


       $library = new Library(
            [
                'titel' => $request['titel'],
                'beschreibung' => $request['beschreibung'],
                'user_id' => auth()->id()
            ]
        );
       $library->save();


        return $this->index()->with([
            'input_success' => 'Das Buch <b>'  .$library->titel. '</b> wurde angelegt.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library)
    {
        $allTags = Tag::all(); //alle Tags holen
        $usedTags = $library->tags;
        $openTags = $allTags ->diff($usedTags);

        $input_success = Session::get('input_success');
        return view('library.show')->with(
            [
                'library' => $library,
                'input_success' => $input_success,
                'openTags' => $openTags
            ]

            );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library)
    {
        return view('library.edit')->with('library', $library);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library)
    {
        $request->validate(
            [
                'titel' => 'required | min: 3', //titel required, min 3 signs
                'beschreibung' => 'required | min: 5'

            ]
        );

        $library->update([

            'titel' => $request->titel,
            'beschreibung' => $request->beschreibung

        ]);

        return $this->index()->with([
            'input_success' => 'Das Buch <b>'  .$request->titel. '</b> wurde bearbeitet.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library)
    {

        $old_titel = $library->titel; // save the old name
        $library->delete();

        return $this->index()->with([
            'input_success' => 'Das Buch <b>'  .$old_titel. '</b> wurde gelöscht.'
        ]);
    }
}
