@extends('layouts.user_type.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('My Courses') }}</div>

                    <div class="card-body">
                        @if($courses->count() > 0)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Price') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{ $course->title }}</td>
                                        <td>{{ $course->price }}</td>
                                        <td>
                                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">{{ __('View') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>{{ __('You have not purchased any courses yet.') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layouts.footers.auth.footer')

@endsection
