@extends('Backend.layouts.auth-layout')
@section('pageTitle',isset($pageTitle) ? $pageTitle : 'Register')
@section('content')

<div class="page page-center">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href=".">
            <img src="{{ asset('./Backend/dist/Logo/logo2.svg') }}" alt="Logo" class="navbar-brand-image" style="width: 1000px;">
        </a>
      </div>
     @livewire('author-register')
    </div>
  </div>

@endsection
