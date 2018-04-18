<?php

use Faker\Factory as Faker;
use App\Models\PendaftaranBeasiswa;
use App\Repositories\PendaftaranBeasiswaRepository;

trait MakePendaftaranBeasiswaTrait
{
    /**
     * Create fake instance of PendaftaranBeasiswa and save it in database
     *
     * @param array $pendaftaranBeasiswaFields
     * @return PendaftaranBeasiswa
     */
    public function makePendaftaranBeasiswa($pendaftaranBeasiswaFields = [])
    {
        /** @var PendaftaranBeasiswaRepository $pendaftaranBeasiswaRepo */
        $pendaftaranBeasiswaRepo = App::make(PendaftaranBeasiswaRepository::class);
        $theme = $this->fakePendaftaranBeasiswaData($pendaftaranBeasiswaFields);
        return $pendaftaranBeasiswaRepo->create($theme);
    }

    /**
     * Get fake instance of PendaftaranBeasiswa
     *
     * @param array $pendaftaranBeasiswaFields
     * @return PendaftaranBeasiswa
     */
    public function fakePendaftaranBeasiswa($pendaftaranBeasiswaFields = [])
    {
        return new PendaftaranBeasiswa($this->fakePendaftaranBeasiswaData($pendaftaranBeasiswaFields));
    }

    /**
     * Get fake data of PendaftaranBeasiswa
     *
     * @param array $postFields
     * @return array
     */
    public function fakePendaftaranBeasiswaData($pendaftaranBeasiswaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id_univ' => $fake->randomDigitNotNull,
            'nama' => $fake->word,
            'nim' => $fake->word,
            'jurusan' => $fake->word,
            'alamat' => $fake->word,
            'semester' => $fake->word,
            'ipk' => $fake->word,
            'prestasi_akademik' => $fake->word,
            'pendapatan_orangtua' => $fake->word,
            'tanggungan_orangtua' => $fake->word,
            'kendaraan_pribadi' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $pendaftaranBeasiswaFields);
    }
}
