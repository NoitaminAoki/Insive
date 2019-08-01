@extends('layouts.master')
@section('title', 'Landing Page')
@section('content')
<main>
  <div class="container">
    <div id="landing-logo-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('img/logo/logo.png') }}" height="200" alt="Slideshow Image">
          <h1>Insive</h1>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/muka/skin_acne.png') }}" height="400" alt="Slideshow Image">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/muka/skin_oily.png') }}" height="400" alt="Slideshow Image">
        </div>
      </div>
      <a class="carousel-control-prev" href="#landing-logo-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#landing-logo-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    @if (Auth::check())
    <h4 class="text-white text-capitalize text-center">Welcome, {{Auth::user()->name}}</h4>
    @endif
    <div class="landing-link">
      @if (Auth::check())
      <a href="{{ route('main.question') }}">
        <span>Start Quiz <i class='bx bx-log-in-circle'></i></span>
      </a>
      @else
      <a href="{{ route('login') }}">
        <span><i class='bx bx-user-plus'></i>Register</span>
        <span>or</span>
        <span>Login <i class='bx bx-log-in-circle'></i></span>
      </a>
      @endif
    </div>
    <div class="recommend-link">
      <a href="">Custom your SHEET MASK!</a>
      <small>or</small>
      <a href="{{ route('catalog.default') }}">buy from our catalog!</a>
    </div>
  </div>
</main>
@endsection
@section('script')
<script>
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 4000
    })
  });
</script>
@endsection
