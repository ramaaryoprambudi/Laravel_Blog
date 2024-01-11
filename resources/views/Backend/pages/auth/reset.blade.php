@extends('Backend.layouts.auth-layout')
@section('pageTitle',isset($pageTitle) ? $pageTitle : 'Reset Password')
@section('content')
<div class="page page-center">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand "><img src="{{ asset('/Backend/static/logo.svg') }}" height="36" alt="trest" /></a>
        </div>

        @livewire('author-reset-form')
      </div>
  </div>
@endsection

