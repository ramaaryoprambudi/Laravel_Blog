@extends('Backend.layouts.pages-layout')
@section('pageTitle',isset($PageTitle) ? $PageTitle : 'Blog Saya')
@section('content')

<div class="page-header d-print-none">
    <div class="row align-items center">
        <div class="col">
            <h2 class="page-title">
                All Posts
            </h2>
        </div>
    </div>
</div>

@livewire('all-posts')

@endsection
