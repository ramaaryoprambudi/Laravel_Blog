<?php
// app/Http/Livewire/AddPost.php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Subcategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class AddPost extends Component
{
    use WithFileUploads;

    public $postTitle;
    public $postContent;
    public $postCategory;
    public $featuredImage;

    public function render()
    {
        $categories = Subcategory::all();
        return view('livewire.add-post', compact('categories'));
    }

    public function savePost()
{
    $validator = Validator::make(
        ['featuredImage' => $this->featuredImage],
        ['featuredImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:min_width=100,min-width=100,max_width=1000,max_height=1000']
    );

    if ($validator->fails()) {
        toastr()->error($validator->errors()->first('featuredImage'));
        return;
    }
    $path = "images/post_image/";
    $newFilename = time() . '_' . $this->featuredImage->getClientOriginalName();

    // Buat direktori jika belum ada
    Storage::disk('public')->makeDirectory($path);
    $fullPath = $path . $newFilename;
    $upload = Storage::disk('public')->put($fullPath, $this->featuredImage->get());

if ($upload) {
    $post = new Post();
    $post->author_id = auth()->id();
    $post->category_id = $this->postCategory;
    $post->post_title = $this->postTitle;
    $post->post_content = $this->postContent;
    $post->featured_image = $newFilename;
    $post->save();

    toastr()->success('New post has been created successfully');

    $this->reset(); // Bersihkan input setelah menyimpan

} else {
    toastr()->error('Something went wrong creating post');
}

}

}
