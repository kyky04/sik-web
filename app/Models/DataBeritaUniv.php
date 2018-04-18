<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DataBeritaUniv
 * @package App\Models
 * @version March 10, 2018, 7:30 pm UTC
 */
class DataBeritaUniv extends Model
{
    use SoftDeletes;

    public $table = 'data_berita_univs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_univ',
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
        'kategori' => 'required',
        'judul' => 'required',
        'desc' => 'required'
    ];

    public function universitas()
    {
        return $this->belongsTo(Universitas::class,'id_univ');
    }

    
}
