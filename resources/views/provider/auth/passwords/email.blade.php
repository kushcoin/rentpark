@extends('layouts.providers.focused')

@section('content')
 <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                  </div>
                   @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  <form class="user" method="POST" action="{{ route('provider.password.email') }}">
                    {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"  aria-describedby="emailHelp" placeholder="Enter Email Address..."  required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                       
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Send Password Reset Link
                        </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="{{ route('provider.register') }}">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="{{ route('provider.login') }}">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
            </div>
@endsection