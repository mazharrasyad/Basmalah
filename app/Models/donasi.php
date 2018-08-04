<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class donasi
 * @package App\Models
 * @version July 15, 2018, 6:01 am UTC
 *
 * @property string no_handphone
 * @property string email
 * @property integer dkm_id
 * @property string nominal
 * @property string pesan
 * @property string transfer_bank
 * @property string status
 */
class donasi extends Model
{
    use SoftDeletes;

    public function dkms()
    {
       return $this->belongsTo('App\Models\dkm', 'dkm_id');
    }

    public $table = 'donasis';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_handphone',
        'email',
        'dkm_id',
        'nominal',
        'pesan',
        'transfer_bank',
        'status',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_handphone' => 'string',
        'email' => 'string',
        'dkm_id' => 'integer',
        'nominal' => 'string',
        'pesan' => 'string',
        'transfer_bank' => 'string',
        'status' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        //'no_handphone' => 'numeric|unique:pengajars',
        //'email' => 'email|unique:pengajars',
        'dkm_id' => 'required',
        'nominal' => 'numeric|min:10000',
        'pesan' => 'required',
        'transfer_bank' => 'required',
        'status' => 'required',
        'url' => 'required|unique:dkms'
    ];


}
