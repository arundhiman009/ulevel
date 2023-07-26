@extends('layouts/contentLayoutMaster')
@section('title', 'Add User')
@section('content')

<section class="tooltip-validations" id="tooltip-validation">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Register Form</h4>
                </div>
                <div class="card-body">
                    <form class="needs-validation">
                        <div class="row g-1">
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip01">Create Username</label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Create Username" required />
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip02">Sponsor ID </label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Sponsor ID" required />
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip03">First Name</label>
                                <input type="text" class="form-control" id="validationTooltip03" placeholder="First Name" required />
                                <div class="invalid-tooltip">Please provide a valid city.</div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -20px">
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip01">Surname</label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Surname" required />
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip02">E-mail </label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="E-mail" required />
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip03">Phone Number</label>
                                <input type="text" class="form-control" id="validationTooltip03" placeholder="Phone Number" required />
                                <div class="invalid-tooltip">Please provide a valid city.</div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -20px">
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip01">Country</label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Country" required />
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip02">State/Province </label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="State/Province" required />
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip03">City/Town</label>
                                <input type="text" class="form-control" id="validationTooltip03" placeholder="City/Town" required />
                                <div class="invalid-tooltip">Please provide a valid city.</div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -20px">
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip01">Create Password</label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Create Password" required />
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip02">Confirm Password </label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Confirm Password" required />
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip03">Package</label>
                                <input type="text" class="form-control" id="validationTooltip03" placeholder="Package" required />
                                <div class="invalid-tooltip">Please provide a valid city.</div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection