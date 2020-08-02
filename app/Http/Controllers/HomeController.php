<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use Illuminate\Support\Facades\Session;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $input_success = Session::get('input_success'); //Erfolgsmeldung refresh

        $libraries = Library::select()

            ->where('user_id', auth()->id())//auth()->id() dient zur Erfassung der eigenen ID
            ->orderBy('updated_at', 'DESC')
            ->get();

        return view('home')->with(
            [
                'libraries' => $libraries,
                'input_success' => $input_success
            ]
        );
    }
}
