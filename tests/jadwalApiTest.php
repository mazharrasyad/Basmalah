<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class jadwalApiTest extends TestCase
{
    use MakejadwalTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatejadwal()
    {
        $jadwal = $this->fakejadwalData();
        $this->json('POST', '/api/v1/jadwals', $jadwal);

        $this->assertApiResponse($jadwal);
    }

    /**
     * @test
     */
    public function testReadjadwal()
    {
        $jadwal = $this->makejadwal();
        $this->json('GET', '/api/v1/jadwals/'.$jadwal->id);

        $this->assertApiResponse($jadwal->toArray());
    }

    /**
     * @test
     */
    public function testUpdatejadwal()
    {
        $jadwal = $this->makejadwal();
        $editedjadwal = $this->fakejadwalData();

        $this->json('PUT', '/api/v1/jadwals/'.$jadwal->id, $editedjadwal);

        $this->assertApiResponse($editedjadwal);
    }

    /**
     * @test
     */
    public function testDeletejadwal()
    {
        $jadwal = $this->makejadwal();
        $this->json('DELETE', '/api/v1/jadwals/'.$jadwal->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/jadwals/'.$jadwal->id);

        $this->assertResponseStatus(404);
    }
}
