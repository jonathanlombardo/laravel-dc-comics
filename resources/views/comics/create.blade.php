@extends('layouts.main')

@section('asset')
@vite('resources/scss/comic-create-form.scss')
@endsection


@section('maincontent')

<main>

  <div class="container">
    <p class="mt-5"><i>All fields signed by * are mandatory</i></p>    
    <form class="row py-5 g-3">
      <div class="col-4">
        <label for="title" class="form-label">Title*</label>
        <input type="text" class="form-control rounded-0" id="title" name="title" placeholder="Comic name: #999" requiered>
      </div>
      <div class="col-4">
        <label for="thumb" class="form-label">Image URL*</label>
        <input type="url" class="form-control rounded-0" id="thumb" name="thumb" placeholder="https://www.cover.com/image/comics.jpg" requiered>
      </div>
      <div class="col-4">
        <label for="price" class="form-label">Price ($)*</label>
        <input type="number" class="form-control rounded-0" id="price" name="price" placeholder="19,99" max="999999.99" step="0.01" requiered>
      </div>
      <div class="col-4">
        <label for="series" class="form-label">Series*</label>
        <input type="text" class="form-control rounded-0" id="series" name="series" placeholder="Action Comics" requiered>
      </div>
      <div class="col-4">
        <label for="sale_date" class="form-label">Sale Date*</label>
        <input type="date" class="form-control rounded-0" id="sale_date" name="sale_date" requiered>
      </div>
      <div class="col-4">
        <label for="type" class="form-label">Type*</label>
        <input type="text" class="form-control rounded-0" id="type" name="type" placeholder="comic book" requiered>
      </div>
      <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" placeholder="Description of comic" id="description" rows="3"></textarea>
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