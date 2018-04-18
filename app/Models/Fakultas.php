<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fakultas
 * @package App\Models
 * @version March 11, 2018, 5:30 pm UTC
 */
class Fakultas extends Model
{
    use SoftDeletes;

    public $table = 'fakultas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_univ',
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_univ' => 'integer',
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_univ' => 'required',
        'nama' => 'required'
    ];

    
}
