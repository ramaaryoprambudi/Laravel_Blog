@extends('Backend.layouts.pages-layout')
@section('pageTitle', isset($PageTitle) ? $PageTitle : 'Buat Postingan Baru')
@section('content')

<div class="page-header d-print-none">
    <div class="row align-items-center">
        <div class="col">
            <h2 class="page-title mb-3">
                Add New Post
            </h2>
        </div>
    </div>
</div>

{{-- <form action="{{ route('authorpostscreate') }}" method="POST" id="addPostForm" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="mb-3">
                        <label class="form-label">Post title</label>
                        <input type="text" class="form-control" name="post_title" placeholder="Enter your post title">
                        <span class="text-danger error-text post_title_error"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Post content </label>
                        <textarea class="form-control" name="post_content" rows="6" placeholder="Content.."></textarea>
                        <span class="text-danger error-text post_content_error"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <div class="form-label">Post Category</div>
                        <select class="form-select" name="post_category">
                            <option value="">--- No Selected ---</option>
                            @foreach (\App\Models\Subcategory::all() as $category)
                            <option value="{{ $category->id }}">{{ $category->subcategory_name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger error-text post_category_error"></span>
                    </div>
                    <div class="mb-3">
                        <div class="form-label">Add Image</div>
                        <input type="file" class="form-control" name="featured_image">
                        <span class="text-danger error-text featured_image_error"></span>
                    </div>
                    <div class="image-holder mb-2" style="max-width:250px ">
                        <img src="" alt="" class="img-thumbnail " id="image-previewer">
                    </div>
                    <button class="btn btn-primary">Save Post</button>
                </div>
            </div>
        </div>
    </div>
</form> --}}
@livewire('add-post')
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


            $('form#addPostForm').on('submit', function (e) {
                e.preventDefault();
                toastr.clear();
                var post_content = CKEDITOR.instances.postContent.getData();
                var form = this;
                var formdata = new FormData(form);
                    formdata.append('postContent',post_content);

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
                            $(form)[0].reset();
                            $('.image-holder').find('img').attr('src','');
                            CKEDITOR.instances.postContent.setData('');
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

