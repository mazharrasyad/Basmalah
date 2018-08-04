<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class penggunaApiTest extends TestCase
{
    use MakepenggunaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatepengguna()
    {
        $pengguna = $this->fakepenggunaData();
        $this->json('POST', '/api/v1/penggunas', $pengguna);

        $this->assertApiResponse($pengguna);
    }

    /**
     * @test
     */
    public function testReadpengguna()
    {
        $pengguna = $this->makepengguna();
        $this->json('GET', '/api/v1/penggunas/'.$pengguna->id);

        $this->assertApiResponse($pengguna->toArray());
    }

    /**
     * @test
     */
    public function testUpdatepengguna()
    {
        $pengguna = $this->makepengguna();
        $editedpengguna = $this->fakepenggunaData();

        $this->json('PUT', '/api/v1/penggunas/'.$pengguna->id, $editedpengguna);

        $this->assertApiResponse($editedpengguna);
    }

    /**
     * @test
     */
    public function testDeletepengguna()
    {
        $pengguna = $this->makepengguna();
        $this->json('DELETE', '/api/v1/penggunas/'.$pengguna->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/penggunas/'.$pengguna->id);

        $this->assertResponseStatus(404);
    }
}
