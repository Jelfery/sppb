<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use View;
use Auth;
use App\User;
use App\Announcement;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ann = Announcement::find(1);

        $date = date("d-m-Y");
        $day = date("l");

        $user = User::with('hospital')->where('id', '=', Auth::user()->id)->first();
        $role = $user->roles()->first();
       
        return View::make('welcome', compact('date', 'day', 'user', 'role', 'ann'));
    }

    public function store(Request $request){
         
        // $request->description;
        $ann = Announcement::find(1);

        $ann->description = $request->announce;

        $ann->save();

        return redirect('/');
    }
}
