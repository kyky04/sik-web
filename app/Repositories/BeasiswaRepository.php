<?php

namespace App\Repositories;

use App\Models\Beasiswa;
use InfyOm\Generator\Common\BaseRepository;

class BeasiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'sumber_air'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Beasiswa::class;
    }
}
