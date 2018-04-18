<?php

namespace App\Repositories;

use App\Models\DataBeritaUniv;
use InfyOm\Generator\Common\BaseRepository;

class DataBeritaUnivRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_univ',
        'kategori',
        'judul',
        'desc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DataBeritaUniv::class;
    }
}
