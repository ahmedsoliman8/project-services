@extends('admin.auth.master')
@section('title','Login')
@section('content')
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">

            <form method="POST" action="{{ route('admin.login') }}"
                  class="col-lg-3 col-md-4 col-10 mx-auto text-center">
                @csrf
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                         xml:space="preserve">
              <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	"/>
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	"/>
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	"/>
              </g>
            </svg>
                </a>

                <h1 class="h6 mb-3">Sign in</h1>
                <x-auth-session-status class="mb-4" :status="session('status')"/>
                <div class="form-group">
                    <x-input-label for="email" class="sr-only"  :value="__('Email')"/>

                    <x-text-input id="email" class="form-control form-control-lg" type="email" name="email"
                                  placeholder="Email address" :value="old('email')" autofocus
                                  autocomplete="username"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>
                <div class="form-group">


                    <x-input-label for="password" class="sr-only" :value="__('Password')"/>

                    <x-text-input id="password" class="form-control form-control-lg" placeholder="Password"
                                  type="password"
                                  name="password"
                                  autocomplete="current-password"/>

                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="remember" value="remember-me"> Stay logged in </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                <p class="mt-5 mb-3 text-muted">© 2020</p>
            </form>
        </div>
    </div>
@endsection
