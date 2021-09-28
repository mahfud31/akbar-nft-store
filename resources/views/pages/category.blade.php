@extends('layouts.app')

@section('title')
  Handnails Art - All Categories
@endsection

@push('prepend-style')
  <link href="/vendor/owlcarousel/css/owl.carousel.min.css" rel="stylesheet" />
  <link href="/vendor/owlcarousel/css/owl.theme.default.min.css" rel="stylesheet" />
@endpush

@section('content')
  <div class="page-content page-categories">
    <!-- category -->
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Categories</h5>
            <hr>
          </div>
        </div>
        <div class="row owl-carousel owl-theme">
          @php
              $incrementCategory = 0
          @endphp
          @forelse ($categories as $category)
            <div class="item" data-aos="fade-up" data-aos-delay="{{ $incrementCategory+= 100 }}">
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
        <hr>
      </div>
    </section>
    <!-- product -->
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center pb-2" data-aos="fade-up">
            <h3>New NFT Artwork</h3>
            <hr>
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
        <div class="row">
          <div class="col-12 mt-4">
            {{ $products->links() }}
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@push('addon-script')
  <script src="/vendor/owlcarousel/owl.carousel.min.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      margin: 10,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 2,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 5,
        },
      },
    });
  </script>
@endpush