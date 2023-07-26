
@extends('layouts/contentLayoutMaster')

@section('title', 'Package')

@section('content')

<div class="col-md-6 col-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Add Package</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-12">


         
            @csrf
            <p class="card-text mb-2"></p>
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
            <div class="mt-2">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/forms/form-tooltip-valid.js')) }}"></script>
@endsection
