<?php

namespace App\Repositories;

use App\Models\jadwal;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class jadwalRepository
 * @package App\Repositories
 * @version July 18, 2018, 2:46 am UTC
 *
 * @method jadwal findWithoutFail($id, $columns = ['*'])
 * @method jadwal find($id, $columns = ['*'])
 * @method jadwal first($columns = ['*'])
*/
class jadwalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pengangguran_id',
        'belajar_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return jadwal::class;
    }
}
