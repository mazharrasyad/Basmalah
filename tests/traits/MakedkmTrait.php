<?php

use Faker\Factory as Faker;
use App\Models\dkm;
use App\Repositories\dkmRepository;

trait MakedkmTrait
{
    /**
     * Create fake instance of dkm and save it in database
     *
     * @param array $dkmFields
     * @return dkm
     */
    public function makedkm($dkmFields = [])
    {
        /** @var dkmRepository $dkmRepo */
        $dkmRepo = App::make(dkmRepository::class);
        $theme = $this->fakedkmData($dkmFields);
        return $dkmRepo->create($theme);
    }

    /**
     * Get fake instance of dkm
     *
     * @param array $dkmFields
     * @return dkm
     */
    public function fakedkm($dkmFields = [])
    {
        return new dkm($this->fakedkmData($dkmFields));
    }

    /**
     * Get fake data of dkm
     *
     * @param array $postFields
     * @return array
     */
    public function fakedkmData($dkmFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nama_lengkap' => $fake->word,
            'alamat' => $fake->text,
            'no_handphone' => $fake->word,
            'email' => $fake->word,
            'nama_masjid' => $fake->word,
            'alamat_masjid' => $fake->text,
            'jabatan_di_masjid' => $fake->word,
            'no_rekening_masjid' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $dkmFields);
    }
}
