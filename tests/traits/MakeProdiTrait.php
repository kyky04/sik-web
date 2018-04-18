<?php

use Faker\Factory as Faker;
use App\Models\Prodi;
use App\Repositories\ProdiRepository;

trait MakeProdiTrait
{
    /**
     * Create fake instance of Prodi and save it in database
     *
     * @param array $prodiFields
     * @return Prodi
     */
    public function makeProdi($prodiFields = [])
    {
        /** @var ProdiRepository $prodiRepo */
        $prodiRepo = App::make(ProdiRepository::class);
        $theme = $this->fakeProdiData($prodiFields);
        return $prodiRepo->create($theme);
    }

    /**
     * Get fake instance of Prodi
     *
     * @param array $prodiFields
     * @return Prodi
     */
    public function fakeProdi($prodiFields = [])
    {
        return new Prodi($this->fakeProdiData($prodiFields));
    }

    /**
     * Get fake data of Prodi
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProdiData($prodiFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id_univ' => $fake->randomDigitNotNull,
            'id_fakultas' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $prodiFields);
    }
}
