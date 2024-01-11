<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class AuthorPersonalDetails extends Component
{
    public $author;
    public $name,$username,$email,$aboutme;

    public function mount(){
        $this->author= User::find(auth('web')->id());
        $this->name= $this->author->name;
        $this->username= $this->author->username;
        $this->email= $this->author->email;
        $this->aboutme= $this->author->aboutme;
    }

    public function UpdateDetails(){
       $this->validate([
        'name'=>'required|string|max:50',
        'username'=>'required|unique:users,username,'.auth('web')->id(),
        ]);

        User::where('id',auth('web')->id())->update([
            'name'=>$this->name,
            'username' =>$this->username,
            'email'=>$this->email,
            'aboutme'=>$this->aboutme,
        ],
        toastr()->success('Data has been saved successfully!')
        );

        $this->emit('updateAuthorProfileHeader');
        $this->emit('updateAuthorTopHeader');



    }


    public function render()
    {
        return view('livewire.author-personal-details');
    }
}
