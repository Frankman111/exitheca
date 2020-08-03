<?php

namespace App\Http\Controllers;

use App\Library;
use Illuminate\Http\Request;
use App\Tag;
use Illuminate\Support\Facades\Gate;

class LibraryTagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }



    public function getFilteredLibraries($tag_id){

        $tag = new Tag();
        $filter = $tag::findOrFail($tag_id);
        $filteredlibraries = $filter->filteredLibraries()->paginate(10);

        return view('library.filteredByTag')->with(
        [
            'libraries' => $filteredlibraries,
            'tag' => $filter
        ]
    );

    }

    public function attachTag($library_id, $tag_id){

        $library = Library::find($library_id);

        if (Gate::denies('connect_libraryTag', $library)){
            abort(403, 'Das Buch gehört dir nicht');
        }

        $tag = Tag::find($tag_id);
        $library -> tags()->attach($tag_id);

        return back()->with('input_success', 'Der Tag <b>'.$tag->name. '</b> wurde hinzugefügt');

    }

    public function detachTag($library_id, $tag_id){

        $library = Library::find($library_id);

        if (Gate::denies('connect_libraryTag', $library)){
            abort(403, 'Das Buch gehört dir nicht');
        }

        $tag = Tag::find($tag_id);
        $library -> tags()->detach($tag_id);

        return back()->with('input_success', 'Der Tag <b>'.$tag->name. '</b> wurde entfernt');

    }


}
