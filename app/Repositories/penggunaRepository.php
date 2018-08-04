<?php

namespace App\Repositories;

use App\Models\pengguna;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class penggunaRepository
 * @package App\Repositories
 * @version July 21, 2018, 2:23 am UTC
 *
 * @method pengguna findWithoutFail($id, $columns = ['*'])
 * @method pengguna find($id, $columns = ['*'])
 * @method pengguna first($columns = ['*'])
*/
class penggunaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'role_id',
        'name',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return pengguna::class;
    }
}
