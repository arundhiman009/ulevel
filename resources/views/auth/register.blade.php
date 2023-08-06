@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset('css/base/pages/authentication.css') }}">
@endsection
@section('content')
<div class="auth-wrapper auth-basic px-2">
  <div class="auth-inner my-2">
    <!-- Register Basic -->
    <div class="card mb-0">
      <div class="card-body">
        <a href="#" class="brand-logo">
          <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
            <defs>
              <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                <stop stop-color="#000000" offset="0%"></stop>
                <stop stop-color="#FFFFFF" offset="100%"></stop>
              </lineargradient>
              <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                <stop stop-color="#FFFFFF" offset="100%"></stop>
              </lineargradient>
            </defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                <g id="Group" transform="translate(400.000000, 178.000000)">
                  <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                  <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                  <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                  <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                  <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                </g>
              </g>
            </g>
          </svg>
          <h2 class="brand-text text-primary ms-1">Vuexy</h2>
        </a>
        <h4 class="card-title mb-1">Create new user account</h4>
        <form class="auth-register-form mt-2 row" method="POST" action="{{ route('register') }}">
          @csrf
          <div class="mb-1 col-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" aria-describedby="username" tabindex="1" autofocus value="{{ old('username') }}" />
            @error('username')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-1 col-6">
            <label for="sponsor_id" class="form-label">Sponser Id</label>
            <input type="number" class="form-control @error('sponsor_id') is-invalid @enderror" id="sponsor_id" name="sponsor_id" placeholder="Sponser Id" aria-describedby="sponsor_id" tabindex="2" value="{{ old('sponsor_id') }}" />
            @error('sponsor_id')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="mb-1 col-6">
            <label for="f_name" class="form-label">Sponser's Full Name</label>
            <div class="input-group @error('f_name') is-invalid @enderror">
              <input type="text" class="form-control form-control-merge @error('f_name') is-invalid @enderror" id="f_name" name="f_name" value="{{ old('f_name') }}" placeholder="Full Name" aria-describedby="f_name" tabindex="3" />
            </div>
            @error('f_name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="mb-1 col-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email" aria-describedby="email" tabindex="4" />
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="mb-1 col-6">
            <label for="f_name" class="form-label">First Name</label>
            <input type="text" class="form-control @error('f_name') is-invalid @enderror" id="f_name" name="f_name" placeholder="First Name" aria-describedby="f_name" tabindex="5" autofocus value="{{ old('f_name') }}" />
            @error('f_name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="mb-1 col-6">
            <label for="l_name" class="form-label">Surname</label>
            <input type="text" class="form-control @error('l_name') is-invalid @enderror" id="l_name" name="l_name" placeholder="Surname" aria-describedby="l_name" tabindex="6" value="{{ old('l_name') }}" />
            @error('l_name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="mb-1 col-6">
            <label for="phone_code" class="form-label">country Code</label>
            <div class="input-group input-group-merge @error('phone_code') is-invalid @enderror">
              <input type="number" class="form-control form-control-merge @error('phone_code') is-invalid @enderror" id="phone_code" name="phone_code" placeholder="Country Code" value="{{ old('phone_code') }}" aria-describedby="phone_code" tabindex="7" />
            </div>
            @error('phone_code')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="mb-1 col-6">
            <label for="register-password-confirm" class="form-label">Mobile</label>
            <div class="input-group input-group-merge form-password-toggle">
              <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Mobile" value="{{ old('phone') }}" aria-describedby="phone" tabindex="8" />
              @error('phone')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="mb-1 col-6">
            <label for="register-username" class="form-label">Country</label>
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

          <div class="mb-1 col-6" id="state_div" style="display: none;">
            <label for="register-email" class="form-label">State</label>
            <select class="form-select @error('state') is-invalid @enderror" name="state" id="state">
            </select>
          </div>

          <div class="mb-1 col-6">
            <label for="register-password" class="form-label">City</label>
            <div class="input-group input-group-merge @error('city') is-invalid @enderror">
              <input type="text" class="form-control form-control-merge @error('city') is-invalid @enderror" id="city" name="city" placeholder="City" aria-describedby="city" tabindex="10" />
            </div>
            @error('city')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-1 col-6">
            <label for="register-password" class="form-label">Password</label>
            <div class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
              <input type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" id="register-password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="11" />
              <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-1 col-6">
            <label for="register-password-confirm" class="form-label">Confirm Password</label>
            <div class="input-group input-group-merge form-password-toggle">
              <input type="password" class="form-control form-control-merge @error('password_confirmation') is-invalid @enderror" id="register-password-confirm" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="12" />
              <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="mb-1 col-6">
            <label for="register-password-confirm " class="form-label">Package</label>
            <div class="input-group input-group-merge ">
              <select class="form-select @error('package') is-invalid @enderror" name="package" tabindex="13">
                @foreach($packages as $package)
                <option value="{{$package->id}}">{{$package->package_name. ' - $' .$package->package_amount}}</option>
                @endforeach
              </select>
            </div>
            @error('package')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-1 col-6">
            <label for="register-password-confirm" class="form-label">Payment Options</label>
            <div class="input-group input-group-merge ">
              <select class="form-select @error('payment') is-invalid @enderror" name="payment" tabindex="14">
                <option value="free">Free</option>
                <option value="paypal">Paypal</option>
                <option value="stripe">Stripe</option>
                <option value="bank">Manual</option>
                <option value="coin">BTC/ETH/USDT</option>
                <option value="epin">Epin</option>
              </select>
            </div>
            @error('payment')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="mb-1 ">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="terms" name="terms" value="yes" tabindex="15" />
              <label class="form-check-label" for="terms">
                I agree to the <a href="#" target="_blank">terms_of_service</a> and
                <a href="#" target="_blank">privacy_policy</a>
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100" tabindex="16">Sign up</button>
        </form>

        <p class="text-center mt-2">
          <span>Already have an account?</span>
          @if (Route::has('login'))
          <a href="{{ route('login') }}">
            <span>Sign in instead</span>
          </a>
          @endif
        </p>

        <div class="divider my-2">
          <div class="divider-text">or</div>
        </div>

        <div class="auth-footer-btn d-flex justify-content-center">
          <a href="#" class="btn btn-facebook">
            <i data-feather="facebook"></i>
          </a>
          <a href="#" class="btn btn-twitter white">
            <i data-feather="twitter"></i>
          </a>
          <a href="#" class="btn btn-google">
            <i data-feather="mail"></i>
          </a>
          <a href="#" class="btn btn-github">
            <i data-feather="github"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Register basic -->
  </div>
</div>
@endsection

@section('page-script')
<script>
  $("#country").change(function() {
    var country_id = $(this).find(":selected").attr('data-id');
    $.ajax({

      'url': '/countries/' + country_id,
      'type': 'get',
      success: function(data) {
        $('#state_div').show();
        $("#state").html(data);
      },
    });
  });
</script>
@endsection