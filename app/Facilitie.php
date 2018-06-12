<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Facilitie extends Model
{
    //
    public $table = 'facilities';

    public $fillable = [
    	'slug',
    	'name'
    ];
}
