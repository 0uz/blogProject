<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title','desc','owner','photoName','category'];

    public function user(){
        return $this->belongsTo(User::class,'owner');
    }

    public function tags(){
        return $this->hasMany(Tag::class);
    }

}
