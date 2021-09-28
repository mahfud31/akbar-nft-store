@extends('layouts.app')

@section('title')
    Home - Handnails Art
@endsection

@section('content')
  <div class="page-content page-home">
    <!-- jumbotron -->
    <section data-aos="fade-left">
      <div class="container-fluid">
        <div class="card w-100">
          <img src="/images/jumbotron-img.png" class="card-img-top" alt="..." />
          <div class="heading bg-secondary text-light">
            <div class="row text-center">
              <div class="col-6">
                <div class="text-heading">All Artwork</div>
              </div>
              <div class="col-6">
                <a href="https://opensea.io/collection/handnails-art" class="btn btn-primary">Opensea >></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- category -->
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
          @php
              $incrementCategory = 0
          @endphp
          @forelse ($categories as $category)
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $incrementCategory+= 100 }}">
              <a class="component-categories d-block" href="{{ route('categories-detail', $category->slug) }}">
                <p class="categories-text">{{ $category->name }}</p>
              </a>
            </div>
          @empty
              <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                No Categories Found
              </div>
          @endforelse
        </div>
      </div>
    </section>
    <!-- product -->
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center" data-aos="fade-up">
            <h3>New NFT Artwork</h3>
          </div>
        </div>
        <div class="row">
          @php
              $incrementProduct = 0
          @endphp
          @forelse ($products as $product)
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+= 100 }}">
              <a class="component-products d-block border border-top-0 rounded" href="{{ route('detail', $product->slug) }}">
                <div class="products-thumbnail">
                  <div class="products-image" style="background-image: url('{{ Storage::url($product->photos) }}')"></div>
                </div>
                <div class="products-text ml-2">{{ $product->name }}</div>
                <div class="products-price ml-2"><em class="fab fa-ethereum"></em> {{ $product->price }}</div>
              </a>
            </div>
          @empty
              <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                No Product Found
              </div>
          @endforelse
        </div>
      </div>
    </section>
  </div>
@endsection