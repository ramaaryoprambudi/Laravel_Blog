<div>

    <form method="post" wire:submit.prevent="ChangePasswordForm()">
        @csrf
        <div class="row">
            <div class="mb-3">
                <div class="mt-3">
                    <label class="form-label">Current Password</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="Current Password" wire:model="current_password">
                <span class="text-danger">@error('current_password'){{ $message }}@enderror</span>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">New Password</label>
                <input type="password" class="form-control" name="example-text-input" placeholder="New Password" wire:model="new_password">
                <span class="text-danger">@error('new_password'){{ $message }}@enderror</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" name="example-text-input"  placeholder="Retype Password" wire:model="confirm_new_password">
                <span class="text-danger">@error('confirm_new_password'){{ $message }}@enderror</span>
            </div>
        </div>
       <button type="submit" class="btn btn-primary ">Changes Password</button>
    </form>

</div>
