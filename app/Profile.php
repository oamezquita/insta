<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'title', 'description', 'url','image',
    ];
    
    public function followers(){
        return $this->belongsToMany(User::class);
    }
    public function profileImage(){
        $img=($this->image) ? $this->image : 'profile/profile.jpg';
        return '/storage/'.$img;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
