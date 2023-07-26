@extends('layouts/contentLayoutMaster')

@section('title', 'Edit Package')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Package</h4>
        </div>
        <div class="card-body">
          <form action="{{ route('update-package', ['id' => $package->id]) }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="package_name" class="form-label">Package Name</label>
              <input type="text" class="form-control" id="package_name" name="package_name" value="{{ $package->package_name }}" required>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description" rows="4" required>{{ $package->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Package</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
