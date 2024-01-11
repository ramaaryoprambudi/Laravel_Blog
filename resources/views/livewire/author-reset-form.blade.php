<div>
    <div>
        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif

        @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <form method="post" wire:submit.prevent="ResetHandler()" autocomplete="off">
            <div class="card card-md">
                <div class="card-body">
                  <h2 class="h2 text-center mb-4">Reset Password Account</h2>
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="text" class="form-control" placeholder="Enter Your Email Address" autocomplete="off" wire:model='email' disabled>
                      <div class="text-danger">@error('email'){{ $message }}@enderror</div>
                    </div>
                    <div class="mb-2">
                      <label class="form-label">
                        New Password
                      </label>
                      <div class="input-group input-group-flat">
                        <input type="password" class="form-control" placeholder="New password" autocomplete="off" wire:model="new_password">
                        <span class="input-group-text">
                          <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                          </a>
                        </span>
                      </div>
                      <div class="text-danger">@error('new_password'){{ $message }}@enderror</div>

                    </div>

                    <div class="mb-2">
                        <label class="form-label">
                          Confirm Password
                        </label>
                        <div class="input-group input-group-flat">
                          <input type="password" class="form-control" placeholder="Confirm password" autocomplete="off" wire:model="confirm_new_password">
                          <span class="input-group-text">
                            <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                            </a>
                          </span>
                        </div>
                        <div class="text-danger">@error('confirm_new_password'){{ $message }}@enderror</div>
                      </div>
                    <div class="mb-2">
                      <label class="form-check">
                       <a href="{{ route('authorlogin') }}">Back to login</a>
                      </label>
                    </div>
                    <div class="form-footer">
                      <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                    </div>
                </div>
                </div>
              </div>
            </form>

    </div>

</div>
