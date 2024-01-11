<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AuthorResetForm extends Component
{
    public $email, $token, $new_password, $confirm_new_password;

    public function mount()
    {
        $this->email = request()->email;
        $this->token = request()->token;
    }

    public function ResetHandler()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email',
            'new_password' => 'required|min:5',
            'confirm_new_password' => 'same:new_password',
        ], [
            'email.required' => 'The :attribute field is required',
            'email.email' => 'Invalid email address',
            'email.exists' => 'The :attribute is not registered',
            'new_password.required' => 'Enter new password',
            'new_password.min' => 'Minimum characters password required must be 5',
            'confirm_new_password' => 'The confirm new password and new password do not match',
        ]);

        $check_token = DB::table('password_resets')->where([
            'email' => $this->email,
            'token' => $this->token,
        ])->first();

        if (!$check_token || $this->isTokenExpired($check_token->created_at)) {
            session()->flash('fail', 'Invalid or expired password reset token');
        } else {
            User::where('email', $this->email)->update([
                'password' => Hash::make($this->new_password),
            ]);

            // Hapus token setelah digunakan
            DB::table('password_resets')->where('email', $this->email)->delete();

            $success_token = Str::random(64);
            session()->flash('success', "Your password has been updated successfully. Login with your email address {$this->email}");
            $this->redirectRoute('authorlogin', ['token' => $success_token, 'email' => $this->email]);
        }
    }

    protected function isTokenExpired($created_at)
    {
        $expirationTime = Carbon::parse($created_at)->addHours(4);
        return now()->gt($expirationTime);
    }

    public function render()
    {
        return view('livewire.author-reset-form');
    }
}
