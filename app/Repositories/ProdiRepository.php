<?php

namespace App\Repositories;

use App\Models\Prodi;
use InfyOm\Generator\Common\BaseRepository;

class ProdiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_univ',
        'id_fakultas'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Prodi::class;
    }
}
