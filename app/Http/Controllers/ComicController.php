<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\Comic;
use PhpParser\Node\Expr\New_;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sentData = $request->all();

        $validateData = $request->validate(
            [
                'title' => 'required|max:50',
                'description' => 'max:60000',
                'thumb' => 'required|max:60000',
                'price' => 'required|max:3',
                'series' => 'required|max:20',
                'type' => 'required|max:20',
                'sale_date' => 'required|max:15',
                
            ],
            [
                'title.required' => 'aho, sto titolo ce lo volemo mette, Frà?'
            ]
        );

        $comic = new Comic();
        $comic->title = $sentData['title'];
        $comic->description = $sentData['description'];
        $comic->thumb = $sentData['thumb'];
        $comic->price = $sentData['price'];
        $comic->series = $sentData['series'];
        $comic->type = $sentData['type'];
        $comic->sale_date = $sentData['sale_date'];
        $comic->save();

        return redirect()->route('comics.show',compact('comic'));


        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $sentData = $request->all();
       
       $comic = Comic::findOrFail($id);
       $comic->update($sentData);

    //    $comic->title = $sentData['title'];
    //    $comic->description = $sentData['description'];
    //    $comic->thumb = $sentData['thumb'];
    //    $comic->price = $sentData['price'];
    //    $comic->series = $sentData['series'];
    //    $comic->type = $sentData['type'];
    //    $comic->sale_date = $sentData['sale_date'];
    //    $comic->save();

       return redirect()->route('comics.index', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index')->with('delete', $comic->title);
    }
}
