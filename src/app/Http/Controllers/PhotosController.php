<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
  public function index()
  {
    $photos = 
      DB::table('photos')
        ->orderBy('created_at', 'desc')
        ->get();

    return view('photo.index', ['photos' => $photos]);
  }

  // public function create()
  // {
  //   return view('photo.create');
  // }

  public function store(Request $request)
  {
    $photo = new Photo();
    $photo->title = $request->title;
    $photo->save();

    return redirect('/');
  }

  public function show($id)
  {
    return view('photo.show', [
      'photo_id' => $id
    ]);
  }

  public function edit($id)
  {
    return view('photo.edit', [
      'photo_id' => $id
    ]);
  }

  public function update(Request $request, $id)
  {
    Photo::where('id', $id)->update($request->all());
  }

  public function destroy($id)
  {
    Photo::where('id', $id)->delete();
  }
}
