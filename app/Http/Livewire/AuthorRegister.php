<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AuthorRegister extends Component
{
    public $name,$email,$username,$password;
    public $agreeTerms = false;

    public function register(){
    $this->validate([
        'name' =>'required|min:5|max:30',
        'email' =>'required|email|unique:users,email',
        'username' =>'required|min:6|max:12|unique:users,username',
        'password' =>'required|min:6|max:10',
        'agreeTerms' =>'required|accepted'
    ]);
    }

    public function render()
    {
        return view('livewire.author-register');
    }

}
