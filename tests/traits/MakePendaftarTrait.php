<?php

use Faker\Factory as Faker;
use App\Models\Pendaftar;
use App\Repositories\PendaftarRepository;

trait MakePendaftarTrait
{
    /**
     * Create fake instance of Pendaftar and save it in database
     *
     * @param array $pendaftarFields
     * @return Pendaftar
     */
    public function makePendaftar($pendaftarFields = [])
    {
        /** @var PendaftarRepository $pendaftarRepo */
        $pendaftarRepo = App::make(PendaftarRepository::class);
        $theme = $this->fakePendaftarData($pendaftarFields);
        return $pendaftarRepo->create($theme);
    }

    /**
     * Get fake instance of Pendaftar
     *
     * @param array $pendaftarFields
     * @return Pendaftar
     */
    public function fakePendaftar($pendaftarFields = [])
    {
        return new Pendaftar($this->fakePendaftarData($pendaftarFields));
    }

    /**
     * Get fake data of Pendaftar
     *
     * @param array $postFields
     * @return array
     */
    public function fakePendaftarData($pendaftarFields = [])
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
        ], $pendaftarFields);
    }
}
