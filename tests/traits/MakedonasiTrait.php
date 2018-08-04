<?php

use Faker\Factory as Faker;
use App\Models\donasi;
use App\Repositories\donasiRepository;

trait MakedonasiTrait
{
    /**
     * Create fake instance of donasi and save it in database
     *
     * @param array $donasiFields
     * @return donasi
     */
    public function makedonasi($donasiFields = [])
    {
        /** @var donasiRepository $donasiRepo */
        $donasiRepo = App::make(donasiRepository::class);
        $theme = $this->fakedonasiData($donasiFields);
        return $donasiRepo->create($theme);
    }

    /**
     * Get fake instance of donasi
     *
     * @param array $donasiFields
     * @return donasi
     */
    public function fakedonasi($donasiFields = [])
    {
        return new donasi($this->fakedonasiData($donasiFields));
    }

    /**
     * Get fake data of donasi
     *
     * @param array $postFields
     * @return array
     */
    public function fakedonasiData($donasiFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'no_handphone' => $fake->word,
            'email' => $fake->word,
            'dkm_id' => $fake->randomDigitNotNull,
            'nominal' => $fake->word,
            'pesan' => $fake->text,
            'transfer_bank' => $fake->word,
            'status' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $donasiFields);
    }
}
