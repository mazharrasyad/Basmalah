<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class jadwal
 * @package App\Models
 * @version July 18, 2018, 2:46 am UTC
 *
 * @property integer pengangguran_id
 * @property integer belajar_id
 */
class jadwal extends Model
{
    use SoftDeletes;

    public function penganggurans()
    {
       return $this->belongsTo('App\Models\pengangguran', 'pengangguran_id');
    }

    public function belajars()
    {
       return $this->belongsTo('App\Models\belajar', 'belajar_id');
    }

    public $table = 'jadwals';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'pengangguran_id',
        'belajar_id',
        'jadwal',
        'user_id',
        'status',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pengangguran_id' => 'integer',
        'belajar_id' => 'integer',
        'jadwal' => 'string',
        'user_id' => 'integer',
        'status' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pengangguran_id' => 'required',
        'belajar_id' => 'required',
        'jadwal' => 'unique:jadwals',
        'user_id' => 'required',
        'url' => 'required|unique:jadwals'
    ];


}
