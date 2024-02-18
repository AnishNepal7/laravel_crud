<?php

namespace Modules\User\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Database\factories\UsersFactory;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */

    protected $guarded = ['id'];
    // protected $fillable = ['firstname','lastname','email','phone','password','gender','education','dob'];
    // $fillable is used in repositories
    
    // protected static function newFactory(): UsersFactory
    // {
    //     //return UsersFactory::new();
    // }
}
