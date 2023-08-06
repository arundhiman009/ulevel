@extends('admin/layout/contentLayoutMaster')
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
                    <form class="needs-validation" method="post" action="{{route('user-add')}}">
                        @csrf
                        <div class="row g-1">
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="username">Create Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username" id="username" placeholder="Create Username" required />
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="sponsor_id">Sponsor ID </label>
                                <input type="text" class="form-control @error('sponsor_id') is-invalid @enderror" value="{{ old('sponsor_id') }}" id="sponsor_id" name="sponsor_id" placeholder="Sponsor ID" required />
                                @error('sponsor_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="f_name">First Name</label>
                                <input type="text" class="form-control @error('f_name') is-invalid @enderror" value="{{ old('f_name') }}" name="f_name" id="f_name" placeholder="First Name" required />
                                @error('f_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row" style="margin-top: -20px">
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label " for="l_name">Surname</label>
                                <input type="text" class="form-control @error('l_name') is-invalid @enderror" value="{{ old('l_name') }}" name="l_name" id="l_name" placeholder="Surname" required />
                                @error('l_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="email">E-mail </label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email" placeholder="E-mail" required />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="phone">Phone Code</label>
                                <input type="text" class="form-control @error('phone_code') is-invalid @enderror" value="{{ old('phone_code') }}" name="phone_code" id="phone" placeholder="Phone Number" required />
                                @error('phone_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row" style="margin-top: -20px">
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" id="phone" placeholder="Phone Number" required />
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="country">Country</label>
                                <select class="form-select @error('country') is-invalid @enderror" name="country" id="country" tabindex="9">
                                    <option value="">Select country</option>
                                    @foreach($countries as $country)
                                    <option value="{{$country->name}}" data-id="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="state">State/Province </label>
                                <select class="form-select @error('state') is-invalid @enderror" name="state" id="state" tabindex="9">
                                    <option value="">Select state</option>
                                </select>
                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="city">City/Town</label>
                                <input type="text" value="{{old('city')}}" class="form-control @error('city') is-invalid @enderror" name="city" id="city" placeholder="City/Town" required />
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="password">Create Password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Create Password" required />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="password_confirmation">Confirm Password </label>
                                <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row" style="margin-top: -20px">

                            <div class="col-md-4 col-12 mb-3 position-relative">
                                <label class="form-label" for="validationTooltip03">Package</label>
                                <select class="form-select @error('package') is-invalid @enderror" name="package" tabindex="13">
                                    @foreach($packages as $package)
                                    <option value="{{$package->id}}">{{$package->package_name. ' - $' .$package->package_amount}}</option>
                                    @endforeach
                                </select>
                                @error('package')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-1 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms" value="yes" tabindex="15" />
                                    <label class="form-check-label" for="terms">
                                        By clicking the register button you agree to our <a href="#" target="_blank">terms_of_service</a> and
                                        <a href="#" target="_blank">privacy_policy</a>
                                    </label>
                                </div>
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


@section('page-script')
<script>
    $("#country").change(function() {
        var country_id = $(this).find(":selected").attr('data-id');
        $.ajax({
            'url': '/countries/' + country_id,
            'type': 'get',
            success: function(data) {
                $("#state").html(data);
            },
        });
    });
</script>
@endsection