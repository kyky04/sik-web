<?php

use Faker\Factory as Faker;
use App\Models\DataBeritaUniv;
use App\Repositories\DataBeritaUnivRepository;

trait MakeDataBeritaUnivTrait
{
    /**
     * Create fake instance of DataBeritaUniv and save it in database
     *
     * @param array $dataBeritaUnivFields
     * @return DataBeritaUniv
     */
    public function makeDataBeritaUniv($dataBeritaUnivFields = [])
    {
        /** @var DataBeritaUnivRepository $dataBeritaUnivRepo */
        $dataBeritaUnivRepo = App::make(DataBeritaUnivRepository::class);
        $theme = $this->fakeDataBeritaUnivData($dataBeritaUnivFields);
        return $dataBeritaUnivRepo->create($theme);
    }

    /**
     * Get fake instance of DataBeritaUniv
     *
     * @param array $dataBeritaUnivFields
     * @return DataBeritaUniv
     */
    public function fakeDataBeritaUniv($dataBeritaUnivFields = [])
    {
        return new DataBeritaUniv($this->fakeDataBeritaUnivData($dataBeritaUnivFields));
    }

    /**
     * Get fake data of DataBeritaUniv
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDataBeritaUnivData($dataBeritaUnivFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id_univ' => $fake->randomDigitNotNull,
            'kategori' => $fake->word,
            'judul' => $fake->word,
            'desc' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $dataBeritaUnivFields);
    }
}
