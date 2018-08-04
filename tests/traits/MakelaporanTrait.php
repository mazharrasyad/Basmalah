<?php

use Faker\Factory as Faker;
use App\Models\laporan;
use App\Repositories\laporanRepository;

trait MakelaporanTrait
{
    /**
     * Create fake instance of laporan and save it in database
     *
     * @param array $laporanFields
     * @return laporan
     */
    public function makelaporan($laporanFields = [])
    {
        /** @var laporanRepository $laporanRepo */
        $laporanRepo = App::make(laporanRepository::class);
        $theme = $this->fakelaporanData($laporanFields);
        return $laporanRepo->create($theme);
    }

    /**
     * Get fake instance of laporan
     *
     * @param array $laporanFields
     * @return laporan
     */
    public function fakelaporan($laporanFields = [])
    {
        return new laporan($this->fakelaporanData($laporanFields));
    }

    /**
     * Get fake data of laporan
     *
     * @param array $postFields
     * @return array
     */
    public function fakelaporanData($laporanFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'no_handphone' => $fake->word,
            'pesan' => $fake->text,
            'url' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $laporanFields);
    }
}
