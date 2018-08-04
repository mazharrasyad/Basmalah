<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class laporanApiTest extends TestCase
{
    use MakelaporanTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatelaporan()
    {
        $laporan = $this->fakelaporanData();
        $this->json('POST', '/api/v1/laporans', $laporan);

        $this->assertApiResponse($laporan);
    }

    /**
     * @test
     */
    public function testReadlaporan()
    {
        $laporan = $this->makelaporan();
        $this->json('GET', '/api/v1/laporans/'.$laporan->id);

        $this->assertApiResponse($laporan->toArray());
    }

    /**
     * @test
     */
    public function testUpdatelaporan()
    {
        $laporan = $this->makelaporan();
        $editedlaporan = $this->fakelaporanData();

        $this->json('PUT', '/api/v1/laporans/'.$laporan->id, $editedlaporan);

        $this->assertApiResponse($editedlaporan);
    }

    /**
     * @test
     */
    public function testDeletelaporan()
    {
        $laporan = $this->makelaporan();
        $this->json('DELETE', '/api/v1/laporans/'.$laporan->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/laporans/'.$laporan->id);

        $this->assertResponseStatus(404);
    }
}
