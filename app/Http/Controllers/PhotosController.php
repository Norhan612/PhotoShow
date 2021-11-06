<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;


use App\Photo;

class PhotosController extends Controller
{
    public function create($album_id)
    {
        return view('photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request, $album_id)
    {
        $this->validate($request, [
            'title'         => 'required',
            'photo'  => 'image|max:1999|mimes:jpg,jpeg,png,gif'
        ]);


        // to change name of image
        $photo_name = time() . '.' . $request->photo->getClientOriginalExtension();


       // $photo = new Photo;
        $photo = new Photo;

        $photo->album_id    = $album_id;
        $photo->photo       = $photo_name;
        $photo->title       = $request->title;
        $photo->size        = $request->size;
        $photo->description = $request->description;
        

        //$album->photos()->save($photo);
        $photo->save();

        //$img_name = time() . '.' . $request->cover_image->getClientOriginalExtension();
    
        $request->photo->move(public_path('upload/album_photos/'.$album_id),$photo_name);


        Session::flash('message', 'Photo Is Uploaded');

        return redirect('/albums/'.$album_id);
        //->with('success', 'Album Is Created');
    }

    public function show($id)
    {
        $photo = Photo::find($id);

        return view('photos.show')->with('photo', $photo);

    }

    public function destroy($id)
    {
        $photo = Photo::find($id);
        if(!$photo)
        {
            return redirect()->back();
            Session::flash('message', 'Photo Not Exist');
        }
        
        $photo->delete();

        Session::flash('message', 'Photo Is Deleted');

        return redirect('/');
    }

}
