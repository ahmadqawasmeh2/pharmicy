@extends('layout.app1')
@section('content')

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(img/doc.jpg);">
          <span class="login100-form-title-1">
          NewPassword
          </span>
        </div>

        <form class="login100-form validate-form">
         <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">NewPassword</span>
            <input class="input100" type="password" name="NewPassword" placeholder="NewPassword">
            <span class="focus-input100"></span>
          </div>

           <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">RetypePassword</span>
            <input class="input100" type="password" name="RetypePassword" placeholder="RetypePassword">
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