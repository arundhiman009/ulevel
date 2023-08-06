@extends('admin.layout/contentLayoutMaster')
@section('title', 'User List')
@section('vendor-style')
<link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
@endsection

@section('content')
<section id="ajax-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Pending Withdraw List</h4>
                </div>
                <div class="card-datatable">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('vendor-script')
<script src="{{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>

{!! $dataTable->scripts() !!}
@endsection