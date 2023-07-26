
@extends('layouts/contentLayoutMaster')

@section('title', 'Service')

@section('content')
<!-- Basic Inputs start -->
<section id="basic-input">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        
            <form action="{{ route('form-store') }}" method="POST">
              @csrf
             <div class="mb-1 row">
              <label for="package_name" class="col-sm-3 col-form-label-lg">Package Name</label>
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control form-control-lg"
                  id="package_name"
                  name="package_name"
                  placeholder="Package Name"
                />
              </div>
            </div>
            <div class="mb-1 row">
              <label for="description" class="col-sm-3 col-form-label">Description</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="description" name="description" placeholder="Description" />
              </div>
            </div>
            <!-- Add this code inside the <form> element -->
<div class="mb-1 row">
    <label for="image" class="col-sm-3 col-form-label">Image</label>
    <div class="col-sm-9">
        <input type="file" class="form-control" id="image" name="image">
    </div>
</div>

            <div class="mt-2">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Inputs end -->


@endsection

@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-tooltip-valid.js'))}}"></script>
@endsection
