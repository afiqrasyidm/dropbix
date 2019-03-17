<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    	  protected $table = 'file';
        protected $fillable = [
            'user_id', 'name', 'url', 'is_active',
        ];
}
