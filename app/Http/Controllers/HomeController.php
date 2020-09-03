<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use App\User;

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
//        $cards = Card::all();
        $cards = Card::all();

        return view('home', compact('cards'));
    }

    public function nubm()
    {
        $num = Card::find(1);
        dd($num->id);
        return view('home',compact('num'));
    }

}
