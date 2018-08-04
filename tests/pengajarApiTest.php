<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class pengajarApiTest extends TestCase
{
    use MakepengajarTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatepengajar()
    {
        $pengajar = $this->fakepengajarData();
        $this->json('POST', '/api/v1/pengajars', $pengajar);

        $this->assertApiResponse($pengajar);
    }

    /**
     * @test
     */
    public function testReadpengajar()
    {
        $pengajar = $this->makepengajar();
        $this->json('GET', '/api/v1/pengajars/'.$pengajar->id);

        $this->assertApiResponse($pengajar->toArray());
    }

    /**
     * @test
     */
    public function testUpdatepengajar()
    {
        $pengajar = $this->makepengajar();
        $editedpengajar = $this->fakepengajarData();

        $this->json('PUT', '/api/v1/pengajars/'.$pengajar->id, $editedpengajar);

        $this->assertApiResponse($editedpengajar);
    }

    /**
     * @test
     */
    public function testDeletepengajar()
    {
        $pengajar = $this->makepengajar();
        $this->json('DELETE', '/api/v1/pengajars/'.$pengajar->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/pengajars/'.$pengajar->id);

        $this->assertResponseStatus(404);
    }
}
