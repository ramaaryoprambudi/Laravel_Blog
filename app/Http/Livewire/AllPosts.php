<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class AllPosts extends Component
{
    use WithPagination;
    public $perpage = 4;
    public $search = null;
    public $author = null;
    public $category = null;
    public $orderBy = null;

    public function mount(){
        $this->resetPage();
    }

    public function updatingSearch(){
        $this->resetPage();
    }
    public function updatingCategory(){
        $this->resetPage();
    }
    public function updatingAuthor(){
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.all-posts',[
        'posts'=> auth()->user()->type == 1 ?
                  Post::search(trim($this->search))
                      ->when($this->category,function($query){
                        $query->where('category_id',$this->category);
                      })
                      ->when($this->author,function($query){
                        $query->where('author_id',$this->author);
                      })
                      ->when($this->orderBy,function($query){
                        $query->orderBy('id',$this->orderBy);
                      })
                      ->paginate($this->perpage) :
                  Post::search(trim($this->search))
                  ->when($this->category,function($query){
                        $query->where('category_id',$this->category);
                      })
                      ->where('author_id',auth()->id())
                      ->when($this->orderBy,function($query){
                        $query->orderBy('id',$this->orderBy);
                      })
                      ->paginate($this->perpage)
        ]);
    }
    public function editPost(){
       return redirect()->route('authorpostsedit-Post');
    }
    public function deletPost($id){
        //dd('Delete Post') ;
        $post = Post::findOrFail($id);
        if($post){
            $post->delete();
            toastr()->success('Post deleted successfully');
        }else{
            toastr()->error('Something went wrong to delete the post');
        }
    }
}
