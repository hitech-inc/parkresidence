<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Houses;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class HousesRepository
 * @package App\Repositories\Backend
 * @version May 25, 2018, 10:45 am UTC
 *
 * @method Houses findWithoutFail($id, $columns = ['*'])
 * @method Houses find($id, $columns = ['*'])
 * @method Houses first($columns = ['*'])
*/
class HousesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Houses::class;
    }
}
