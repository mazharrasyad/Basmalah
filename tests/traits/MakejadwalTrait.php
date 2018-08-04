<?php

use Faker\Factory as Faker;
use App\Models\jadwal;
use App\Repositories\jadwalRepository;

trait MakejadwalTrait
{
    /**
     * Create fake instance of jadwal and save it in database
     *
     * @param array $jadwalFields
     * @return jadwal
     */
    public function makejadwal($jadwalFields = [])
    {
        /** @var jadwalRepository $jadwalRepo */
        $jadwalRepo = App::make(jadwalRepository::class);
        $theme = $this->fakejadwalData($jadwalFields);
        return $jadwalRepo->create($theme);
    }

    /**
     * Get fake instance of jadwal
     *
     * @param array $jadwalFields
     * @return jadwal
     */
    public function fakejadwal($jadwalFields = [])
    {
        return new jadwal($this->fakejadwalData($jadwalFields));
    }

    /**
     * Get fake data of jadwal
     *
     * @param array $postFields
     * @return array
     */
    public function fakejadwalData($jadwalFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'pengangguran_id' => $fake->randomDigitNotNull,
            'belajar_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $jadwalFields);
    }
}
