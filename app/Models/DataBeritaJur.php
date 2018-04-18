<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DataBeritaJur
 * @package App\Models
 * @version March 10, 2018, 7:36 pm UTC
 */
class DataBeritaJur extends Model
{
    use SoftDeletes;

    public $table = 'data_berita_jurs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_univ',
        'id_fak',
        'id_jur',
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
        'id_jur' => 'integer',
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
        'id_jur' => 'required',
        'kategori' => 'required',
        'judul' => 'required',
        'desc' => 'required'
    ];

    
}
