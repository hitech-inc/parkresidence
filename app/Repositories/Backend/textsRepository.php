<?php

namespace App\Repositories\Backend;

use App\Models\Backend\texts;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class textsRepository
 * @package App\Repositories\Backend
 * @version June 21, 2018, 6:50 am UTC
 *
 * @method texts findWithoutFail($id, $columns = ['*'])
 * @method texts find($id, $columns = ['*'])
 * @method texts first($columns = ['*'])
*/
class textsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'title',
        'text',
        'link',
        'img'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return texts::class;
    }
}
