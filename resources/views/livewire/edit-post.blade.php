<div>
    <form  wire:submit.prevent='updatePost' method="POST" id="editPostForm" >
        @csrf
        <div class="mb-3">
            <label for="postTitle" class="form-label">Post title</label>
            <input wire:model="postTitle" type="text" class="form-control" id="postTitle" placeholder="Enter your post title" value="{{ $post->post_title }}">
            @error('postTitle') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3" wire:ignore>
            <label for="postContent" class="form-label">Post content</label>
            <textarea  wire:model.defer="postContent" class="form-control" id="postContent" name="postContent" cols="6" rows="10" placeholder="Content..">{!! $post->post_content !!}</textarea>
            @error('postContent') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="postCategory" class="form-label">Post Category</label>
            <select wire:model="postCategory" class="form-select" id="postCategory">
                <option value="">--- No Selected ---</option>
                @foreach (\App\Models\Subcategory::all() as $category)
                    <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->subcategory_name }}</option>
                @endforeach
            </select>
            @error('postCategory') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="featuredImage" class="form-label">Add Image</label>
            <input wire:model="featuredImage" type="file" class="form-control" id="featuredImage" name="featured_image">
            @error('featuredImage') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="image-holder mb-2" style="max-width: 250px">
            <img src="./images/post_image/{{ $post->featured_image }}" alt="" class="img-thumbnail" id="image-previewer">
            {{-- @if($featuredImage)

            @endif --}}
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
