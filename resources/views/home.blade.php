@extends('layouts.master')

@section('content') 
<div class="first-section">
@include('partials.main-menu-header')
@include('partials.home-slider-section')
</div>
@include('partials.home-technology-section')
@include('partials.home-case-study-section')
@include('partials.home-feature-section')
@include('partials.home-expertise-section')
@include('partials.home-contact-section')
@include('partials.home-client-testimonial-section')
@stop
	