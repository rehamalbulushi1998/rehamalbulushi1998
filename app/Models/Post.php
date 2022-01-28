<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
class Post extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'img',
        'desciption',
    ];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
        
    }
    public function category()
    {
       
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
