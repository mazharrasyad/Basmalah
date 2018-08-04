<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class belajarApiTest extends TestCase
{
    use MakebelajarTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatebelajar()
    {
        $belajar = $this->fakebelajarData();
        $this->json('POST', '/api/v1/belajars', $belajar);

        $this->assertApiResponse($belajar);
    }

    /**
     * @test
     */
    public function testReadbelajar()
    {
        $belajar = $this->makebelajar();
        $this->json('GET', '/api/v1/belajars/'.$belajar->id);

        $this->assertApiResponse($belajar->toArray());
    }

    /**
     * @test
     */
    public function testUpdatebelajar()
    {
        $belajar = $this->makebelajar();
        $editedbelajar = $this->fakebelajarData();

        $this->json('PUT', '/api/v1/belajars/'.$belajar->id, $editedbelajar);

        $this->assertApiResponse($editedbelajar);
    }

    /**
     * @test
     */
    public function testDeletebelajar()
    {
        $belajar = $this->makebelajar();
        $this->json('DELETE', '/api/v1/belajars/'.$belajar->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/belajars/'.$belajar->id);

        $this->assertResponseStatus(404);
    }
}
