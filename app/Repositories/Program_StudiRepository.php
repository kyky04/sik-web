<?php

namespace App\Repositories;

use App\Models\Program_Studi;
use InfyOm\Generator\Common\BaseRepository;

class Program_StudiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_univ',
        'id_fak',
        'nama'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Program_Studi::class;
    }
}
