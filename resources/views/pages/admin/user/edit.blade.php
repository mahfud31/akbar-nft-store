@extends('layouts.admin')

@section('title')
    Admin - Handnails Art
@endsection

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Admin</h2>
        <p class="dashboard-subtitle">Edit Admin</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-12">
            @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
            @endif
            <div class="card">
              <div class="card-body">
                <form action="{{ route('user.update', $item->id) }}" method="POST">
                  @method('PUT')
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Admin Name</label>
                        <input type="text" name="name" value="{{ $item->name }}" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ $item->email }}" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <small>Kosongkan jika tidak ingin mengganti password</small>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Roles</label>
                        <select name="roles" required class="form-control">
                          <option value="{{ $item->roles }}" selected>Tidak di ganti</option>
                          <option value="ADMIN">Admin</option>
                          <option value="USER">User</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col text-right">
                      <button type="submit" class="btn btn-success px-5">
                        Save Now
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection