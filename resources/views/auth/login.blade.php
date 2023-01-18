@extends('layouts.register')

@section('content')
  
<div class="">
            
    <div class="">
        <div class="">
            <div class="">
                <div class="">
    
                    <div class="form-body">
                    <div class="insta"><img  src={{url('/imgs/instagram.png')}} width="200px"  alt=""></div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="just-input">
    
                                <div class="">
                                    <input id="email" type="email" placeholder="Username or Email"   class="register-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="just-input">
                                
    
                                <div class="">
                                    <input id="password" type="password" placeholder="Password" class="register-form @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
    
                            <div class="">
                            <div>
                                 <div class="just-input">
                                    <button type="submit" class="for-register-button">
                                        {{ __('Log In') }}
                                    </button><br/>
                                 </div>
                                 <div class="forhrdiv"><span class="forhrr"></span>OR <span class="forhrr"></span> </div>
                                 <div class="forgotpassword">
                                    @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}">
                                            {{ __('Forgot password?') }}
                                        </a>
                                 </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="after-form-register">
        @if (Route::has('login'))
            <div class="">
                @auth
                <a href="{{ url('/home') }}" class="">Home</a>


                @else
                   <span>Don't have an account? <a href="{{ route('register') }}" class="registerwelcomepage">Sign Up</a></span>
                
                @endauth
            </div>
        @endif
@endsection
