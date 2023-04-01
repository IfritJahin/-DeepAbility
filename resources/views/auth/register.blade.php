@extends('layouts.user_type.guest')

@section('content')
<div class="bg_image" style="background-image: url('../assets/img/curved-images/bg1.png');background-size: 100% 100%; ">
  <section class="">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11  "  >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
            <p class="text-lead text-white">Your success and happiness lies in you. Register Now!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-5 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class=" text-center pt-0">
               <img src="{{asset('logo/deepability.png')}}"  width="260" height="5" class="deepability mx-auto " alt="">
            </div>
            <div class="card-body">
              <form role="form text-left" method="POST" action="{{ route('register')}}">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" name="name" id="name" aria-label="Name" aria-describedby="name" value="{{ old('name') }}">
                  @error('name')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Username" name="username" id="username" aria-label="username" aria-describedby="username" value="{{ old('username') }}">
                  @error('username')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div> 
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Contact" name="contact" id="contact" aria-label="contact" aria-describedby="contact" value="{{ old('contact') }}">
                  @error('contact')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div> 
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" name="email" id="email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}">
                  @error('email')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" name="password" id="password" aria-label="Password" aria-describedby="password-addon">
                  @error('password')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password confirmation" name="password_confirmation" id="password_confirmation" aria-label="Password" aria-describedby="password-addon">
                  @error('password_confirmation')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-check form-check-info text-left">
                  <input class="form-check-input" type="checkbox" name="agreement" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                  @error('agreement')
                    
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign up</button>
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="login" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
 


@endsection

