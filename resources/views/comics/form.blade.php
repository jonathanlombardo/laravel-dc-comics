@extends('layouts.main')

@section('asset')
@vite('resources/scss/comic-form.scss')
@endsection


@section('maincontent')

<main>

  @if ($errors->any())
    <div class="container mt-5">
      <div class="alert alert-danger">
        <strong>Check and correct errors!</strong>
      </div>
    </div>
  @endif

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
        <input
          type="text"
          class="form-control rounded-0 @error('title') is-invalid  @enderror"
          id="title"
          name="title"
          placeholder="Comic name: #999"
          required
          value="{{isset ($comic) ? ($errors->any() ? old('title') : $comic->title) : old('title')}}"
        >
        @error('title')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="col-4">
        <label for="thumb" class="form-label">Image URL*</label>
        <input
          type="url"
          class="form-control rounded-0 @error('thumb') is-invalid  @enderror"
          id="thumb"
          name="thumb"
          placeholder="https://www.cover.com/image/comics.jpg"
          required
          value="{{isset ($comic) ? ($errors->any() ? old('thumb') : $comic->thumb) : old('thumb')}}"
        >
        @error('thumb')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="col-4">
        <label for="price" class="form-label">Price ($)*</label>
        <input
          type="number"
          class="form-control rounded-0 @error('price') is-invalid  @enderror"
          id="price"
          name="price"
          placeholder="19,99"
          max="999999.99"
          step="0.01"
          required
          value="{{isset ($comic) ? ($errors->any() ? old('price') : $comic->price) : old('price')}}"
        >
        @error('price')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="col-4">
        <label for="series" class="form-label">Series*</label>
        <input
          type="text"
          class="form-control rounded-0 @error('series') is-invalid  @enderror"
          id="series"
          name="series"
          placeholder="Action Comics"
          required
          value="{{isset ($comic) ? ($errors->any() ? old('series') : $comic->series) : old('series')}}"
        >
        @error('series')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="col-4">
        <label for="sale_date" class="form-label">Sale Date*</label>
        <input
          type="date"
          class="form-control rounded-0 @error('sale_date') is-invalid  @enderror"
          id="sale_date"
          name="sale_date"
          required
          value="{{isset ($comic) ? ($errors->any() ? old('sale_date') : $comic->sale_date) : old('sale_date')}}"
        >
        @error('sale_date')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="col-4">
        <label for="type" class="form-label">Type*</label>
        <input
          type="text"
          class="form-control rounded-0 @error('type') is-invalid  @enderror"
          id="type"
          name="type"
          placeholder="comic book"
          required
          value="{{isset ($comic) ? ($errors->any() ? old('type') : $comic->type) : old('type')}}"
        >
        @error('type')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea
          class="form-control @error('description') is-invalid  @enderror"
          placeholder="Description of comic"
          id="description"
          name="description"
          rows="3"
        >{{isset ($comic) ? ($errors->any() ? old('description') : $comic->type) : old('description')}}</textarea>
        @error('description')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
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

@section('script')
<script>

  const inputs = document.querySelectorAll('input')
  const textAreas = document.querySelectorAll('textarea')

  inputs.forEach((input) => {
    input.addEventListener("input", function(){
      document.querySelector('.alert').classList.add('d-none')
      this.classList.remove("is-invalid")
    })
  });

  textAreas.forEach((textArea) => {
    textArea.addEventListener("change", function(){
      document.querySelector('.alert').classList.add('d-none')
      this.classList.remove("is-invalid")
    })
  });

</script>

@endsection