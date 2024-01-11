<div>

    <div>
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <form class="card card-md" method="post" wire:submit.prevent="ForgotHandler()">
            <div class="card-body">
              <h2 class="card-title text-center mb-4">Forgot password</h2>
              <p class="text-muted mb-4">Enter your email address and your password will be reset and emailed to you.</p>
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter email" wire:model="email">
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </span>
                <button class="btn btn-primary w-100 mt-4" type="submit">
                    Send me new reset password
                  </button>
              </div>
              <div class="form-footer">

              </div>
            </div>
          </form>
    </div>


</div>
