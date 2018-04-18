<?php

namespace App\Repositories;

use App\Models\Pendaftaran;
use InfyOm\Generator\Common\BaseRepository;

class PendaftaranRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Pendaftaran::class;
    }
}
