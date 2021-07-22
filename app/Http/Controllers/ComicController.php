<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        $comics = Comic::orderBy('id', 'DESC')->paginate(10);

        return view("comic.index", compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comic.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(["slug" => Str::slug($request->get("title"), '-')]);
        
        $data = $request->all();

        $request->validate(
            [
                'title' => 'required|max:60',
                'series' => 'required|max:60',
                'type' => 'required|max:30',
                'thumb' => 'required|max:255',
                'description' => 'required|max:65535',
                'price' => 'required|numeric|min:0|max:9999.99',
                'sale_date' => 'required|max:10',
                'slug' => 'unique:comics|max:100'
            ],
            [
                'slug.unique' => 'The "title" should be unique.',
                'slug.max' => 'The title has too many characters',
            ]
        );
        
        $comic = new Comic();

        $comic->fill($data);
        $comic->save();

        return redirect()
            ->route('comic.show', $comic->id)
            ->with('message', "Fumetto '" . $comic->title . "' creato correttamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comic.show", compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comic.edit", compact('comic'));
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
        $request->request->add(["slug" => Str::slug($request->get("title"), '-')]);
        
        $data = $request->all();

        $request->validate(
            [
                'title' => 'required|max:60',
                'series' => 'required|max:60',
                'type' => 'required|max:30',
                'thumb' => 'required|max:255',
                'description' => 'required|max:65535',
                'price' => 'required|numeric|min:0|max:9999.99',
                'sale_date' => 'required|max:10',
                'slug' => [
                        Rule::unique('comics')->ignore($comic->id),
                        'max:100'
                    ]
            ],
            [
                'slug.unique' => 'The "title" should be unique.',
                'slug.max' => 'The title has too many characters'
            ]
        );

        $data["slug"] = Str::slug($data["title"], '-');

        $comic->update($data);

        return redirect()
            ->route('comic.show', $comic->id)
            ->with('message', "Fumetto '" . $comic->title . "' modificato correttamente");
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

        return redirect()
            ->route('comic.index')
            ->with('deleted', "Fumetto '" . $comic->title . "' eliminato!");
    }
}
