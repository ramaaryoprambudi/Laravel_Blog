@extends('Backend.layouts.pages-layout')
@section('pageTitle',isset($PageTitle) ? $PageTitle : 'Settings')
@section('content')
<div class="row align-items center">
    <div class="col">
        <h2 class="page-title">
            Settings
        </h2>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a
                    href="#tabs-home-8"
                    class="nav-link active"
                    data-bs-toggle="tab"
                    aria-selected="true"
                    role="tab">General Settings</a>
            </li>
            <li class="nav-item" role="presentation">
                <a
                    href="#tabs-activity-8"
                    class="nav-link"
                    data-bs-toggle="tab"
                    aria-selected="false"
                    tabindex="-1"
                    role="tab">Social Media</a>
            </li>
        </ul>
    </div>
    <div class="card-body ">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="tabs-home-8" role="tabpanel">
                <div>
                    @livewire('author-general-settings')
                </div>
            </div>

            <div class="tab-pane fade" id="tabs-activity-8" role="tabpanel">
                <div>
                    @livewire('author-blog-social-media-form')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

