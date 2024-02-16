<?php

namespace Modules\Library\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Library\Database\factories\LibFactory;

class Lib extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): LibFactory
    {
        //return LibFactory::new();
    }
}
