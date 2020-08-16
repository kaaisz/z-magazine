<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotosController extends Controller
{
  public function index()
  {
    return view('photo.index');
  }

  public function create()
  {
    return view('photo.create');
  }

  public function store(Request $request)
  {
    $photo = new Photo();
    $photo->title = $request->title;
    $photo->detail = $request->detail;
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
