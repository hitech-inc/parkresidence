<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Houses
 * @package App\Models\Backend
 * @version May 25, 2018, 10:45 am UTC
 *
 * @property string shape
 * @property string coords
 * @property string title
 * @property string slug
 * @property string img
 * @property string description
 * @property string plane
 * @property string video
 */
class Houses extends Model
{
    use SoftDeletes;

    public $table = 'houses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'shape',
        'coords',
        'title',
        'slug',
        'img',
        'description',
        'plane',
        'video'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'shape' => 'string',
        'coords' => 'string',
        'title' => 'string',
        'slug' => 'string',
        'img' => 'string',
        'description' => 'string',
        'plane' => 'string',
        'video' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
    public static function getHouses()
    {
        $houses = self::all();
        return $houses;
    }

}
