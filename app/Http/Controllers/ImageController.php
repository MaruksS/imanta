<?php

namespace App\Http\Controllers;

use Redirect;
use Input;
use Illuminate\Http\Request;
use App\Album; 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $album = Album::find($id);
        return view('addimage')->with('album',$album);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
    if($request->hasFile('image'))
        {
        $file = Input::file('image');
        $random_name = str_random(8);
        $destinationPath = 'albums/';
        $extension = $file->getClientOriginalExtension();
        $filename=$random_name.'_album_image.'.$extension;
        $uploadSuccess = Input::file('image')->move($destinationPath, $filename);
        $album_id = Input::get('album_id');
        Image::create(array(
            'description' => Input::get('description'),
            'image' => $filename,
            'album_id'=> $album_id
        ));
        }
        return redirect()->route('show_album', $album_id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $image = Image::find($id);
    $image->delete();
    $album_id = Input::get('album_id');
    return redirect()->route('show_album', $album_id);
    }
}
