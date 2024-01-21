<div>


    <form class="card card-md" method="post" wire:submit.prevent="register()">
        @csrf
        <div class="card-body">
          <h2 class="card-title text-center mb-4">Create new account</h2>
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter name" wire:model="name">
            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
          </div>
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="Enter Username" wire:model="username">
            <span class="text-danger">@error('username'){{ $message }}@enderror</span>
          </div>
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Enter email" wire:model="email">
            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <div class="input-group input-group-flat">
                <input type="password" class="form-control" placeholder="Password" wire:model="password" id="password">

                <span class="input-group-text" style="cursor: pointer;" onclick="togglePasswordVisibility()" id="togglePassword">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="2"></circle><path d="M2 12s3-8 10-8s10 8 10 8s-3 8-10 8s-10-8-10-8"></path></svg>
                </span>
            </div>
            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
        </div>
          <div class="mb-3">
            <label class="form-check">
              <input type="checkbox" class="form-check-input"  wire:model="agreeTerms">
              <span class="form-check-label">Agree the <a href="{{ route('authortermsofservice') }}" tabindex="-1">terms and policy</a>.</span>
              <span class="text-danger">@error('agreeTerms') <span>{{ $message }}</span> @enderror</span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Create new account</button>
          </div>
        </div>
        <div class="text-center text-muted mt-3">
            Already have account? <a href="{{ route('authorlogin') }}" tabindex="-1">Sign in</a>
        </div>
    </form>
</div>

@push('scripts')
    <!-- Tambahkan ini di bawah form atau di dalam file JavaScript terpisah -->
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var eyeIcon = document.getElementById('togglePassword');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="2"></circle><path d="M2 12s3-8 10-8s10 8 10 8s-3 8-10 8s-10-8-10-8"></path></svg>';
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 12s-3-8-10-8s-10 8-10 8s3 8 10 8s10-8 10-8"></path></svg>';
        }
    }
</script>

@endpush
