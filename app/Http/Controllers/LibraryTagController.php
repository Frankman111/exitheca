<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class LibraryTagController extends Controller
{
    public function getFilteredLibraries($tag_id){

        $tag = new Tag();
        $filteredLibraries = $tag::findOrFail($tag_id)->filteredLibraries()->paginate(10);

        return view('library.filteredByTag')->with(
            [
                'libraries' => $filteredLibraries
            ]
    );

    }
}
