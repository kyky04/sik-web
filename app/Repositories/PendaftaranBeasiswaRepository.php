<?php

namespace App\Repositories;

use App\Models\PendaftaranBeasiswa;
use InfyOm\Generator\Common\BaseRepository;

class PendaftaranBeasiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_univ',
        'nama',
        'nim',
        'jurusan',
        'alamat',
        'semester',
        'ipk',
        'prestasi_akademik',
        'pendapatan_orangtua',
        'tanggungan_orangtua',
        'kendaraan_pribadi'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PendaftaranBeasiswa::class;
    }
}
