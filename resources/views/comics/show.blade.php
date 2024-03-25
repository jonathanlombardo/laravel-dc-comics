@extends('layouts.main')

@section('asset')
@vite('resources/scss/comic-details.scss')
@endsection

@section('maincontent')

<div class="topbar">
  <div class="container small">    
    <img src="{{ $comic["thumb"] }}" alt="{{ $comic["type"] }} Image">
  </div>
</div>

<div class="container small py-5">
  <div class="row g-5">
    <div class="col-9 col-content">
      <h2>{{ $comic["title"]}}</h2>
      <div class="info-wrapper">
        <div class="price-wrapper">
          <div class="price">U.S. Price: <span class="value">{{$comic["price"]}}</span></div>
          <div class="available">AVAILABLE</div>
        </div>
        <div class="check-available">Check Availability</div>
      </div>
      <p class="desc">
        {{$comic["description"]}}
      </p>
    </div>
    <div class="col-3 col-adv">
      <a href="#">
        <img src="{{ Vite::asset('resources/img/adv.jpg')}}" alt="">
        <div class="adv-label">ADVERTISEMENT</div>
      </a>
    </div>
  </div>
</div>

<section class="details py-5">
  <div class="container small">
  <div class="row g-5">
    <div class="col-6">
      <div class="detail-title">Talent</div>
      <ul class="detail-list">
        <li>
          <span>Art By</span>
          <p>
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>
          </p>
        </li>
        <li>
          <span>Written By</span>
          <p>
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>,
            <a href="#">autori vari</a>
          </p>
        </li>
      </ul>
    </div>
    <div class="col-6">
    <div class="detail-title">Specs</div>
      <ul class="detail-list">
        <li>
          <span>Series</span>
          <p><a href="#">{{$comic["series"]}}</a></p>
        </li>
        <li>
          <span>US Price</span>
          <p>{{$comic["price"]}}</p>
        </li>
        <li>
          <span>On Sale Date</span>
          <p>{{$comic["sale_date"]}}</p>
        </li>
      </ul>
    </div>
  </div>
  </div>
</section>

@endsection