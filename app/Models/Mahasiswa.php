<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mahasiswa
 * @package App\Models
 * @version April 17, 2018, 9:05 pm UTC
 */
class Mahasiswa extends Model
{
    use SoftDeletes;

    public $table = 'mahasiswas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'password',
        'email',
        'no_telp',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'password' => 'string',
        'email' => 'string',
        'no_telp' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'password' => 'required',
        'email' => 'required|string|email|max:255|unique:mahasiswas',
        'no_telp' => 'required',
        'alamat' => 'required'
    ];

    
}
