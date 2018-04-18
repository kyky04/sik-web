<?php

use Faker\Factory as Faker;
use App\Models\Universitas;
use App\Repositories\UniversitasRepository;

trait MakeUniversitasTrait
{
    /**
     * Create fake instance of Universitas and save it in database
     *
     * @param array $universitasFields
     * @return Universitas
     */
    public function makeUniversitas($universitasFields = [])
    {
        /** @var UniversitasRepository $universitasRepo */
        $universitasRepo = App::make(UniversitasRepository::class);
        $theme = $this->fakeUniversitasData($universitasFields);
        return $universitasRepo->create($theme);
    }

    /**
     * Get fake instance of Universitas
     *
     * @param array $universitasFields
     * @return Universitas
     */
    public function fakeUniversitas($universitasFields = [])
    {
        return new Universitas($this->fakeUniversitasData($universitasFields));
    }

    /**
     * Get fake data of Universitas
     *
     * @param array $postFields
     * @return array
     */
    public function fakeUniversitasData($universitasFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nama' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $universitasFields);
    }
}
