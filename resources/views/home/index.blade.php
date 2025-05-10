@extends('layout.main')

@section('content')
<main>

    @include('sections.home-hero')
    @include('sections.why-choose-us')
    @include('sections.services', ['showStats' => false]) 
    @include('sections.featured-properties')
    @include('sections.facilities')
    @include('sections.properties')
    @include('sections.stats')
    @include('sections.bricore-motto')
    @include('sections.testimonials')
    @include('sections.frequently-asked-questions')
    @include('sections.partners')
</main>

@endsection


