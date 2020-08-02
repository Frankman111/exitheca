<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class LibraryTagController extends Controller
{
    public function getFilteredLibraries($tag_id){

        $tag = new Tag();
        $filter = $tag::findOrFail($tag_id);
        $libraries = $filter->filteredLibraries()->paginate(10);

        return view('library.index',[

            'libraries' => $libraries,
            'filter' => $filter


        ]
    );

    }
}
