<?php

use Faker\Factory as Faker;
use App\Models\DataBeritaFak;
use App\Repositories\DataBeritaFakRepository;

trait MakeDataBeritaFakTrait
{
    /**
     * Create fake instance of DataBeritaFak and save it in database
     *
     * @param array $dataBeritaFakFields
     * @return DataBeritaFak
     */
    public function makeDataBeritaFak($dataBeritaFakFields = [])
    {
        /** @var DataBeritaFakRepository $dataBeritaFakRepo */
        $dataBeritaFakRepo = App::make(DataBeritaFakRepository::class);
        $theme = $this->fakeDataBeritaFakData($dataBeritaFakFields);
        return $dataBeritaFakRepo->create($theme);
    }

    /**
     * Get fake instance of DataBeritaFak
     *
     * @param array $dataBeritaFakFields
     * @return DataBeritaFak
     */
    public function fakeDataBeritaFak($dataBeritaFakFields = [])
    {
        return new DataBeritaFak($this->fakeDataBeritaFakData($dataBeritaFakFields));
    }

    /**
     * Get fake data of DataBeritaFak
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDataBeritaFakData($dataBeritaFakFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id_univ' => $fake->randomDigitNotNull,
            'id_fak' => $fake->randomDigitNotNull,
            'kategori' => $fake->word,
            'judul' => $fake->word,
            'desc' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $dataBeritaFakFields);
    }
}
