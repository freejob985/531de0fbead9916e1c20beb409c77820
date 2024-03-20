@extends('frontend.layouts.master')
@section('title', $data['title'] ?? 'Home')
@section('content')
@php
// dd($data['section']);
@endphp
    @foreach ($data['section'] as $key => $section)
        @if ($section->snake_title == 'slider')
            @include('frontend.home.hero_area')
        @elseif($section->snake_title == 'featured_courses')
          @include('frontend.home.Rawdi')
        @elseif($section->snake_title == 'popular_category')
            @include('frontend.home.popular_category')
        @elseif($section->snake_title == 'latest_courses')
            @include('frontend.home.latest_courses')
        @elseif($section->snake_title == 'best_rated_courses')
            @include('frontend.home.best_rated_courses')
        @elseif($section->snake_title == 'discount_courses')
            @include('frontend.home.discount_courses')
        @elseif($section->snake_title == 'most_popular_courses')
            @include('frontend.home.most_popular_courses')
        @elseif(module('Subscription') && $section->snake_title == 'subscription_packages')
            @include('subscription::frontend.packages')
        @elseif(module('Event') && $section->snake_title == 'event')
            @include('event::frontend.events')
        @elseif($section->snake_title == 'become_an_instructor')
            @include('frontend.home.become_an_instructor')
        @elseif($section->snake_title == 'testimonials')
            @include('frontend.home.testimonials')
        @elseif($section->snake_title == 'blogs')
            @include('frontend.home.blogs')
        @elseif($section->snake_title == 'brands')
            @include('frontend.home.brands')
        @elseif($section->snake_title == 'Rawdi')
          @include('frontend.home.Rawdi')
        @elseif($section->snake_title == 'Basic')
          @include('frontend.home.Basic')
    @elseif($section->snake_title == 'preparatory')
          @include('frontend.home.preparatory')
   @elseif($section->snake_title == 'secondary')
          @include('frontend.home.secondary')
  @elseif($section->snake_title == 'Bilingualschools')
          @include('frontend.home.Bilingualschools')
        @endif


    @endforeach

@endsection
@section('scripts')
@endsection
