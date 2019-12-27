@extends('layout.app1')
@section('content')

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(img/ph.jpg);">
          <span class="login100-form-title-1">
           Forget Password
          </span>
        </div>

        <form class="login100-form validate-form" action="/newpass">
          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Email</span>
            <input class="input100" type="Email" name="Email" placeholder="Enter Email">
            <span class="focus-input100"></span>
          </div>

         

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
          Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>


@endsection