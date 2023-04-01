@extends('layouts.user_type.auth')

@section('content')
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-10 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto position-center">
            <div class="avatar avatar-xl position-center">
                <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                User Name: {{$admindata->name}}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                CEO / Co-Founder
              </p>
              <hr>
              <h5 class="mb-1">
                User email: {{$admindata->email}}
              </h5>
              <hr>
              <h5 class="mb-1">
                User Number: {{$admindata->contact}}
              </h5>
              <hr>
              <a href="" button type="button" class="btn btn-dark">Edit Profile</button></a>
            </div>
          </div>
        </div>
    </div>
@include('layouts.footers.auth.footer')

@endsection
