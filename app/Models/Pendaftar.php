<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pendaftar
 * @package App\Models
 * @version March 10, 2018, 10:36 pm UTC
 */
class Pendaftar extends Model
{
    use SoftDeletes;

    public $table = 'pendaftars';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_univ',
        'nama_mahasiswa',
        'nim',
        'jurusan_mahasiswa',
        'alamat',
        'semester',
        'ipk',
        'prestasi_akademik',
        'pendapatan_orangtua',
        'tanggungan_orangtua',
        'kendaraan_pribadi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_univ' => 'integer',
        'nama_mahasiswa' => 'string',
        'nim' => 'string',
        'jurusan_mahasiswa' => 'string',
        'alamat' => 'string',
        'semester' => 'string',
        'ipk' => 'string',
        'prestasi_akademik' => 'string',
        'pendapatan_orangtua' => 'string',
        'tanggungan_orangtua' => 'string',
        'kendaraan_pribadi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_univ' => 'required',
        'nama_mahasiswa' => 'required',
        'nim' => 'required',
        'jurusan_mahasiswa' => 'required',
        'alamat' => 'required',
        'semester' => 'required',
        'ipk' => 'required',
        'prestasi_akademik' => 'required',
        'pendapatan_orangtua' => 'required',
        'tanggungan_orangtua' => 'required',
        'kendaraan_pribadi' => 'required'
    ];

    
}
