@extends('layouts.main')

@section('asset')
@vite('resources/scss/comic-form.scss')
@endsection


@section('maincontent')

<main>

  <div class="container">
    <p class="mt-5"><i>All fields signed by * are mandatory</i></p>    
    <form
      action="{{Route::currentRouteName() == 'comics.create' ? route('comics.store') : route('comics.update', $comic)}}"
      method="POST"
      class="row py-5 g-3"
    >
      @csrf
      @method(Route::currentRouteName() == 'comics.create' ? 'POST' : 'PATCH')
      <div class="col-4">
        <label for="title" class="form-label">Title*</label>
        <input type="text" class="form-control rounded-0" id="title" name="title" placeholder="Comic name: #999" required
          value="{{isset ($comic) ? $comic->title : ''}}"
        >
      </div>
      <div class="col-4">
        <label for="thumb" class="form-label">Image URL*</label>
        <input type="url" class="form-control rounded-0" id="thumb" name="thumb" placeholder="https://www.cover.com/image/comics.jpg" required
          value="{{isset ($comic) ? $comic->thumb : ''}}"
        >
      </div>
      <div class="col-4">
        <label for="price" class="form-label">Price ($)*</label>
        <input type="number" class="form-control rounded-0" id="price" name="price" placeholder="19,99" max="999999.99" step="0.01" required
          value="{{isset ($comic) ? $comic->price : ''}}"
        >
      </div>
      <div class="col-4">
        <label for="series" class="form-label">Series*</label>
        <input type="text" class="form-control rounded-0" id="series" name="series" placeholder="Action Comics" required
          value="{{isset ($comic) ? $comic->series : ''}}"
        >
      </div>
      <div class="col-4">
        <label for="sale_date" class="form-label">Sale Date*</label>
        <input type="date" class="form-control rounded-0" id="sale_date" name="sale_date" required
          value="{{isset ($comic) ? $comic->sale_date : ''}}"
        >
      </div>
      <div class="col-4">
        <label for="type" class="form-label">Type*</label>
        <input type="text" class="form-control rounded-0" id="type" name="type" placeholder="comic book" required
          value="{{isset ($comic) ? $comic->type : ''}}"
        >
      </div>
      <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" placeholder="Description of comic" id="description" name="description" rows="3">{{isset ($comic) ? $comic->description : ''}}</textarea>
      </div>
      <div class="col">
        <button class="rounded-0 btn btn-success">
        {{Route::currentRouteName() == 'comics.create' ? 'Save new comic' : 'Save changes'}}
        </button>
        <a href="{{route("comics.index")}}" class="rounded-0 btn btn-outline-primary">Back to the list</a>
      </div>

    </form>
    
  </div>

</main>

@endsection

<!-- 
"title" => "Action Comics #1000: The Deluxe Edition",
"description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
"thumb" => "https://www.coverbrowser.com/image/action-comics/1-1.jpg",
"price" => "$19.99",
"series" => "Action Comics",
"sale_date" => "2018-10-02",
"type" => "comic book",
-->