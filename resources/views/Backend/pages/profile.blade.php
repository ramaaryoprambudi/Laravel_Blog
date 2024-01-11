@extends('Backend.layouts.pages-layout')
@section('PageTitle', isset($PageTitle) ? $PageTitle : 'Profile' )
@section('content')

<div class="container ms-1 mt-3 mt-md-0">
@livewire('author-profile-header')
</div>

<div class="container-fluid mt-3 mt-sm-0 w-100">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTabs">
                <li class="nav-item">
                    <a class="nav-link active" id="account-details-tab" data-bs-toggle="tab" href="#account-details">Account Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="change-password-tab" data-bs-toggle="tab" href="#tabs-change-password">Change Password</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active show" id="account-details">
                   @livewire('author-personal-details')
                </div>
                <div class="tab-pane" id="tabs-change-password">
                    @livewire('author-change-password-form')
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var myTabs = new bootstrap.Tab(document.getElementById('account-details-tab'));
                myTabs.show();
            });
        </script>

    </div>
</div>

@endsection

@push('scripts')
<script>
    $('#changeAuthorFile').ijaboCropTool({
          preview : '',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['CROP','QUIT'],
          buttonsColor:['#30bf7d','#ee5155', -15],
          processUrl:'{{ route("authorchange-profile-picture") }}',
          withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
             //alert(message);
             Livewire.emit('updateAuthorProfileHeader');
             Livewire.emit('updateAuthorTopHeader');
             //toastr.success(message,status);
          },
          onError:function(message, element, status){
            alert(message);
            //toastr.error(message);
          }
    });
</script>
@endpush
