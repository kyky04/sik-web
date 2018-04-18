<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DataBeritaFak
 * @package App\Models
 * @version March 10, 2018, 7:33 pm UTC
 */
class DataBeritaFak extends Model
{
    use SoftDeletes;

    public $table = 'data_berita_faks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_univ',
        'id_fak',
        'kategori',
        'judul',
        'desc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_univ' => 'integer',
        'id_fak' => 'integer',
        'kategori' => 'string',
        'judul' => 'string',
        'desc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_univ' => 'required',
        'id_fak' => 'required',
        'kategori' => 'required',
        'judul' => 'required',
        'desc' => 'required'
    ];

    
}
