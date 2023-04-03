@extends('admin.layouts.user_type.guest')

@section('content')
<div class="bg_image" style="background-image: url('../assets/img/curved-images/bg1.png');background-size: 100% 100%; backgound: cover ">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain md-10">
                <div class="card-header pb-0 text-center bg-transparent">
                  <img src="{{asset('logo/deepability.png')}}"  width="250" height="5" class="position-center deepability mx-auto " alt="">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                  <h4 class="font-weight-bolder text-info text-white">Admin LogIn</h4>
                </div>
                
                <div class="card-body">
                  <form role="form" method="POST" action="{{ route('admin.login') }}">
                  
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="email" value="email" aria-label="email" aria-describedby="email-addon">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="secret" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label text-white" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <small class=" text-white">Forgot you password? Reset you password 
                  <a href="{{ route('admin.password.request') }}" class="text-info text-gradient font-weight-bold">here</a>
                </small>
                  <p class="text-white mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="{{ route('admin.register') }}" class="text-info text-gradient font-weight-bold">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-10">
              <div class=" position-absolute top-0 h-120 d-md-block d-none me-n8">
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
