@extends('layouts.register')

@section('content')
<div class="">
    <div class="">
        <div class="">
            <div class="">

                <div class="form-body">
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf

                        <div class="insta"><img class="" width="150px" src={{url('/imgs/instagram.png')}} alt=""></div>
                        <div> <h1 class="for-h1">Sign up to see photos and videos from your friends.</h1> </div>
                        <div class="just-input">

                            <div class="">
                                <input id="email" type="email" placeholder="Email Address"   class="register-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="just-input">

                            <div class="">
                                <input id="name" type="text" placeholder="Full Name"   class="register-form @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="just-input">

                            <div class="">
                                <input id="username" type="username" placeholder="Username"  class="register-form @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="just-input">

                            <div class="">
                                <input id="password" type="password" placeholder="Password" class="register-form @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="just-input">

                            <div class="">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="register-form" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>
                        <div class="for-h3-div"><h3 class="for-h3">People who use our service may have uploaded your contact information to Instagram. <a href="/"> Learn More</a> </h3> </div>
                        <div>
                            <h3 class="for-h3">
                                By signing up, you agree to our Terms , 
                                <a href="/">Privacy</a>  
                                <a href="/">Policy</a> and 
                                <a href="">Cookies Policy.</a>
                            </h3>
                        </div>
                        <div class="just-input">
                            <div class="">
                                <button type="submit" class="for-register-button">
                                    {{ __('Sign Up') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>

                <div class="after-form-register">
                    @if (Route::has('register'))
                        <div class="">
                            @auth
                            <a href="{{ url('/home') }}" class="">Home</a>
    
        
                            @else
                               <span>Have an account? <a href="{{ route('login') }}" style="text-decoration: none">Log In</a></span>
                            @endauth
                            
                        </div>
                    @endif
        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
