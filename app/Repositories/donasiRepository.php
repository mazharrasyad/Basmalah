<?php

namespace App\Repositories;

use App\Models\donasi;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class donasiRepository
 * @package App\Repositories
 * @version July 15, 2018, 6:01 am UTC
 *
 * @method donasi findWithoutFail($id, $columns = ['*'])
 * @method donasi find($id, $columns = ['*'])
 * @method donasi first($columns = ['*'])
*/
class donasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_handphone',
        'email',
        'dkm_id',
        'nominal',
        'pesan',
        'transfer_bank',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return donasi::class;
    }
}
