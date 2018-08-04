<?php

namespace App\Repositories;

use App\Models\pengajar;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class pengajarRepository
 * @package App\Repositories
 * @version July 15, 2018, 5:57 am UTC
 *
 * @method pengajar findWithoutFail($id, $columns = ['*'])
 * @method pengajar find($id, $columns = ['*'])
 * @method pengajar first($columns = ['*'])
*/
class pengajarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_lengkap',
        'agama',
        'jenis_kelamin',
        'alamat',
        'no_handphone',
        'email',
        'bidang_keahlian'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return pengajar::class;
    }
}
