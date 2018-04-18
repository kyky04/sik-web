<?php

use Faker\Factory as Faker;
use App\Models\Pendaftaran;
use App\Repositories\PendaftaranRepository;

trait MakePendaftaranTrait
{
    /**
     * Create fake instance of Pendaftaran and save it in database
     *
     * @param array $pendaftaranFields
     * @return Pendaftaran
     */
    public function makePendaftaran($pendaftaranFields = [])
    {
        /** @var PendaftaranRepository $pendaftaranRepo */
        $pendaftaranRepo = App::make(PendaftaranRepository::class);
        $theme = $this->fakePendaftaranData($pendaftaranFields);
        return $pendaftaranRepo->create($theme);
    }

    /**
     * Get fake instance of Pendaftaran
     *
     * @param array $pendaftaranFields
     * @return Pendaftaran
     */
    public function fakePendaftaran($pendaftaranFields = [])
    {
        return new Pendaftaran($this->fakePendaftaranData($pendaftaranFields));
    }

    /**
     * Get fake data of Pendaftaran
     *
     * @param array $postFields
     * @return array
     */
    public function fakePendaftaranData($pendaftaranFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id_univ' => $fake->randomDigitNotNull,
            'nama_mahasiswa' => $fake->word,
            'nim' => $fake->word,
            'jurusan_mahasiswa' => $fake->word,
            'alamat' => $fake->word,
            'semester' => $fake->word,
            'ipk' => $fake->word,
            'prestasi_akademik' => $fake->word,
            'pendapatan_orangtua' => $fake->word,
            'tanggungan_orangtua' => $fake->word,
            'kendaraan_pribadi' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $pendaftaranFields);
    }
}
