@extends('layout.master')
@section('content')
    <div id="titlebar" class="single">
        <div class="container">

            <div class="sixteen columns">
                <h2>My Account</h2>
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Home</a></li>
                        <li>My Account</li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
    <!-- Container -->
    <div class="container">

        <div class="my-account">

            <ul class="tabs-nav">
                <li class=""><a href="#tab1">Login</a></li>
                <li><a href="#tab2">Register</a></li>
            </ul>

            <div class="tabs-container">
                <!-- Login -->
                <div class="tab-content" id="tab1" style="display: none;">

                    <h3 class="margin-bottom-10 margin-top-10">Login</h3>

                    <form method="POST" action="{{ route('login') }}">
                      @csrf
                  
                      <p class="form-row form-row-wide">
                          <label for="email">Username or Email Address:</label>
                          <input type="text" class="input-text" name="email" id="email" value="{{ old('email') }}" />
                      </p>
                  
                      <p class="form-row form-row-wide">
                          <label for="password">Password:</label>
                          <input class="input-text" type="password" name="password" id="password" />
                      </p>
                  
                      <p class="form-row">
                          <input type="submit" class="button" name="login" value="Login" />
                  
                          <label for="remember" class="rememberme">
                              <input name="remember" type="checkbox" id="remember" value="1" {{ old('remember') ? 'checked' : '' }} /> Remember
                              Me
                          </label>
                      </p>
                  
                      <p class="lost_password">
                          <a href="#">Lost Your Password?</a>
                      </p>
                  </form>
                  
                </div>

                <!-- Register -->
                <div class="tab-content" id="tab2" style="display: none;">

                    <h3 class="margin-bottom-10 margin-top-10">Register</h3>

                    {{-- <form method="post" class="register"> --}}
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <p class="form-row form-row-wide">
                            <label for="reg_email">Name :</label>
                            <input type="text" class="input-text" name="name" id="reg_email" value="" />
                        </p>


                        <p class="form-row form-row-wide">
                            <label for="reg_password">Email:</label>
                            <input type="text" class="input-text" name="email" id="reg_password" />
                        </p>

                        <p class="form-row form-row-wide">
                            <label for="reg_password2">Password:</label>
                            <input type="password" class="input-text" name="password" id="reg_password2" />
                        </p>


                        <p class="form-row">
                            <input type="submit" class="button" name="register" value="Register" />
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
