<?php

use App\Models\pengajar;
use App\Repositories\pengajarRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class pengajarRepositoryTest extends TestCase
{
    use MakepengajarTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var pengajarRepository
     */
    protected $pengajarRepo;

    public function setUp()
    {
        parent::setUp();
        $this->pengajarRepo = App::make(pengajarRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatepengajar()
    {
        $pengajar = $this->fakepengajarData();
        $createdpengajar = $this->pengajarRepo->create($pengajar);
        $createdpengajar = $createdpengajar->toArray();
        $this->assertArrayHasKey('id', $createdpengajar);
        $this->assertNotNull($createdpengajar['id'], 'Created pengajar must have id specified');
        $this->assertNotNull(pengajar::find($createdpengajar['id']), 'pengajar with given id must be in DB');
        $this->assertModelData($pengajar, $createdpengajar);
    }

    /**
     * @test read
     */
    public function testReadpengajar()
    {
        $pengajar = $this->makepengajar();
        $dbpengajar = $this->pengajarRepo->find($pengajar->id);
        $dbpengajar = $dbpengajar->toArray();
        $this->assertModelData($pengajar->toArray(), $dbpengajar);
    }

    /**
     * @test update
     */
    public function testUpdatepengajar()
    {
        $pengajar = $this->makepengajar();
        $fakepengajar = $this->fakepengajarData();
        $updatedpengajar = $this->pengajarRepo->update($fakepengajar, $pengajar->id);
        $this->assertModelData($fakepengajar, $updatedpengajar->toArray());
        $dbpengajar = $this->pengajarRepo->find($pengajar->id);
        $this->assertModelData($fakepengajar, $dbpengajar->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletepengajar()
    {
        $pengajar = $this->makepengajar();
        $resp = $this->pengajarRepo->delete($pengajar->id);
        $this->assertTrue($resp);
        $this->assertNull(pengajar::find($pengajar->id), 'pengajar should not exist in DB');
    }
}
