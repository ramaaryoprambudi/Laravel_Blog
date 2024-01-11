<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\File;

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

}
