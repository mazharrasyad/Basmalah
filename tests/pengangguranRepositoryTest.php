<?php

use App\Models\pengangguran;
use App\Repositories\pengangguranRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class pengangguranRepositoryTest extends TestCase
{
    use MakepengangguranTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var pengangguranRepository
     */
    protected $pengangguranRepo;

    public function setUp()
    {
        parent::setUp();
        $this->pengangguranRepo = App::make(pengangguranRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatepengangguran()
    {
        $pengangguran = $this->fakepengangguranData();
        $createdpengangguran = $this->pengangguranRepo->create($pengangguran);
        $createdpengangguran = $createdpengangguran->toArray();
        $this->assertArrayHasKey('id', $createdpengangguran);
        $this->assertNotNull($createdpengangguran['id'], 'Created pengangguran must have id specified');
        $this->assertNotNull(pengangguran::find($createdpengangguran['id']), 'pengangguran with given id must be in DB');
        $this->assertModelData($pengangguran, $createdpengangguran);
    }

    /**
     * @test read
     */
    public function testReadpengangguran()
    {
        $pengangguran = $this->makepengangguran();
        $dbpengangguran = $this->pengangguranRepo->find($pengangguran->id);
        $dbpengangguran = $dbpengangguran->toArray();
        $this->assertModelData($pengangguran->toArray(), $dbpengangguran);
    }

    /**
     * @test update
     */
    public function testUpdatepengangguran()
    {
        $pengangguran = $this->makepengangguran();
        $fakepengangguran = $this->fakepengangguranData();
        $updatedpengangguran = $this->pengangguranRepo->update($fakepengangguran, $pengangguran->id);
        $this->assertModelData($fakepengangguran, $updatedpengangguran->toArray());
        $dbpengangguran = $this->pengangguranRepo->find($pengangguran->id);
        $this->assertModelData($fakepengangguran, $dbpengangguran->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletepengangguran()
    {
        $pengangguran = $this->makepengangguran();
        $resp = $this->pengangguranRepo->delete($pengangguran->id);
        $this->assertTrue($resp);
        $this->assertNull(pengangguran::find($pengangguran->id), 'pengangguran should not exist in DB');
    }
}
