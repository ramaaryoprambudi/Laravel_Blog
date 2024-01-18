<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class AllPosts extends Component
{
    use WithPagination;
    public $perpage = 1;

    public function mount(){
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.all-posts',[
        'posts'=> auth()->user()->type == 1 ?
                  Post::paginate($this->perpage) :
                  Post::where('author_id',auth()->id())->paginate($this->perpage)
        ]);
    }
}
