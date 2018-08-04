<?php

use Faker\Factory as Faker;
use App\Models\pengangguran;
use App\Repositories\pengangguranRepository;

trait MakepengangguranTrait
{
    /**
     * Create fake instance of pengangguran and save it in database
     *
     * @param array $pengangguranFields
     * @return pengangguran
     */
    public function makepengangguran($pengangguranFields = [])
    {
        /** @var pengangguranRepository $pengangguranRepo */
        $pengangguranRepo = App::make(pengangguranRepository::class);
        $theme = $this->fakepengangguranData($pengangguranFields);
        return $pengangguranRepo->create($theme);
    }

    /**
     * Get fake instance of pengangguran
     *
     * @param array $pengangguranFields
     * @return pengangguran
     */
    public function fakepengangguran($pengangguranFields = [])
    {
        return new pengangguran($this->fakepengangguranData($pengangguranFields));
    }

    /**
     * Get fake data of pengangguran
     *
     * @param array $postFields
     * @return array
     */
    public function fakepengangguranData($pengangguranFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nama_lengkap' => $fake->word,
            'agama' => $fake->word,
            'jenis_kelamin' => $fake->word,
            'alamat' => $fake->text,
            'pendidikan_terakhir' => $fake->word,
            'peminatan' => $fake->word,
            'lama_menganggur' => $fake->word,
            'jumlah_orang_tanggungan' => $fake->word,
            'status' => $fake->word,
            'dkm_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $pengangguranFields);
    }
}
