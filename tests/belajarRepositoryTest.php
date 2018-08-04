<?php

use App\Models\belajar;
use App\Repositories\belajarRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class belajarRepositoryTest extends TestCase
{
    use MakebelajarTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var belajarRepository
     */
    protected $belajarRepo;

    public function setUp()
    {
        parent::setUp();
        $this->belajarRepo = App::make(belajarRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatebelajar()
    {
        $belajar = $this->fakebelajarData();
        $createdbelajar = $this->belajarRepo->create($belajar);
        $createdbelajar = $createdbelajar->toArray();
        $this->assertArrayHasKey('id', $createdbelajar);
        $this->assertNotNull($createdbelajar['id'], 'Created belajar must have id specified');
        $this->assertNotNull(belajar::find($createdbelajar['id']), 'belajar with given id must be in DB');
        $this->assertModelData($belajar, $createdbelajar);
    }

    /**
     * @test read
     */
    public function testReadbelajar()
    {
        $belajar = $this->makebelajar();
        $dbbelajar = $this->belajarRepo->find($belajar->id);
        $dbbelajar = $dbbelajar->toArray();
        $this->assertModelData($belajar->toArray(), $dbbelajar);
    }

    /**
     * @test update
     */
    public function testUpdatebelajar()
    {
        $belajar = $this->makebelajar();
        $fakebelajar = $this->fakebelajarData();
        $updatedbelajar = $this->belajarRepo->update($fakebelajar, $belajar->id);
        $this->assertModelData($fakebelajar, $updatedbelajar->toArray());
        $dbbelajar = $this->belajarRepo->find($belajar->id);
        $this->assertModelData($fakebelajar, $dbbelajar->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletebelajar()
    {
        $belajar = $this->makebelajar();
        $resp = $this->belajarRepo->delete($belajar->id);
        $this->assertTrue($resp);
        $this->assertNull(belajar::find($belajar->id), 'belajar should not exist in DB');
    }
}
