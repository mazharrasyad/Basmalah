<?php

use Faker\Factory as Faker;
use App\Models\pengguna;
use App\Repositories\penggunaRepository;

trait MakepenggunaTrait
{
    /**
     * Create fake instance of pengguna and save it in database
     *
     * @param array $penggunaFields
     * @return pengguna
     */
    public function makepengguna($penggunaFields = [])
    {
        /** @var penggunaRepository $penggunaRepo */
        $penggunaRepo = App::make(penggunaRepository::class);
        $theme = $this->fakepenggunaData($penggunaFields);
        return $penggunaRepo->create($theme);
    }

    /**
     * Get fake instance of pengguna
     *
     * @param array $penggunaFields
     * @return pengguna
     */
    public function fakepengguna($penggunaFields = [])
    {
        return new pengguna($this->fakepenggunaData($penggunaFields));
    }

    /**
     * Get fake data of pengguna
     *
     * @param array $postFields
     * @return array
     */
    public function fakepenggunaData($penggunaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'role_id' => $fake->randomDigitNotNull,
            'name' => $fake->word,
            'email' => $fake->word,
            'password' => $fake->word,
            'remember_token' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $penggunaFields);
    }
}
