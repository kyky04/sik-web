<?php

namespace App\Repositories;

use App\Models\Fakultas;
use InfyOm\Generator\Common\BaseRepository;

class FakultasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_univ',
        'nama'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Fakultas::class;
    }
}
