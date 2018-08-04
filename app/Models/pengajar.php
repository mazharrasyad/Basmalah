<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class pengajar
 * @package App\Models
 * @version July 15, 2018, 5:57 am UTC
 *
 * @property string nama_lengkap
 * @property string agama
 * @property string jenis_kelamin
 * @property string alamat
 * @property string no_handphone
 * @property string email
 * @property string bidang_keahlian
 */
class pengajar extends Model
{
    use SoftDeletes;

    public function users()
    {
       return $this->belongsTo('App\User', 'user_id');
    }

    public function belajars()
    {
       return $this->belongsTo('App\Models\belajar', 'user_id');
    }

    public $table = 'pengajars';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama_lengkap',
        'agama',
        'jenis_kelamin',
        'alamat',
        'no_handphone',
        'email',
        'bidang_keahlian',
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
        'nama_lengkap' => 'string',
        'agama' => 'string',
        'jenis_kelamin' => 'string',
        'alamat' => 'string',
        'no_handphone' => 'string',
        'email' => 'string',
        'bidang_keahlian' => 'string',
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
        'nama_lengkap' => 'required',
        'agama' => 'required',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'no_handphone' => 'numeric|unique:pengajars',
        'email' => 'email|unique:pengajars',
        'bidang_keahlian' => 'required',
        'url' => 'required|unique:pengajars'
    ];


}
