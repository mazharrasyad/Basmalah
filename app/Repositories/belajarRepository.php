<?php

namespace App\Repositories;

use App\Models\belajar;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class belajarRepository
 * @package App\Repositories
 * @version July 15, 2018, 6:09 am UTC
 *
 * @method belajar findWithoutFail($id, $columns = ['*'])
 * @method belajar find($id, $columns = ['*'])
 * @method belajar first($columns = ['*'])
*/
class belajarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pengangguran_id',
        'pengajar_id',
        'alamat_tempat_belajar',
        'hari',
        'pukul'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return belajar::class;
    }
}
