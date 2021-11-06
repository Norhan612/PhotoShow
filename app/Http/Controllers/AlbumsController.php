<?php

namespace App\Http\Controllers;

use App\Album;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
        $albums = Album::with('photos')->get();
        return view('albums.index')->with('albums', $albums);
    }

    public function create()
    {
        return view('albums.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'         => 'required',
            'cover_image'  => 'image|max:1999|mimes:jpg,jpeg,png,gif'
        ]);


        // to change name of image
        $img_name = time() . '.' . $request->cover_image->getClientOriginalExtension();


        $album = new Album;

        $album->name        = $request->name;
        $album->description = $request->description;
        $album->cover_image = $img_name;

        $album->save();

        //$img_name = time() . '.' . $request->cover_image->getClientOriginalExtension();
    
        $request->cover_image->move(public_path('upload/album_covers'),$img_name);

        Session::flash('message', 'Album Is Created');

        return redirect('/albums');
        //->with('success', 'Album Is Created');
    }

    public function show($id)
    {
        $album = Album::with('photos')->find($id);

        return view('albums.show')->with('album', $album);
    }
}
