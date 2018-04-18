<?php

namespace App\Repositories;

use App\Models\Universitas;
use InfyOm\Generator\Common\BaseRepository;

class UniversitasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Universitas::class;
    }
}
