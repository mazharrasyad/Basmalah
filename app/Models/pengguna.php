<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class pengguna
 * @package App\Models
 * @version July 21, 2018, 2:23 am UTC
 *
 * @property integer role_id
 * @property string name
 * @property string email
 * @property string password
 * @property string remember_token
 */
class pengguna extends Model
{
    use SoftDeletes;

    public function role()
    {
        return $this->belongsTo('App\Role','role_id');
    }

    public $table = 'users';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'role_id',
        'name',
        'email',
        'password',
        'hint_password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'role_id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'hint_password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed'
    ];


}
