<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommentModel extends Model
{
    use HasFactory;

    protected $guarded = []; //Allow Mass Assignment
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // OR
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
