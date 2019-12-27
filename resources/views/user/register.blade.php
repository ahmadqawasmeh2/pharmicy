@extends('layout.app1')
@section('content')
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(img/ph.jpg);">
          <span class="login100-form-title-1">
          Register
          </span>
        </div>

        <form class="login100-form validate-form">

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Name Pharmicy</span>
            <input class="input100" type="text" name="Pharmicy" placeholder="Name Pharmicy">
            <span class="focus-input100"></span>
          </div>


          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Name of record holder</span>
            <input class="input100" type="text" name="record" placeholder="Name of record holder">
            <span class="focus-input100"></span>
          </div>
           <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Commercial Registration No</span>
            <input class="input100" type="text" name="Commercial" placeholder="Commercial Registration No">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Email</span>
            <input class="input100" type="Email" name="record" placeholder="Email">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="pass" placeholder="Enter password">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">RetypePassword</span>
            <input class="input100" type="password" name="RetypePassword" placeholder="Enter RetypePassword">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Phone Number</span>
            <input class="input100" type="Number" name="Phone" placeholder="+962**">
            <span class="focus-input100"></span>
          </div>


          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
             Register
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>


@endsection