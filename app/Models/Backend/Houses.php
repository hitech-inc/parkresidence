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
        'status',
        'coords',
        'title',
        'slug',
        'img',
        'small_img',
        'description',
        'plane',
        'plane2',
        'alias',
        'name',
        'kvadratura',
        'uchastok',
        'visota_potolka',
        'visota_potolka_gostinaya',
        'spalnie_comnati',
        'vannie_comnati',
        'terrasa',
        'parking'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'string',
        'coords' => 'string',
        'title' => 'string',
        'slug' => 'string',
        'img' => 'string',
        'small_img' => 'string',
        'description' => 'string',
        'plane' => 'string',
        'plane2' => 'string',
        'name' => 'string',
        'kvadratura',
        'uchastok',
        'visota_potolka',
        'visota_potolka_gostinaya',
        'spalnie_comnati',
        'vannie_comnati',
        'terrasa',
        'parking'
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
