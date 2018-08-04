<?php

use Faker\Factory as Faker;
use App\Models\belajar;
use App\Repositories\belajarRepository;

trait MakebelajarTrait
{
    /**
     * Create fake instance of belajar and save it in database
     *
     * @param array $belajarFields
     * @return belajar
     */
    public function makebelajar($belajarFields = [])
    {
        /** @var belajarRepository $belajarRepo */
        $belajarRepo = App::make(belajarRepository::class);
        $theme = $this->fakebelajarData($belajarFields);
        return $belajarRepo->create($theme);
    }

    /**
     * Get fake instance of belajar
     *
     * @param array $belajarFields
     * @return belajar
     */
    public function fakebelajar($belajarFields = [])
    {
        return new belajar($this->fakebelajarData($belajarFields));
    }

    /**
     * Get fake data of belajar
     *
     * @param array $postFields
     * @return array
     */
    public function fakebelajarData($belajarFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'pengangguran_id' => $fake->randomDigitNotNull,
            'pengajar_id' => $fake->randomDigitNotNull,
            'alamat_tempat_belajar' => $fake->text,
            'hari' => $fake->word,
            'pukul' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $belajarFields);
    }
}
