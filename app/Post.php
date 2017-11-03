<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable=['post','user_id','category_id'];
  
    public function comments(){
      return $this->hasMany(Comment::class);
}
public function category(){
  return $this->belongsTo(Category::class);
}
