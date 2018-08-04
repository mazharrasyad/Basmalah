<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class dkm
 * @package App\Models
 * @version July 15, 2018, 5:53 am UTC
 *
 * @property string nama_lengkap
 * @property string alamat
 * @property string no_handphone
 * @property string email
 * @property string nama_masjid
 * @property string alamat_masjid
 * @property string jabatan_di_masjid
 * @property string no_rekening_masjid
 */
class dkm extends Model
{
    use SoftDeletes;

    public function users()
    {
       return $this->belongsTo('App\User', 'user_id');
    }

    public function penganggurans()
    {
       return $this->belongsTo('App\Models\pengangguran', 'user_id');
    }


    public $table = 'dkms';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama_lengkap',
        'alamat',
        'no_handphone',
        'email',
        'nama_masjid',
        'alamat_masjid',
        'jabatan_di_masjid',
        'no_rekening_masjid',
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
        'alamat' => 'string',
        'no_handphone' => 'string',
        'email' => 'string',
        'nama_masjid' => 'string',
        'alamat_masjid' => 'string',
        'jabatan_di_masjid' => 'string',
        'no_rekening_masjid' => 'string',
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
        'alamat' => 'required',
        'no_handphone' => 'numeric|unique:dkms',
        'email' => 'email|unique:dkms',
        'nama_masjid' => 'required',
        'alamat_masjid' => 'required',
        'jabatan_di_masjid' => 'required',
        'no_rekening_masjid' => 'required',
        'url' => 'required|unique:dkms'
    ];
}
