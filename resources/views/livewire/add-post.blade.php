<div>

    <!-- resources/views/livewire/add-post.blade.php -->

<div class="card">
    <div class="card-body">
        <!-- Livewire Form -->
        <form wire:submit.prevent="savePost" method="GET">
            @csrf
            <div class="mb-3">
                <label for="postTitle" class="form-label">Post title</label>
                <input wire:model="postTitle" type="text" class="form-control" id="postTitle" placeholder="Enter your post title">
                @error('postTitle') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3" wire:ignore>
                <label for="postContent" class="form-label">Post content</label>
                <textarea  wire:model.defer="postContent" class="form-control" id="postContent" name="postContent" cols="6" rows="10" placeholder="Content.."></textarea>
                @error('postContent') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="postCategory" class="form-label">Post Category</label>
                <select wire:model="postCategory" class="form-select" id="postCategory">
                    <option value="">--- No Selected ---</option>
                    @foreach (\App\Models\Subcategory::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->subcategory_name }}</option>
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
                @if($featuredImage)
                    <img src="{{ $featuredImage->temporaryUrl() }}" alt="" class="img-thumbnail" id="image-previewer">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Save Post</button>
        </form>
        <!-- End Livewire Form -->
    </div>
</div>


</div>
