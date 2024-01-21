@extends('Backend.layouts.auth-layout')
@section('pageTitle',isset($pageTitle) ? $pageTitle : 'Forgot Password')
@section('content')

<div class="page page-center">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href=".">
            <img src="{{ asset('./Backend/dist/Logo/logo2.svg') }}" alt="Logo" class="navbar-brand-image" style="width: 1000px;">
        </a>
      </div>
     @livewire('author-forgot-form')
      <div class="text-center text-muted mt-3">
        <a href="{{ route('authorlogin') }}">Login</a> to the sign in screen.
      </div>
    </div>
  </div>
@endsection
