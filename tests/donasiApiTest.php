<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class donasiApiTest extends TestCase
{
    use MakedonasiTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatedonasi()
    {
        $donasi = $this->fakedonasiData();
        $this->json('POST', '/api/v1/donasis', $donasi);

        $this->assertApiResponse($donasi);
    }

    /**
     * @test
     */
    public function testReaddonasi()
    {
        $donasi = $this->makedonasi();
        $this->json('GET', '/api/v1/donasis/'.$donasi->id);

        $this->assertApiResponse($donasi->toArray());
    }

    /**
     * @test
     */
    public function testUpdatedonasi()
    {
        $donasi = $this->makedonasi();
        $editeddonasi = $this->fakedonasiData();

        $this->json('PUT', '/api/v1/donasis/'.$donasi->id, $editeddonasi);

        $this->assertApiResponse($editeddonasi);
    }

    /**
     * @test
     */
    public function testDeletedonasi()
    {
        $donasi = $this->makedonasi();
        $this->json('DELETE', '/api/v1/donasis/'.$donasi->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/donasis/'.$donasi->id);

        $this->assertResponseStatus(404);
    }
}
