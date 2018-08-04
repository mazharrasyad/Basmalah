<?php

use App\Models\laporan;
use App\Repositories\laporanRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class laporanRepositoryTest extends TestCase
{
    use MakelaporanTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var laporanRepository
     */
    protected $laporanRepo;

    public function setUp()
    {
        parent::setUp();
        $this->laporanRepo = App::make(laporanRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatelaporan()
    {
        $laporan = $this->fakelaporanData();
        $createdlaporan = $this->laporanRepo->create($laporan);
        $createdlaporan = $createdlaporan->toArray();
        $this->assertArrayHasKey('id', $createdlaporan);
        $this->assertNotNull($createdlaporan['id'], 'Created laporan must have id specified');
        $this->assertNotNull(laporan::find($createdlaporan['id']), 'laporan with given id must be in DB');
        $this->assertModelData($laporan, $createdlaporan);
    }

    /**
     * @test read
     */
    public function testReadlaporan()
    {
        $laporan = $this->makelaporan();
        $dblaporan = $this->laporanRepo->find($laporan->id);
        $dblaporan = $dblaporan->toArray();
        $this->assertModelData($laporan->toArray(), $dblaporan);
    }

    /**
     * @test update
     */
    public function testUpdatelaporan()
    {
        $laporan = $this->makelaporan();
        $fakelaporan = $this->fakelaporanData();
        $updatedlaporan = $this->laporanRepo->update($fakelaporan, $laporan->id);
        $this->assertModelData($fakelaporan, $updatedlaporan->toArray());
        $dblaporan = $this->laporanRepo->find($laporan->id);
        $this->assertModelData($fakelaporan, $dblaporan->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletelaporan()
    {
        $laporan = $this->makelaporan();
        $resp = $this->laporanRepo->delete($laporan->id);
        $this->assertTrue($resp);
        $this->assertNull(laporan::find($laporan->id), 'laporan should not exist in DB');
    }
}
