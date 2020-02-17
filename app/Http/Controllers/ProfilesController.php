<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Intervention\Image\Facades\Image;
class ProfilesController extends Controller

{
    function index(User $user){
        
        return view('profiles.index',compact('user'));
    }
    public function edit(User $user)
    {
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
                $image=Image::make(public_path("storage/{$image_path}"))->fit(1000,1000);
                $image->save();       
            }
            array_merge($data,['image'=>$image_path]);
            auth()->user()->profile->update($data);
            return redirect(route('profile.show',$user->id));
    }
    
}
