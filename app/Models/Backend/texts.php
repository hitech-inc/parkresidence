<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class texts
 * @package App\Models\Backend
 * @version June 21, 2018, 6:50 am UTC
 *
 * @property string name
 * @property string title
 * @property string text
 * @property string link
 * @property string img
 */
class texts extends Model
{
    use SoftDeletes;

    public $table = 'texts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'title',
        'text',
        'link',
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'title' => 'string',
        'text' => 'string',
        'link' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
    public static function renderFirst($name)
    {
        $text = self::where('name', $name)->first();

        return $text;
    }

    public static function render()
    {
        $texts = self::all();

        return $texts;
    } 

}
