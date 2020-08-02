<?php

namespace App\Http\Controllers;

use App\Library;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class LibraryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $input_success = Session::get('input_success'); //Erfolgsmeldung refresh

        $libraries = Library::orderBy('created_at', 'DESC')->paginate(10);
        return view('library.index')->with(
            [
                'libraries' => $libraries,
                'input_success' => $input_success
            ]
        );

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
                'beschreibung' => 'required | min: 5',
                'bild' => 'mimes:jpeg,bmp,png,jpg,gif'

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

        if ($request->bild) {

            $this->saveImages($request->bild, $library->id);

        }



        return redirect('/library/' . $library->id)->with('input_hint', 'Bitte weise ein paar Tags zu');

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

        $input_success = Session::get('input_success'); //jeweils ein Refresh für die Seite zuvor
        $input_hint = Session::get('input_hint'); //jeweils ein Refresh für die Seite zuvor
        return view('library.show')->with(
            [
                'library' => $library,
                'input_success' => $input_success,
                'input_hint' => $input_hint,
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
                'beschreibung' => 'required | min: 5',
                'bild' => 'mimes:jpeg,bmp,png,jpg,gif'

            ]
        );

        if ($request->bild) {

            $this->saveImages($request->bild, $library->id);

        }



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

        return back()->with([
            'input_success' => 'Das Buch <b>'  .$old_titel. '</b> wurde gelöscht.'
        ]);
    }
    public function saveImages($picInput, $library_id)
    {
        $picture = Image::make($picInput);

        $width = $picture -> width();
        $height = $picture ->height();
        if ( $width > $height){
            Image::make($picInput)//Querformat Bild
            ->widen(1200)
                ->save(public_path(). '/img/library/' . $library_id . '_large.jpg');
            Image::make($picInput)
                ->widen(60)
                ->save(public_path(). '/img/library/' . $library_id . '_thumb.jpg');

        }else{
            Image::make($picInput)//Hochformat Bild
            ->widen(900)
                ->save(public_path(). '/img/library/' . $library_id . '_large.jpg');
            Image::make($picInput)
                ->widen(60)
                ->save(public_path(). '/img/library/' . $library_id . '_thumb.jpg');
        }

    }
}
