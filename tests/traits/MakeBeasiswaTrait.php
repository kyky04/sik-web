<?php

use Faker\Factory as Faker;
use App\Models\Beasiswa;
use App\Repositories\BeasiswaRepository;

trait MakeBeasiswaTrait
{
    /**
     * Create fake instance of Beasiswa and save it in database
     *
     * @param array $beasiswaFields
     * @return Beasiswa
     */
    public function makeBeasiswa($beasiswaFields = [])
    {
        /** @var BeasiswaRepository $beasiswaRepo */
        $beasiswaRepo = App::make(BeasiswaRepository::class);
        $theme = $this->fakeBeasiswaData($beasiswaFields);
        return $beasiswaRepo->create($theme);
    }

    /**
     * Get fake instance of Beasiswa
     *
     * @param array $beasiswaFields
     * @return Beasiswa
     */
    public function fakeBeasiswa($beasiswaFields = [])
    {
        return new Beasiswa($this->fakeBeasiswaData($beasiswaFields));
    }

    /**
     * Get fake data of Beasiswa
     *
     * @param array $postFields
     * @return array
     */
    public function fakeBeasiswaData($beasiswaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nilai_un' => $fake->word,
            'penghasilan' => $fake->randomDigitNotNull,
            'tanggungan' => $fake->randomDigitNotNull,
            'prestasi' => $fake->word,
            'kriteria_rumah' => $fake->word,
            'kepimilikan_rumah' => $fake->word,
            'isi_rumah' => $fake->word,
            'mandi_cuci_kakus' => $fake->word,
            'luas_tanah' => $fake->randomDigitNotNull,
            'jarak_pusat_kota' => $fake->randomDigitNotNull,
            'sumber_air' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $beasiswaFields);
    }
}
