<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\File;

use \App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    public function index(Request $request){
        return view('Backend.pages.home');
    }

    public function logout (){
        Auth::guard('web')->logout();
        return redirect()->route('authorlogin');
    }

    public function Resetform(Request $request,$token = null){
      $data = [
        'PageTitle'=>'Reset Password'
        ];
        return view('Backend.pages.auth.reset',$data)->with(['token'=>$token , 'email'=>$request->email]);
    }

    public function ChangeProfilePicture(Request $request){
        $user = User::find(auth('web')->id());
        $path = 'Backend/dist/img/authors/';
        $file = $request->file('file');
        $old_picture = $user->getAttributes()['picture'];
        $file_path=$path.$old_picture;
        $new_picture_name ='Default-IMG-'.$user->id.time().rand(1,100000).'.jpg';

        if($old_picture != null && File::exists(public_path($file_path))){
            File::delete(public_path($file_path));
        }
        $upload = $file->move(public_path($path), $new_picture_name);

        if($upload){
            $user->update([
                'picture'=>$new_picture_name
            ]);
            return response()->json(['status' => 1,'msg'=>'Your picture has been updated successfully']);
        }else{
            return response()->json(['status' =>0,'Something went wrong!']);
        }
    }

   /**  public function createPost(Request $request){
    $request->validate([
        'post_title' => 'required|unique:posts,post_title',
        'post_content' => 'required',
        'post_category' => 'required|exists:sub_categories,id',
        'featured_image' => 'required|mimes:jpg,jpeg,png|max:1024',
    ]);

    try {
        if ($request->hasFile('featured_image')) {
            $path = "images/post_image/";
            $file = $request->file('featured_image');
            $filename = $file->getClientOriginalName();
            $new_filename = time(). '_'.$filename;

            $upload = Storage::disk('public')->put($path, $file->get());

            if ($upload) {
                $post = new Post();
                $post->author_id = auth()->id();
                $post->category_id = $request->post_category;
                $post->post_title = $request->post_title;
                $post->post_slug = Str::slug($request->post_title);
                $post->post_content = $request->post_content;
                $post->featured_image = $new_filename;
                $saved = $post->save();

                if ($saved) {
                    return response()->json(['code' => 1, 'msg' => 'New post has been created successfully']);
                } else {
                    return response()->json(['code' => 3, 'msg' => 'Something went wrong saving post data']);
                }
            } else {
                return response()->json(['code' => 3, 'msg' => 'Something went wrong uploading image']);
            }
        }
    } catch (\Exception $e) {
        return response()->json(['code' => 3, 'msg' => 'Error: ' . $e->getMessage()]);
    }
}
*/

    public function editPost(Request $request){
        if(!request()->post_id){
            return abort(404);
        }else{
            $post = Post::find(request()->post_id);
            $data = [
                'post' => $post,
                'pageTtitle' => 'Edit Post',
            ];
            return view('Backend.pages.edit_post',$data);
        }
    }

    public function update(Request $request)
{
    if (! $request->post_id) {
        return abort(404);
    } else {
        $request->validate([
            'post_title' => 'required|unique:posts,post_title,' . $request->post_id,
            'post_content' => 'required',
            'post_category' => 'required|exists:sub_categories,id',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = Post::find($request->post_id);
        $post->category_id = $request->post_category;
        $post->post_content = $request->post_content;
        $post->post_title = $request->post_title;

        if ($request->hasFile('featured_image')) {
            $imageName = time().'.'.$request->featured_image->extension();
            $request->featured_image->storeAs('public/images/post_image', $imageName);
            $post->featured_image = $imageName;
        }

        $saved = $post->save();

        if ($saved) {
            return response()->json(['code' => 1, 'msg' => 'Post has been updated successfully']);
        } else {
            return response()->json(['code' => 3, 'msg' => 'Something went wrong while updating the post']);
        }
    }
}

}
