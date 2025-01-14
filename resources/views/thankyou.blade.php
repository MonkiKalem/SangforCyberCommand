@extends('layouts.app')

@section('title', 'Thank You')

@section('content')
<div class="container text-center mt-5">
    <h1>Thank You for Your Interest</h1>
    <p>Our team will contact you within 5 working days.</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Back to Homepage</a>
</div>
@endsection
