@extends('layouts.main')

@section('asset')
@vite('resources/scss/comics.scss')
@endsection

@section("hero")
@include('layouts.partials.hero')
@endsection


@section('maincontent')

<main>

  <div class="container">
    
    <div class="title-label fs-4">current series</div>
    <div class="text-end">
      <a href="{{route("comics.create")}}" class="rounded-0 btn btn-outline-primary my-3">add new comic</a>
    </div>

    <div class="row row-cols-6 g-4 py-3">
      @forelse ($comics as $comic)

      <div class="col">
        <div class="comic-card">
          <div class="figure w-100">
            <img src="{{ $comic->thumb }}" alt="">
            <div data-modal-id="destroyer-modal-{{$comic->id}}" data-modal-type="destroyer">Delete comic</div>
          </div>
          <div class="serie">
            <a href="{{ route('comics.show', $comic)}}">
              {{ $comic->series }}
            </a>
          </div>
        </div>
      </div>

      @empty

      <div class="col">
        <div class="comic-card">
          <div class="serie">No comics</div>
        </div>
      </div>

      @endforelse

    </div>

    <button class="btn load-more mb-3">LOAD MORE</button>
    
  </div>

  <section class="buy-comics">
    <a>
      <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="digital comics icon">
      <span class="desc">digital comics</span>
    </a>
    <a>
      <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="merchandise icon">
      <span class="desc">dc merchandise</span>
    </a>
    <a>
      <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="subscription icon">
      <span class="desc">subscription</span>
    </a>
    <a>
      <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="shop locator icon">
      <span class="desc">comic shop locator</span>
    </a>
    <a>
      <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="power visa icon">
      <span class="desc">dc power visa</span>
    </a>
  </section>

</main>

@endsection

@section('modals')
  @foreach($comics as $comic)
    @include('layouts.partials.destroyerModal')
  @endforeach
@endsection

@section('script')
  @include('layouts.partials.destroyerScript')
@endsection