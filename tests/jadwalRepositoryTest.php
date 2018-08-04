<?php

use App\Models\jadwal;
use App\Repositories\jadwalRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class jadwalRepositoryTest extends TestCase
{
    use MakejadwalTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var jadwalRepository
     */
    protected $jadwalRepo;

    public function setUp()
    {
        parent::setUp();
        $this->jadwalRepo = App::make(jadwalRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatejadwal()
    {
        $jadwal = $this->fakejadwalData();
        $createdjadwal = $this->jadwalRepo->create($jadwal);
        $createdjadwal = $createdjadwal->toArray();
        $this->assertArrayHasKey('id', $createdjadwal);
        $this->assertNotNull($createdjadwal['id'], 'Created jadwal must have id specified');
        $this->assertNotNull(jadwal::find($createdjadwal['id']), 'jadwal with given id must be in DB');
        $this->assertModelData($jadwal, $createdjadwal);
    }

    /**
     * @test read
     */
    public function testReadjadwal()
    {
        $jadwal = $this->makejadwal();
        $dbjadwal = $this->jadwalRepo->find($jadwal->id);
        $dbjadwal = $dbjadwal->toArray();
        $this->assertModelData($jadwal->toArray(), $dbjadwal);
    }

    /**
     * @test update
     */
    public function testUpdatejadwal()
    {
        $jadwal = $this->makejadwal();
        $fakejadwal = $this->fakejadwalData();
        $updatedjadwal = $this->jadwalRepo->update($fakejadwal, $jadwal->id);
        $this->assertModelData($fakejadwal, $updatedjadwal->toArray());
        $dbjadwal = $this->jadwalRepo->find($jadwal->id);
        $this->assertModelData($fakejadwal, $dbjadwal->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletejadwal()
    {
        $jadwal = $this->makejadwal();
        $resp = $this->jadwalRepo->delete($jadwal->id);
        $this->assertTrue($resp);
        $this->assertNull(jadwal::find($jadwal->id), 'jadwal should not exist in DB');
    }
}
