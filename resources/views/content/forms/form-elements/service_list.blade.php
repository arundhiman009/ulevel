@extends('layouts/contentLayoutMaster')

@section('title', 'Service List')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
@endsection

@section('content')
<!-- Ajax Sourced Server-side -->
<section id="ajax-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Service List</h4>
        </div>
        <div class="card-datatable">
          <table class="datatables-ajax table table-responsive">
            <thead>
              <tr>
                <th>id</th>
                <th>Package Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th> <!-- Add a new table header for the Actions column -->
              </tr>
            </thead>
            <tbody>
              @foreach ($packages as $package)
                <tr>
                  <td>{{ $package->id }}</td>
                  <td>{{ $package->package_name }}</td>
                  <td>{{ $package->description }}</td>
                    <td>
            @if ($package->image)
                <img src="{{ asset('storage/' . $package->image) }}" alt="Package Image" style="max-width: 100px;">
            @else
                No Image
            @endif
        </td>
                  <td>
                    <!-- Add an Edit button that links to the edit route or action -->
                    <a href="{{ route('edit-package', ['id' => $package->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                    
                    <!-- Add a Delete button with a form for deleting the package -->
                    <form action="{{ route('delete-package', ['id' => $package->id]) }}" method="POST" style="display: inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this package?')">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Ajax Sourced Server-side -->
@endsection

@section('vendor-script')
{{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
 
@endsection
