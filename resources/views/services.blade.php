@extends('layouts.master')

@section('content')
<div class="first-section sub-baner">
@include('partials.main-menu-header')
    <div class="container">
      <div class="row banner-text">
        <div class="col-sm-12 text-center">
          <h1>Services</h1>
          <h3>Enterprise Apps Design & Development</h3>
        </div>
      </div>     
    </div>
</div>
@include('partials.services-our-service')
@stop
				
