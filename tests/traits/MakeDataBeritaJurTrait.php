<?php

use Faker\Factory as Faker;
use App\Models\DataBeritaJur;
use App\Repositories\DataBeritaJurRepository;

trait MakeDataBeritaJurTrait
{
    /**
     * Create fake instance of DataBeritaJur and save it in database
     *
     * @param array $dataBeritaJurFields
     * @return DataBeritaJur
     */
    public function makeDataBeritaJur($dataBeritaJurFields = [])
    {
        /** @var DataBeritaJurRepository $dataBeritaJurRepo */
        $dataBeritaJurRepo = App::make(DataBeritaJurRepository::class);
        $theme = $this->fakeDataBeritaJurData($dataBeritaJurFields);
        return $dataBeritaJurRepo->create($theme);
    }

    /**
     * Get fake instance of DataBeritaJur
     *
     * @param array $dataBeritaJurFields
     * @return DataBeritaJur
     */
    public function fakeDataBeritaJur($dataBeritaJurFields = [])
    {
        return new DataBeritaJur($this->fakeDataBeritaJurData($dataBeritaJurFields));
    }

    /**
     * Get fake data of DataBeritaJur
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDataBeritaJurData($dataBeritaJurFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id_univ' => $fake->randomDigitNotNull,
            'id_fak' => $fake->randomDigitNotNull,
            'id_jur' => $fake->randomDigitNotNull,
            'kategori' => $fake->word,
            'judul' => $fake->word,
            'desc' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $dataBeritaJurFields);
    }
}
