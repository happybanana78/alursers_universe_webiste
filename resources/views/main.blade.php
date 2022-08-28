@extends('layout')

<?php use App\libraries\Slider as Slider; ?>

@section('content')
    <!-- login -->
    <div class="modal fade mt-5 fs-4" id="login_form" tabindex="-1" aria-labelledby="login_form" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content px-3">
            <div class="modal-header">
              <h5 class="modal-title">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginF">
                    <div class="mb-3">
                      <label for="email_l" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email_l" name="email" required>
                    </div>
                    <div class="mb-3">
                      <label for="password_l" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password_l" name="pwd" required>
                    </div>
                    <div class="fs-5 mt-4 login-extra">
                        <p>forgot your password?</p>
                        <a data-bs-toggle="modal" data-bs-target="#signup_form"><p>Sign Up!</p></a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-light fs-4" form="loginF">Login</button>
            </div>
          </div>
        </div>
      </div>
      <!-- endlogin -->
      <!-- signup -->
    <div class="modal fade mt-5 fs-4" id="signup_form" tabindex="-1" aria-labelledby="signup_form" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content px-3">
            <div class="modal-header">
              <h5 class="modal-title">Sign Up</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="signupF">
                    <div class="mb-3">
                        <label for="username_s" class="form-label">Username</label>
                        <input type="email" class="form-control" id="username_s" name="username" required>
                    </div>
                    <div class="mb-3">
                      <label for="email_s" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email_s" name="email" required>
                    </div>
                    <div class="mb-3">
                      <label for="password_s" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password_s" name="pwd" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light fs-4" form="signupF">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
      <!-- endsignup -->
    <div class="container justify-content-lg-between align-items-center d-lg-flex mt-lg-4">
        <b class="fs-1 welcome-text text-light w-100 d-none d-lg-block">Welcome To The Alurser Universe!</b>
        <div class="bloobs">
        <?php
            $slider = new Slider();
            $slider->setPath("images/bloobs/*");
            $fileList = $slider->getFiles();
            foreach ($fileList as $file) {
                echo "<img class='bloobs-img border border-3 border-white rounded-circle w-100' src='" . $file . "'>";
            }
        ?>
        </div>
    </div>
@endsection