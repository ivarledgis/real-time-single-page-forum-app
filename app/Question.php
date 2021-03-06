<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Question;
use App\Reply;
use App\Category;

class Question extends Model
{
   public function user()
    {
    	return $this->belongsTo(Users::class);
    }
    public function replies()
    {
    	return $this->hasMany(Reply::class);
    }
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
