<div>

        <form method="post" wire:submit.prevent="UpdateDetails()">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <div class="mt-3">
                        <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Change your Name" wire:model="name">
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Change your Username" wire:model="username">
                    <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="example-text-input" placeholder="email" disabled wire:model="email">
                </div>
            </div>
           <div class="mt-2">
            <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="About me!" wire:model="aboutme">About Me!</textarea>
           </div>
           <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
        </form>
</div>
