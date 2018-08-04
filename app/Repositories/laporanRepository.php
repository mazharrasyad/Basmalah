<?php

namespace App\Repositories;

use App\Models\laporan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class laporanRepository
 * @package App\Repositories
 * @version July 22, 2018, 1:17 pm UTC
 *
 * @method laporan findWithoutFail($id, $columns = ['*'])
 * @method laporan find($id, $columns = ['*'])
 * @method laporan first($columns = ['*'])
*/
class laporanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_handphone',
        'pesan',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return laporan::class;
    }
}
