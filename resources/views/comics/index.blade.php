@extends('layouts.main')

@section('asset')
@vite('resources/scss/comics.scss')
@endsection


@section('maincontent')

<main>

  <div class="container">
    
    <div class="title-label fs-4">current series</div>

    <div class="row row-cols-6 g-4 py-3">
      @forelse ($comics as $comic)

      <a href="{{ route('comics.show', $comic)}}" class="col">
        <div class="comic-card">
          <img src="{{ $comic["thumb"] }}" alt="">
          <div class="serie">{{ $comic["series"] }}</div>
        </div>

      </a>

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