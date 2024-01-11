<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class AuthorChangePasswordForm extends Component
{
    public $author;
    public $current_password, $new_password, $confirm_new_password;



    public function ChangePasswordForm()
    {
        $this->validate([
            'current_password' => [
                'required',
                function ($attribute, $value, $fail) {
                    $user = User::find(auth('web')->id());
                    if (!$user || !Hash::check($value, $user->password)) {
                        return $fail(__('Password Saat Ini Salah'));
                    }
                },
            ],
            'new_password' => 'required|min:5|max:20',
            'confirm_new_password' => 'same:new_password',
        ], [
            'new_password.required' => 'Masukkan kata sandi baru Anda',
            'confirm_new_password' => 'Konfirmasi kata sandi harus sama dengan kata sandi baru',
        ]);

        $user = User::find(auth('web')->id());
        $user->update([
            'password' => Hash::make($this->new_password),
        ]);

        toastr()->success('Data berhasil disimpan!');
    }

    public function render()
    {
        return view('livewire.author-change-password-form');
    }
}
