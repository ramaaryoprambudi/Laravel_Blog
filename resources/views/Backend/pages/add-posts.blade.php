@extends('Backend.layouts.pages-layout')
@section('PageTitle', isset($PageTitle) ? $PageTitle : 'Add New Post')
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

<form action="" method="post" id="addPostForm">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="mb-3">
                        <label class="form-label">Post title</label>
                        <input type="text" class="form-control" name="post_title" placeholder="Enter your post title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Post content </label>
                        <textarea class="form-control" name="post_content" rows="6" placeholder="Content.."></textarea>
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
                    </div>
                    <div class="mb-3">
                        <div class="form-label">Add Image</div>
                        <input type="file" class="form-control" name="featured_image">
                    </div>
                    <div class="image-holder mb-2" style="max-width:250px">
                        <img src="" alt="" class="img-thumbnail" id="image-previewer" data-ijabo-default-img=''>
                    </div>
                    <button class="btn btn-primary">Save Post</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

@push('scripts')
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
    });
</script>
@endpush
