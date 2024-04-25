<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Idea extends Model
{
    use HasFactory;

    // protected $guarded = [
    //     'id',
    //     'created_at',
    //     'updated_at',
    // ];

    protected $fillable = [
        'content',
        'like'
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
