<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Regions;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $region = Regions::all();
        return view('region.index', compact('region'));
//        dd($find);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('region.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'region_name' => 'required',
//        ]);
//
//        $region = new Regions([
//            'region_name' => $request->get('region_name')
//        ]);
//        $region->save();
        $region = Regions::create($request->all());
        return redirect()->route('region.index',$region);
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Regions $region
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Regions $region)
    {

        return view('region.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Region $region
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $region = Regions::findOrFail($id);
        return view('region.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Region $region
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'region_name' => 'required',
        ]);
        $region = Regions::findOrFail($id);
        $region->region_name = $request->get('region_name');
        $region->save();
        return redirect('region/')->with('success', 'Назву оновлено!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Region $region
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $region = Regions::findOrFail($id);
        $region->delete();
        return redirect('region/')->with('success', 'Область видалено!');

    }
}
