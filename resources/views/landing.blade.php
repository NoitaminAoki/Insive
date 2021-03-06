@extends('layouts.master')
@section('title', 'Landing Page')
@section('body-id', 'landing-page')
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
    </div>
    @if (Auth::check())
    @endif
    <div class="landing-link">
      @auth
        <h4 class="text-white text-capitalize text-center">
          Welcome, {{Auth::user()->name}}
          <a href="{{ route('logout') }}" class="d-block mt-2 text-warning"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            logout now <i class='bx bxs-log-out' ></i>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </h4>
      @endauth
      @guest
        <a href="{{ route('login') }}">
          <span><i class='bx bx-user-plus'></i>Register</span>
          <span>or</span>
          <span>Login <i class='bx bx-log-in-circle'></i></span>
        </a>
      @endguest
    </div>
    <div class="recommend-link">
      <a href="{{ route('main.question') }}" class="text--cream">Custom your SHEET MASK!</a>
      <small>or</small>
      <a href="{{ route('catalog.default') }}" class="text--cream">buy from our catalog!</a>
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
