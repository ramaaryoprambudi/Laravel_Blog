<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BlogSocialMedia;

class AuthorBlogSocialMediaForm extends Component
{
    public $blog_social_media;
    public $instagram_url,$tiktok_url,$donation_url,$linkedin_url;

    public function mount(){
        $this->blog_social_media = BlogSocialMedia::find(1);
        $this->instagram_url = $this->blog_social_media->bsm_instagram;
        $this->tiktok_url = $this->blog_social_media->bsm_tiktok;
        $this->donation_url = $this->blog_social_media->bsm_donation;
        $this->linkedin_url = $this->blog_social_media->bsm_linkedin;
    }

    public function updateBlogSocialMedia(){
        $this->validate([
        'instagram_url' => 'nullable|url',
        'tiktok_url' => 'nullable|url',
        'donation_url' => 'nullable|url',
        'linkedin_url' => 'nullable|url',
    ]);

    $update = $this->blog_social_media->update([
    'bsm_instagram'=> $this->instagram_url,
    'bsm_tiktok'   =>$this->tiktok_url,
    'bsm_donation' =>$this->donation_url,
    'bsm_linkedin' =>$this->linkedin_url
    ]);

    if($update){
        toastr()->success('Social Media Url have been successfully update','success');
    }else{
        toastr()->error('Something went wrong!','error');
    }

    }

    public function render()
    {
        return view('livewire.author-blog-social-media-form');
    }
}
