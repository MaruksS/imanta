<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Input;
use App\Image;
use App\Album; 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAlbum;

class AlbumsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    public function index()
    {
        $albums=Album::latest()->get();
        return view('albums.index')->with('albums',$albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAlbum $request)
    {
        $album=New Album();
        $album->name = $request->name;
        $album->description = $request->description;
        if($request->hasFile('cover_image'))
        {
            $file = Input::file('cover_image');

            $album->cover_image = $album['name'];

            $file->move(public_path().'/albums/', $album['name']);
        }
        $album->save();
        return redirect('album'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::with('Photos')->find($id);

        return view('albums.show')->with('album',$album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::find($id);

        $album->delete();

        return redirect('album');
    }
}
