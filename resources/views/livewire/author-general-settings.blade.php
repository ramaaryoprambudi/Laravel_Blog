<div>

    <form method="POST" wire:submit.prevent="updateGeneralSettings">
        <div class="row">
            <div class="col-md-12">
            <div class="mb-3">
                <label for="" class="form-label">Blog Name</label>
                <input type="text" class="form-control w-100" placeholder="Enter your blog name" wire:model="blog_name">
                <span class="text-danger">@error('blog_name'){{ $message }} @enderror</span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Blog Email</label>
                <input type="text" class="form-control w-100" placeholder="Enter your blog email" wire:model="blog_email">
                <span class="text-danger">@error('blog_email'){{ $message }} @enderror</span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Blog Description</label>
                <textarea class="form-control w-100" name="" id="" cols="3" rows="3" wire:model="blog_description"></textarea>
                <span class="text-danger">@error('blog_description'){{ $message }} @enderror</span>
            </div>
            <button class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </form>


</div>
