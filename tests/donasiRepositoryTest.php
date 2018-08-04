<?php

use App\Models\donasi;
use App\Repositories\donasiRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class donasiRepositoryTest extends TestCase
{
    use MakedonasiTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var donasiRepository
     */
    protected $donasiRepo;

    public function setUp()
    {
        parent::setUp();
        $this->donasiRepo = App::make(donasiRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatedonasi()
    {
        $donasi = $this->fakedonasiData();
        $createddonasi = $this->donasiRepo->create($donasi);
        $createddonasi = $createddonasi->toArray();
        $this->assertArrayHasKey('id', $createddonasi);
        $this->assertNotNull($createddonasi['id'], 'Created donasi must have id specified');
        $this->assertNotNull(donasi::find($createddonasi['id']), 'donasi with given id must be in DB');
        $this->assertModelData($donasi, $createddonasi);
    }

    /**
     * @test read
     */
    public function testReaddonasi()
    {
        $donasi = $this->makedonasi();
        $dbdonasi = $this->donasiRepo->find($donasi->id);
        $dbdonasi = $dbdonasi->toArray();
        $this->assertModelData($donasi->toArray(), $dbdonasi);
    }

    /**
     * @test update
     */
    public function testUpdatedonasi()
    {
        $donasi = $this->makedonasi();
        $fakedonasi = $this->fakedonasiData();
        $updateddonasi = $this->donasiRepo->update($fakedonasi, $donasi->id);
        $this->assertModelData($fakedonasi, $updateddonasi->toArray());
        $dbdonasi = $this->donasiRepo->find($donasi->id);
        $this->assertModelData($fakedonasi, $dbdonasi->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletedonasi()
    {
        $donasi = $this->makedonasi();
        $resp = $this->donasiRepo->delete($donasi->id);
        $this->assertTrue($resp);
        $this->assertNull(donasi::find($donasi->id), 'donasi should not exist in DB');
    }
}
