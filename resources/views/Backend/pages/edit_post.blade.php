<!-- resources/views/edit-post.blade.php -->

@extends('Backend.layouts.pages-layout')
@section('PageTitle', isset($PageTitle) ? $PageTitle : 'Edit Post')
@section('content')

<div class="page-header d-print-none">
    <div class="row align-items-center">
        <div class="col">
            <h2 class="page-title mb-3">
                Edit Post
            </h2>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        @livewire('edit-post')
    </div>
</div>

@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- <script>
        ClassicEditor
            .create( document.querySelector( '#postContent' ) )
            .catch( error => {
                console.error( error );
            } );
    </script> --}}
    <script>
        $(document).ready(function () {
            $('input[type="file"][name="featured_image"]').change(function () {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) {
                    $("#image-previewer img").remove();
                }
                if (/^image/.test(files[0].type)) {
                    var reader = new FileReader();
                    reader.readAsDataURL(files[0]);
                    reader.onloadend = function () {
                        $("#image-previewer img").remove();
                        $('<img id="image" width="100%" height="100%">')
                            .attr("src", this.result)
                            .appendTo(".image-holder");
                    };
                }
            });


            $('form#editPostForm').on('submit', function (e) {
                e.preventDefault();
                toastr.clear();
                var form = this;
                var formdata = new FormData(form);

                $.ajax({
                    url: $(form).attr('action'),
                    method: 'POST',
                    type: 'POST',
                    data: formdata,
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function () {
                        $(form).find('span.error-text').text('');
                    },
                    success: function (response) {
                        toastr.clear();
                        if (response.code == 1) {
                            toastr.success(response.msg);
                        } else {
                            toastr.error(response.msg);
                        }
                    },
                    error: function (xhr, status, error) {
                        toastr.clear();
                        if (xhr.status == 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function (key, value) {
                                $(form).find('span.' + key + '_error').text(value[0]);
                            });
                        } else {
                            toastr.error('Something went wrong. Please try again later.');
                        }
                    }
                });
            });
        });
    </script>
@endpush

