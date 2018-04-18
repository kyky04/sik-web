<?php

namespace App\Repositories;

use App\Models\Pendaftar;
use InfyOm\Generator\Common\BaseRepository;

class PendaftarRepository extends BaseRepository
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
        return Pendaftar::class;
    }
}
