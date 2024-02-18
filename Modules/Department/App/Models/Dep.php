<?php

namespace Modules\Department\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Department\Database\factories\DepFactory;

class Dep extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): DepFactory
    {
        //return DepFactory::new();
    }
}
