@extends('layouts.user_type.auth')

@section('content')
<div class="container">
<div class="container">
        <h1>All Courses</h1>

        <ul>
            @foreach ($courses as $course)
                <li>
                    {{ $course->title }} - {{ $course->price }}
                    <form action="{{ route('courses.purchase', $course) }}" method="POST">
                        @csrf
                        <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="{{ env('STRIPE_KEY') }}"
                            data-amount="{{ $course->price * 100 }}"
                            data-name="{{ $course->title }}"
                            data-description="{{ $course->description }}"
                            data-image=""
                            data-locale="auto"
                            data-currency="usd">
                        </script>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>>
@include('layouts.footers.auth.footer')

@endsection