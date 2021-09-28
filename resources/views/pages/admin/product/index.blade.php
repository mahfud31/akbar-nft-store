@extends('layouts.admin')

@section('title')
    Product - Handnails Art
@endsection

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Product</h2>
        <p class="dashboard-subtitle">List of Product</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">
                  + add new Product
                </a>
                <div class="table-responsive">
                  <table class="table table-hover scroll-horizontal-vertical w-100" id="product-table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Photo</th>
                        <th>Link Redirect</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('addon-script')
    <script>
      var datatable = $('#product-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url: '{!! url()->current() !!}',
          },
          columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'category.name', name: 'category.name' },
            { data: 'price', name: 'price' },
            { data: 'photos', name: 'photos' },
            { data: 'link_redirect', name: 'link_redirect' },
            { 
              data: 'action',
              name: 'action',
              orderable: false,
              searcable: false,
              width: '15%',
            },
          ]
      })
    </script>
@endpush