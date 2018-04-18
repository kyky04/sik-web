<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Prodi
 * @package App\Models
 * @version March 10, 2018, 7:03 pm UTC
 */
class Prodi extends Model
{
    use SoftDeletes;

    public $table = 'prodis';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_univ',
        'id_fakultas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_univ' => 'integer',
        'id_fakultas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_univ' => 'required',
        'id_fakultas' => 'required'
    ];

    
}
