@extends('layouts.admin')

@section('title')
    Dashboard - Handnails Art
@endsection

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Dashboard</h2>
        <p class="dashboard-subtitle">This is Hansnail Art administrator panel</p>
      </div>
      <div class="dashboard-content">
        <div class="row justify-content-around text-center">
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Products</div>
                <div class="dashboard-card-subtitle">{{ $countProduct }}</div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Categories</div>
                <div class="dashboard-card-subtitle">{{ $categories }}</div>
              </div>
            </div>
          </div>
        </div>

        <h5 class="mb-3 mt-5">Last Product added</h5>
        <div class="row mt-3 justify-content-around">
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
    </div>
  </div>
@endsection