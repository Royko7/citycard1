<?php

namespace App\Http\Controllers;

use App\Models\Routes;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $routes = Routes::all();
//        dd($routes);
        return view('routes.index', compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('routes.create');
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
            'city' => 'required',
            'ticket_type' => 'required',
            'transport_type' => 'required'
        ]);

        $routes = new Routes([
            'city' => $request->get('city'),
            'ticket_type' => $request->get('ticket_type'),
            'transport_type' => $request->get('transport_type')
        ]);
        $routes->save();
        return redirect('/routes')->with('success', 'Маршрут створено!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Routes $routes
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $routes = Routes::find($id);
        return view('routes.show',compact('routes'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Routes $routes
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $routes = Routes::find($id);

        return view('routes.edit',compact('routes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Routes $routes
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'city'=>'required',
            'ticket_type'=>'required',
            'transport_type'=>'required'
        ]);
        $routes = Routes::find($id);
        $routes->city =  $request->get('city');
        $routes->ticket_type = $request->get('ticket_type');
        $routes->transport_type = $request->get('transport_type');
        $routes->save();
        return redirect('/routes')->with('success', 'Маршут оновлено!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Routes $routes
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $routes = Routes::find($id);
        $routes->delete();
        return redirect('/routes')->with('error','Маршрут видалено!');
    }
}
