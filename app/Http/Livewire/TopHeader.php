<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class TopHeader extends Component
{
    public $author;

    protected $listeners = [
        'updateAuthorTopHeader' => '$refresh'
    ];

    public function mount(){
        $this->author= User::find(auth('web')->id());
    }
    public function render()
    {
        return view('livewire.top-header');
    }
}
