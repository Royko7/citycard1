<?php

namespace App\Http\Controllers;

use App\Models\News;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use function GuzzleHttp\Promise\all;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $news = News::all();
        return view('new.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $news = News::get();
        return view('new.create', compact('news'));

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
            'title' => 'required',
            'body' => 'required',
        ]);
        $data = $request->all();

//        $data = $request->get('image');
//        $data = base64_decode($data);

        if (!empty($data['image'])) {
            $filename = $data['image']->getClientOriginalName();
            $data['image']->move(Storage::path('public/image/news/') . 'origin/', $filename);
            $thumbnail = Image::make(Storage::path('/public/image/news/') . 'origin/' . $filename);
            $thumbnail->fit(600, 300);
            $thumbnail->save(Storage::path('/public/image/news/') . 'thumbnail/' . $filename);
            $data['image'] = $filename;
        }

        News::create($data);
//        $news = News::create($request->all());
        return redirect()->route('new.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\News $news
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $news = News::findOrFail($id);
//        $news
        return view('new.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\News $news
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('new.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\News $news
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $news = News::findOrFail($id);
        $news->title = $request->get('title');
        $news->body = $request->get('body');
        $news->image = $request->get('image');
        $news->save();
//        $news->create($request->all());
        return redirect()->route('new.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('new.index');
    }

    }
