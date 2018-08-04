<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class laporan
 * @package App\Models
 * @version July 22, 2018, 1:17 pm UTC
 *
 * @property string no_handphone
 * @property string pesan
 * @property string url
 */
class laporan extends Model
{
    use SoftDeletes;

    public $table = 'laporans';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_handphone',
        'pesan',
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
        'pesan' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_handphone' => 'numeric',
        'pesan' => 'required',
        'url' => 'required'
    ];


}
