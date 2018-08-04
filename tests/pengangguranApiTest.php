<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class pengangguranApiTest extends TestCase
{
    use MakepengangguranTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatepengangguran()
    {
        $pengangguran = $this->fakepengangguranData();
        $this->json('POST', '/api/v1/penganggurans', $pengangguran);

        $this->assertApiResponse($pengangguran);
    }

    /**
     * @test
     */
    public function testReadpengangguran()
    {
        $pengangguran = $this->makepengangguran();
        $this->json('GET', '/api/v1/penganggurans/'.$pengangguran->id);

        $this->assertApiResponse($pengangguran->toArray());
    }

    /**
     * @test
     */
    public function testUpdatepengangguran()
    {
        $pengangguran = $this->makepengangguran();
        $editedpengangguran = $this->fakepengangguranData();

        $this->json('PUT', '/api/v1/penganggurans/'.$pengangguran->id, $editedpengangguran);

        $this->assertApiResponse($editedpengangguran);
    }

    /**
     * @test
     */
    public function testDeletepengangguran()
    {
        $pengangguran = $this->makepengangguran();
        $this->json('DELETE', '/api/v1/penganggurans/'.$pengangguran->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/penganggurans/'.$pengangguran->id);

        $this->assertResponseStatus(404);
    }
}
