<?php

use Faker\Factory as Faker;
use App\Models\Program_Studi;
use App\Repositories\Program_StudiRepository;

trait MakeProgram_StudiTrait
{
    /**
     * Create fake instance of Program_Studi and save it in database
     *
     * @param array $programStudiFields
     * @return Program_Studi
     */
    public function makeProgram_Studi($programStudiFields = [])
    {
        /** @var Program_StudiRepository $programStudiRepo */
        $programStudiRepo = App::make(Program_StudiRepository::class);
        $theme = $this->fakeProgram_StudiData($programStudiFields);
        return $programStudiRepo->create($theme);
    }

    /**
     * Get fake instance of Program_Studi
     *
     * @param array $programStudiFields
     * @return Program_Studi
     */
    public function fakeProgram_Studi($programStudiFields = [])
    {
        return new Program_Studi($this->fakeProgram_StudiData($programStudiFields));
    }

    /**
     * Get fake data of Program_Studi
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProgram_StudiData($programStudiFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id_univ' => $fake->randomDigitNotNull,
            'id_fak' => $fake->word,
            'nama' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $programStudiFields);
    }
}
