<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Intervention\Image\Facades\Image;
class ProfilesController extends Controller

{
    function index(User $user){
        $follows=(auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        
        return view('profiles.index',compact('user','follows'));
    }
    public function edit(User $user){
        $this->authorize('update',$user->profile);
        return view('profiles.edit',compact('user'));
    }
    public function update(User $user){
        
        $image_path="";
        $data= request()->validate(
            [
                'title'=>['required','max:255'],
                'description'=>'required',
                'url'=>['url'],
                'image'=>['image']
            ]
            );
            
            if(request('image')){
                $image_path=request('image')->store('profile','public');
                $image=Image::make(public_path("storage/{$image_path}"))->fit(250,250);
                $image->save();
            }
            auth()->user()->profile->update(array_merge($data,['image'=>$image_path]));
            return redirect(route('profile.show',$user->id));
    }
    
}
