<?php

use App\Models\pengguna;
use App\Repositories\penggunaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class penggunaRepositoryTest extends TestCase
{
    use MakepenggunaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var penggunaRepository
     */
    protected $penggunaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->penggunaRepo = App::make(penggunaRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatepengguna()
    {
        $pengguna = $this->fakepenggunaData();
        $createdpengguna = $this->penggunaRepo->create($pengguna);
        $createdpengguna = $createdpengguna->toArray();
        $this->assertArrayHasKey('id', $createdpengguna);
        $this->assertNotNull($createdpengguna['id'], 'Created pengguna must have id specified');
        $this->assertNotNull(pengguna::find($createdpengguna['id']), 'pengguna with given id must be in DB');
        $this->assertModelData($pengguna, $createdpengguna);
    }

    /**
     * @test read
     */
    public function testReadpengguna()
    {
        $pengguna = $this->makepengguna();
        $dbpengguna = $this->penggunaRepo->find($pengguna->id);
        $dbpengguna = $dbpengguna->toArray();
        $this->assertModelData($pengguna->toArray(), $dbpengguna);
    }

    /**
     * @test update
     */
    public function testUpdatepengguna()
    {
        $pengguna = $this->makepengguna();
        $fakepengguna = $this->fakepenggunaData();
        $updatedpengguna = $this->penggunaRepo->update($fakepengguna, $pengguna->id);
        $this->assertModelData($fakepengguna, $updatedpengguna->toArray());
        $dbpengguna = $this->penggunaRepo->find($pengguna->id);
        $this->assertModelData($fakepengguna, $dbpengguna->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletepengguna()
    {
        $pengguna = $this->makepengguna();
        $resp = $this->penggunaRepo->delete($pengguna->id);
        $this->assertTrue($resp);
        $this->assertNull(pengguna::find($pengguna->id), 'pengguna should not exist in DB');
    }
}
