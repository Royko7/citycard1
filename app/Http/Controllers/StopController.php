<?php

namespace App\Http\Controllers;

use App\Models\Stop;
use Illuminate\Http\Request;

class StopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $stop = Stop::all();
        return view('stop.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $stop = Stop::all();
        return view('stop.create',compact('stop'));
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
            'stops_name' => 'required',
            'course_id' => 'required'
        ]);
        $stop = new Stop([
            'stops_name' => $request->get('stops_name'),
            'course_id' => $request->get('course_id')
        ]);
        $stop->save();
        return redirect('stop/')->with('success','Зупинку додано!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Stop $stop
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Stop $stop)
    {
        return view('stop.show',compact('stop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Stop $stop
     * @return \Illuminate\Http\Response
     */
    public function edit(Stop $stop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Stop $stop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stop $stop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Stop $stop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stop $stop)
    {
        //
    }
}
