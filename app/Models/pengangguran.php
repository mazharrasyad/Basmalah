<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class pengangguran
 * @package App\Models
 * @version July 15, 2018, 5:55 am UTC
 *
 * @property string nama_lengkap
 * @property string agama
 * @property string jenis_kelamin
 * @property string alamat
 * @property string pendidikan_terakhir
 * @property string peminatan
 * @property string lama_menganggur
 * @property string jumlah_orang_tanggungan
 * @property string status
 * @property integer dkm_id
 */
class pengangguran extends Model
{
    use SoftDeletes;


    public $table = 'penganggurans';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'kode',
        'nama_lengkap',
        'agama',
        'jenis_kelamin',
        'alamat',
        'pendidikan_terakhir',
        'peminatan',
        'lama_menganggur',
        'jumlah_orang_tanggungan',
        'status',
        'user_id',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode' => 'string',
        'nama_lengkap' => 'string',
        'agama' => 'string',
        'jenis_kelamin' => 'string',
        'alamat' => 'string',
        'pendidikan_terakhir' => 'string',
        'peminatan' => 'string',
        'lama_menganggur' => 'string',
        'jumlah_orang_tanggungan' => 'string',
        'status' => 'string',
        'user_id' => 'integer',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode' => 'required|unique:penganggurans',
        'nama_lengkap' => 'required',
        'agama' => 'required',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'pendidikan_terakhir' => 'required',
        'peminatan' => 'required',
        'lama_menganggur' => 'required',
        'jumlah_orang_tanggungan' => 'numeric',
        'status' => 'required',
        'user_id' => 'required',
        'url' => 'required|unique:penganggurans'
    ];
}
