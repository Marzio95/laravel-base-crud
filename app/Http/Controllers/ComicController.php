<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myComics = Comic::paginate('6');
        $data = [
            'myComics' => $myComics,
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
        //in questa funzione inserisco la view del blade del Form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:comics|max:50',
            'description' => 'max:5000',
            'thumb' => 'nullable',
            'price' => 'numeric|min:0',
            'series' => 'max:50',
            'sale_date' => 'date',
            'type' => 'string',
        ]);

        $formData = $request->all();
        $newComic = Comic::create($formData);
        return redirect()->route('comic.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', [
            'pageTitle' => $comic->title,
            'comic' => $comic,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => [
                'required',
                Rule::unique('comics')->ignore($comic),
                'max:50'
            ],
            'description' => 'max:5000',
            'thumb' => 'nullable',
            'price' => 'numeric|min:0',
            'series' => 'string|max:50',
            'sale_date' => 'date',
            'type',
        ]);

        $formData = $request->all();
        $comic->update($formData);
        return redirect()->route('comic.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('index');
        // return back();
        // return back nn funziona nello show.blade.php quindi bisogna utilizzare il redirect
    }
}
