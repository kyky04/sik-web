<?php

namespace App\Repositories;

use App\Models\DataBeritaFak;
use InfyOm\Generator\Common\BaseRepository;

class DataBeritaFakRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_univ',
        'id_fak',
        'kategori',
        'judul',
        'desc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DataBeritaFak::class;
    }
}
