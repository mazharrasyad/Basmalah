<?php

namespace App\Repositories;

use App\Models\dkm;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class dkmRepository
 * @package App\Repositories
 * @version July 15, 2018, 5:53 am UTC
 *
 * @method dkm findWithoutFail($id, $columns = ['*'])
 * @method dkm find($id, $columns = ['*'])
 * @method dkm first($columns = ['*'])
*/
class dkmRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_lengkap',
        'alamat',
        'no_handphone',
        'email',
        'nama_masjid',
        'alamat_masjid',
        'jabatan_di_masjid',
        'no_rekening_masjid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return dkm::class;
    }
}
