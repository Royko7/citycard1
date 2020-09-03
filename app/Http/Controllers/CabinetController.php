<?php

namespace App\Http\Controllers;

use App\Cabinet;
use App\HistoryTravel;
use App\User;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CabinetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $data_user = $request = User::all()->where('id',Auth::user()->id);
        $data_card = Card::all()->where('user_id',Auth::user()->id);

//        if (Auth::check()) {
//                return Auth::check()->where('id',Auth::user()->id);
//        }
        return view('cabinet.index', compact(
            'data_user',
            'data_card'
        ));
    }

    public function getPhone()
    {
        $phone = User::all('phone');
        return view('index', compact('phone'));
//        return $this->getPhone()->phone;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('cabinet/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required'
        ]);
        $user = auth()->user();
//        $data_card = auth()->user();
        $data_card = new Card([
            'number' => $request->get('number'),
//            'user_id' =>   Auth::id(),
        ]);
        $data_card['user_id']=$user->id;

//         $data_card= DB::table('cards')->insert(['number']);
        $data_card->save();
        return redirect('/cabinet')->with('success', 'Картку створено!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Cabinet $cabinet
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $data_card = Card::find($id);
        $user = auth()->user();
        $history = HistoryTravel::all();
        $data_card['user_id']=$user->id;

        return view('cabinet.show',compact('data_card','history'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Cabinet $cabinet
     * @return \Illuminate\Http\Response
     */
    public function edit(Cabinet $cabinet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Cabinet $cabinet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cabinet $cabinet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Cabinet $cabinet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cabinet $cabinet)
    {
        //
    }
}
