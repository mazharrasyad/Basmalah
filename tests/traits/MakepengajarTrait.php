<?php

use Faker\Factory as Faker;
use App\Models\pengajar;
use App\Repositories\pengajarRepository;

trait MakepengajarTrait
{
    /**
     * Create fake instance of pengajar and save it in database
     *
     * @param array $pengajarFields
     * @return pengajar
     */
    public function makepengajar($pengajarFields = [])
    {
        /** @var pengajarRepository $pengajarRepo */
        $pengajarRepo = App::make(pengajarRepository::class);
        $theme = $this->fakepengajarData($pengajarFields);
        return $pengajarRepo->create($theme);
    }

    /**
     * Get fake instance of pengajar
     *
     * @param array $pengajarFields
     * @return pengajar
     */
    public function fakepengajar($pengajarFields = [])
    {
        return new pengajar($this->fakepengajarData($pengajarFields));
    }

    /**
     * Get fake data of pengajar
     *
     * @param array $postFields
     * @return array
     */
    public function fakepengajarData($pengajarFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nama_lengkap' => $fake->word,
            'agama' => $fake->word,
            'jenis_kelamin' => $fake->word,
            'alamat' => $fake->text,
            'no_handphone' => $fake->word,
            'email' => $fake->word,
            'bidang_keahlian' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $pengajarFields);
    }
}
