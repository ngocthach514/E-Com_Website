@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.hero')
    @include('partials.categories')
    @include('partials.featured_products')
    @include('partials.promotions')
    @include('partials.testimonials')
    @include('partials.about_us')
    @include('partials.why_choose_us')
@endsection
