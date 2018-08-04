<?php

use App\Models\dkm;
use App\Repositories\dkmRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class dkmRepositoryTest extends TestCase
{
    use MakedkmTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var dkmRepository
     */
    protected $dkmRepo;

    public function setUp()
    {
        parent::setUp();
        $this->dkmRepo = App::make(dkmRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatedkm()
    {
        $dkm = $this->fakedkmData();
        $createddkm = $this->dkmRepo->create($dkm);
        $createddkm = $createddkm->toArray();
        $this->assertArrayHasKey('id', $createddkm);
        $this->assertNotNull($createddkm['id'], 'Created dkm must have id specified');
        $this->assertNotNull(dkm::find($createddkm['id']), 'dkm with given id must be in DB');
        $this->assertModelData($dkm, $createddkm);
    }

    /**
     * @test read
     */
    public function testReaddkm()
    {
        $dkm = $this->makedkm();
        $dbdkm = $this->dkmRepo->find($dkm->id);
        $dbdkm = $dbdkm->toArray();
        $this->assertModelData($dkm->toArray(), $dbdkm);
    }

    /**
     * @test update
     */
    public function testUpdatedkm()
    {
        $dkm = $this->makedkm();
        $fakedkm = $this->fakedkmData();
        $updateddkm = $this->dkmRepo->update($fakedkm, $dkm->id);
        $this->assertModelData($fakedkm, $updateddkm->toArray());
        $dbdkm = $this->dkmRepo->find($dkm->id);
        $this->assertModelData($fakedkm, $dbdkm->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletedkm()
    {
        $dkm = $this->makedkm();
        $resp = $this->dkmRepo->delete($dkm->id);
        $this->assertTrue($resp);
        $this->assertNull(dkm::find($dkm->id), 'dkm should not exist in DB');
    }
}
