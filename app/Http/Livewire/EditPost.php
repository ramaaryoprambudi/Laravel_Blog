<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Http\Request;

class EditPost extends Component
{
    public $postTitle;
    public $postContent;
    public $postCategory;
    public $featuredImage;

    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->postTitle = $post->post_title;
        $this->postContent = $post->post_content;
        $this->postCategory = $post->category_id;
    }

    public function editPost(Request $request){
        if(!request()->post_id){
            return abort(404);
        }else{
            $post = Post::find(request()->post_id);
            $data = [
                'post' => $post,
                'pageTtitle' => 'Edit Post',
            ];
            return view('Backend.pages.edit_post',);
        }
    }


    public function render()
    {
        return view('livewire.edit-post');
    }
}
