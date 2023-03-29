@extends('layouts.user_type.guest')

@section('content')
<div class="bg_image" style="background-image: url('../assets/img/curved-images/bg1.png'); background-size: 100% 100%; backgound: cover ">
<div class="page-header min-vh-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                <div class="card card-plain mt-10">
                    <div class="card-header pb-0 text-center bg-transparent">
                        <img src="{{asset('logo/deepability.png')}}"  width="250" height="5" class="position-center deepability mx-auto " alt="">
                    </div>
                    @if($errors->any())
                        <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">

                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    <div class="card-body">
                        <form role="form text-left" method="POST" action="{{ route('password.email') }}">
                       
                            @csrf
                            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <div class="">
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                    @error('email')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Recover your password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
