<div>

    <form method="POST" wire:submit.prevent="updateBlogSocialMedia()">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Instagram</label>
                <input type="text" class="form-control" placeholder="Instagram Url" wire:model="instagram_url">
                <span class="text-danger">@error('instagram_url'){{ $message }}@enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Tiktok</label>
                <input type="text" class="form-control" placeholder="Tiktok Url" wire:model="tiktok_url">
                <span class="text-danger">@error('tiktok_url'){{ $message }}@enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Donation</label>
                <input type="text" class="form-control" placeholder="Donation Url" wire:model="donation_url">
                <span class="text-danger">@error('donation_url'){{ $message }}@enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Linkedin</label>
                <input type="text" class="form-control" placeholder="Linkedin Url" wire:model="linkedin_url">
                <span class="text-danger">@error('linkedin_url'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save Sosmed</button>
    </form>

</div>
