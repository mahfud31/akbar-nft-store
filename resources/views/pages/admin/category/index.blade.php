@extends('layouts.admin')

@section('title')
    Category - Handnails Art
@endsection

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Category</h2>
        <p class="dashboard-subtitle">List of Categories</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">
                  + add new category
                </a>
                <div class="table-responsive">
                  <table class="table table-hover scroll-horizontal-vertical w-100" id="categories-table">
                    <thead>
                      <tr>
                        <th class="col-1">No</th>
                        <th class="col-1">Id</th>
                        <th>Name</th>
                        <th>Slug</th>
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
      var datatable = $('#categories-table').DataTable({
          processing: true,
          serverSide: true,
          ordering: true,
          ajax: {
            url: '{!! url()->current() !!}',
          },
          columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'slug', name: 'slug' },
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