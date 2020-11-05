<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $transport = Transport::all();
        foreach ($transport as $transports)
        dd($transports->getCourse->title);

//        return view('transport.index', compact('transport'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $transport = Transport::all();

        return view('transport.create',compact('transport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'transport_name' => 'required',
            'transport_type' => 'required'
        ]);
//        $transport = new Transport([
//            'transport_name' => $request->get('transport_name'),
//            'transport_type' => $request->get('transport_type'),
//            'course_id' => $request->get('course_id')
//        ]);
        $region = Transport::create($request->all());

//        $transport->save();
        return redirect()->route('transport.index')->with('success', 'Транспорт створено!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Transport $transport
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Transport $transport)
    {
        return view('transport.show', compact('transport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Transport $transport
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $transport = Transport::findOrFail($id);
        return view('transport.edit', compact('transport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Transport $transport
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'transport_name' => 'required',
//            'transport_type' => 'required',
        ]);

        $transport = Transport::findOrFail($id);
        $transport->transport_name = $request->get('transport_name');
        $transport->transport_type = $request->get('transport_type');
        $transport->save();
        return redirect('transport/')->with('success', 'Транспорт оновлено!');
//        return redirect()->route('transport.index')->with('success', 'Транспорт оновлено!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Transport $transport
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $transport = Transport::findOrFail($id);
        $transport->delete();
        return redirect()->route('transport.index');

    }
}
