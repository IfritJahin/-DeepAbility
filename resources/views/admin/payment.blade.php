@extends('admin.layouts.user_type.auth')

@section('content')
<h2 clas="mb-4">Admin DASHBOARD</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addsubjectModal">
  ADD COURSES
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Courses</th>
      <th scope="col">Payment Way</th>
      <th scope="col">Prices</th>

    </tr>
  </thead>
  <tbody>
    @if(count((array)$payments) > 0)
        @foreach($payments as $subject)
          <tr>
          <td>{{$subject->id}}</td>
            <td>{{$subject->name}}</td>
            <td>{{$subject->subject}}</td>
            <td>{{$subject->prices}}</td>
            </td>
            <td>
               @if($subject->plan !=0)
                   <span style= "color: Red">BKASH</span>
               @else
                   <span style= "color: Green">NAGAD</span>
               @endif
            </td>
          </tr>
        @endforeach
    @else
    <tr>
      <td colspan="4">Course not found!</td>
    </tr>
    @endif
  </tbody>
</table>
@endsection
@push('admin.dashboard')

 
@endpush