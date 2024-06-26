<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicStoreRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   */
  public function index()
  {
    $comics = Comic::paginate(18);
    return view('comics.index', compact('comics'));
  }

  /**
   * Show the form for creating a new resource.
   *
   */
  public function create()
  {
    return view('comics.form');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   */
  public function store(ComicStoreRequest $request)
  {

    $request->validated();

    $comic = new Comic();
    $comic_datas = $request->all();
    $comic->fill($comic_datas);
    $comic->save();
    return redirect()->route('comics.show', $comic)
      ->with('message', 'Comic correctly saved')
      ->with('class', 'success');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Comic  $comic
   */
  public function show(Comic $comic)
  {
    return view('comics.show', compact('comic'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Comic  $comic
   */
  public function edit(Comic $comic)
  {
    return view('comics.form', compact('comic'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Comic  $comic
   */
  public function update(ComicStoreRequest $request, Comic $comic)
  {
    $request->validated();
    $comic->update($request->all());
    return redirect()->route('comics.show', $comic)
      ->with('message', 'Changes saved correctly')
      ->with('class', 'success');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Comic  $comic
   */
  public function destroy(Comic $comic)
  {
    $comic->delete();
    return redirect()->route('comics.index')
      ->with('message', 'Comic correctly deleted')
      ->with('class', 'danger');
  }
}
