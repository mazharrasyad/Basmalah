<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class dkmApiTest extends TestCase
{
    use MakedkmTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatedkm()
    {
        $dkm = $this->fakedkmData();
        $this->json('POST', '/api/v1/dkms', $dkm);

        $this->assertApiResponse($dkm);
    }

    /**
     * @test
     */
    public function testReaddkm()
    {
        $dkm = $this->makedkm();
        $this->json('GET', '/api/v1/dkms/'.$dkm->id);

        $this->assertApiResponse($dkm->toArray());
    }

    /**
     * @test
     */
    public function testUpdatedkm()
    {
        $dkm = $this->makedkm();
        $editeddkm = $this->fakedkmData();

        $this->json('PUT', '/api/v1/dkms/'.$dkm->id, $editeddkm);

        $this->assertApiResponse($editeddkm);
    }

    /**
     * @test
     */
    public function testDeletedkm()
    {
        $dkm = $this->makedkm();
        $this->json('DELETE', '/api/v1/dkms/'.$dkm->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/dkms/'.$dkm->id);

        $this->assertResponseStatus(404);
    }
}
