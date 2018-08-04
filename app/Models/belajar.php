<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class belajar
 * @package App\Models
 * @version July 15, 2018, 6:09 am UTC
 *
 * @property integer pengangguran_id
 * @property integer pengajar_id
 * @property string alamat_tempat_belajar
 * @property string hari
 * @property string pukul
 */
class belajar extends Model
{
    use SoftDeletes;
    

    public $table = 'belajars';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'kode',
        'user_id',
        'pelajaran',
        'alamat_tempat_belajar',
        'hari',
        'pukul',
        'status',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode' => 'string',
        'user_id' => 'integer',
        'pelajaran' => 'string',
        'alamat_tempat_belajar' => 'string',
        'hari' => 'string',
        'pukul' => 'string',
        'status' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode' => 'required|unique:belajars',
        'user_id' => 'required',
        'pelajaran' => 'required',
        'alamat_tempat_belajar' => 'required',
        'hari' => 'required',
        'pukul' => 'required',
        'status' => 'required',
        'url' => 'required|unique:belajars'
    ];
}
