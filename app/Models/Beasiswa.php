<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Beasiswa
 * @package App\Models
 * @version April 17, 2018, 9:41 pm UTC
 */
class Beasiswa extends Model
{
    use SoftDeletes;

    public $table = 'beasiswas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nilai_un',
        'penghasilan',
        'tanggungan',
        'prestasi',
        'kriteria_rumah',
        'kepimilikan_rumah',
        'isi_rumah',
        'mandi_cuci_kakus',
        'luas_tanah',
        'jarak_pusat_kota',
        'sumber_air',
        'id_mahasiswa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nilai_un' => 'string',
        'penghasilan' => 'integer',
        'tanggungan' => 'integer',
        'prestasi' => 'string',
        'kriteria_rumah' => 'string',
        'kepimilikan_rumah' => 'string',
        'isi_rumah' => 'string',
        'mandi_cuci_kakus' => 'string',
        'luas_tanah' => 'integer',
        'jarak_pusat_kota' => 'integer',
        'sumber_air' => 'string',
        'id_mahasiswa' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nilai_un' => 'required',
        'penghasilan' => 'required',
        'tanggungan' => 'required',
        'prestasi' => 'required',
        'kriteria_rumah' => 'required',
        'kepimilikan_rumah' => 'required',
        'isi_rumah' => 'required',
        'mandi_cuci_kakus' => 'required',
        'luas_tanah' => 'required',
        'jarak_pusat_kota' => 'required',
        'sumber_air' => 'required',
        'id_mahasiswa' => 'required'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class,'id_mahasiswa');
    }
}
