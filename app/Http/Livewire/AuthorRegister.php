<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AuthorRegister extends Component
{
    public $name, $email, $username, $password;
    public $agreeTerms = false;

    public function register()
    {
        $this->validate([
            'name' => 'required|min:5|max:30',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:6|max:12|unique:users,username',
            'password' => 'required|min:6|max:10',
            'agreeTerms' => 'required|accepted',
        ], [
            'name.required' => 'The name field is required.',
            'name.min' => 'The name must be at least :min characters.',
            'name.max' => 'The name may not be greater than :max characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already taken.',
            'username.required' => 'The username field is required.',
            'username.min' => 'The username must be at least :min characters.',
            'username.max' => 'The username may not be greater than :max characters.',
            'username.unique' => 'This username is already taken.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least :min characters.',
            'password.max' => 'The password may not be greater than :max characters.',
            'agreeTerms.required' => 'You must agree to the terms and conditions.',
            'agreeTerms.accepted' => 'You must agree to the terms and conditions.',
        ]);

        // Simpan data user ke dalam database
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'password' => bcrypt($this->password),
        ]);

        // Reset form setelah registrasi berhasil
        $this->reset();

        return redirect()->route('authorlogin')->with('success', 'Registration successful! Please log in.');
    }

    public function render()
    {
        return view('livewire.author-register');
    }
}
