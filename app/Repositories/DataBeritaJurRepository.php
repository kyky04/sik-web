<?php

namespace App\Repositories;

use App\Models\DataBeritaJur;
use InfyOm\Generator\Common\BaseRepository;

class DataBeritaJurRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_univ',
        'id_fak',
        'id_jur',
        'kategori',
        'judul',
        'desc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DataBeritaJur::class;
    }
}
