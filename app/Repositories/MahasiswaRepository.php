<?php

namespace App\Repositories;

use App\Models\Mahasiswa;
use InfyOm\Generator\Common\BaseRepository;

class MahasiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'password',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mahasiswa::class;
    }
}
