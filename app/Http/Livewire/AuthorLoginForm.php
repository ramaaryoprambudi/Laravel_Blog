<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthorLoginForm extends Component
{
    public $login_id,$password;
    public $returnUrl;

    public function mount(){
        $this->returnUrl = request()->returnUrl;
    }

    public function LoginHandler(){


        $fieldtype = filter_var($this->login_id,FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if($fieldtype == 'email'){
            $this->validate([
            'login_id'=>'required|email|exists:users,email',
            'password'=>'required|min:5'
        ],[
            'login_id.required'=>'Email or Username is required',
            'login_id.email'=>'invalid email address',
            'login_id.exists'=>'Email is not registered',
            'password'=>'password is required',
        ]);
        }else{
            $this->validate([
            'login_id'=>'required|exists:users,username',
            'password'=>'required|min:5|max:10',
        ],[
            'login_id.required'=>'Email Address or Username is required',
            'login_id.exists'=>'Username is not registered',
            'password'=>'Password is required',
            ]);
        }

        $creds = array($fieldtype=>$this->login_id,'password'=>$this->password);

        if(Auth::guard('web')->attempt($creds)){
            $checkUser = User::where($fieldtype,$this->login_id)->first();
            if($checkUser->blocked==1){
                Auth::guard('web')->logout();
                return redirect()->route('authorlogin')->with('fail','Your account has been blocked');
            }else{
                //return redirect()->route('authorhome');
                if($this->returnUrl != null){
                    return redirect()->to($this->returnUrl);
                }else{
                    return redirect()->route('authorhome');
                }
            }
        }else{
            session()->flash('fail','Incorrect Email/Username or Password');
        }


        //$this->validate([
        //   'email'=>'required|email|exists:users,email',
        //   'password'=>'required|min:4',
        //],[
        //    'email.required'=>'Enter your email address',
        //    'email.email'=>'Invalid email address',
        //    'email.exists'=>'Your email address not registered',
        //    'password.required'=>'Password is required',
        //]);
//
        //$creds = array('email'=>$this->email, 'password'=>$this->password);
        //if(Auth::guard('web')->attempt($creds)){
        //    $checkUser = User::where('email',$this->email)->first();
        //    if($checkUser->blocked == 1){
        //        Auth::guard('web')->logout();
        //        return redirect()->route('authorlogin')->with('fail','Your account has been blocked');
        //    }else{
        //        session()->flash('success', 'Anda berhasil masuk');
        //        return redirect()->route('authorhome');
        //    }
        //}else{
        //    session()->flash('fail','incorrect email or password');
        //}
    }

    public function render()
    {
        return view('livewire.author-login-form');
    }
}
