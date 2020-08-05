<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Library;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $input_success = Session::get('input_success');


        $libraries = Library::select()
            ->where('user_id', auth()->id())
            ->orderBy('verliehen', 'DESC')
            ->get();



        return view('home')->with(
            [
                'libraries' => $libraries,
                'input_success' => $input_success,

            ]
        );
    }

}
