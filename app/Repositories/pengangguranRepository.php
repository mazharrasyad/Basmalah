<?php

namespace App\Repositories;

use App\Models\pengangguran;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class pengangguranRepository
 * @package App\Repositories
 * @version July 15, 2018, 5:55 am UTC
 *
 * @method pengangguran findWithoutFail($id, $columns = ['*'])
 * @method pengangguran find($id, $columns = ['*'])
 * @method pengangguran first($columns = ['*'])
*/
class pengangguranRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_lengkap',
        'agama',
        'jenis_kelamin',
        'alamat',
        'pendidikan_terakhir',
        'peminatan',
        'lama_menganggur',
        'jumlah_orang_tanggungan',
        'status',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return pengangguran::class;
    }
}
