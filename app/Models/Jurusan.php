<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Jurusan
 * @package App\Models
 * @version March 10, 2018, 8:01 pm UTC
 */
class Jurusan extends Model
{
    use SoftDeletes;

    public $table = 'jurusans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_univ',
        'id_fak',
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_univ' => 'integer',
        'id_fak' => 'integer',
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_univ' => 'required',
        'id_fak' => 'required',
        'nama' => 'required'
    ];

    
}
