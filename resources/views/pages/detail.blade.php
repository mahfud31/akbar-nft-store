@extends('layouts.app')

@section('title')
  Handnails Art - All Categories
@endsection

@push('prepend-style')
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"
    rel="stylesheet"
    crossorigin="anonymous"
  />
@endpush

@section('content')
  <div class="page-content page-details">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center">
            <div id="app">
              <div class="">
                <div
                  v-for="(src, index) in imgs"
                  :key="index"
                  class="pic rounded"
                  @click="() => showImg(index)"
                >
                  <img :src="src" alt="" style="max-width: 75%" />
                </div>
              </div>
              <vue-easy-lightbox
                :visible="visible"
                :imgs="imgs"
                :index="index"
                @hide="handleHide"
              ></vue-easy-lightbox>
            </div>
          </div>
          <div class="col-lg-6">
            <section class="store-heading" data-aos="fade-left">
              <div class="row">
                <div class="col-12">
                  <h1>{{ $product->name }}</h1>
                  {{-- <div class="info-images">Color : 1</div>
                  <div class="info-images">Categories : Smooth</div>
                  <div class="info-images">Background : Black</div> --}}
                  <div class="price"><em class="fab fa-ethereum"></em> {{ ($product->price) }}</div>
                </div>
                <div class="col-lg-4">
                  <a class="btn btn-success nav-link px-4 text-white btn-block mb-3" 
                      href="https://opensea.io/assets/0x495f947276749ce646f68ac8c248420045cb7b5e/106771440190653361928490066987067730528243870740715768331933113496109057/">
                    Buy Now
                  </a>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
    <section class="store-details-container mt-5" data-aos="fade-up">
      <div class="store-description">
        <div class="container">
          <div class="row">
            <div class="col">
              <h3>About {{ $product->name }}</h3>
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8">
              {!! $product->description !!}
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection

@push('addon-script')
  <script src="/vendor/vue/vue.min.js"></script>
  <script src="https://unpkg.com/vue-easy-lightbox@vue2/dist/vue-easy-lightbox.umd.min.js"></script>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        visible: false,
        index: 0, // default: 0
        imgs: ['{{ Storage::url($product->photos) }}'],
      },
      methods: {
        showImg(index) {
          this.index = index;
          this.visible = true;
        },
        handleHide() {
          this.visible = false;
        },
      },
    });
  </script>
@endpush