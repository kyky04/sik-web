<?php

use App\Models\PendaftaranBeasiswa;
use App\Repositories\PendaftaranBeasiswaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PendaftaranBeasiswaRepositoryTest extends TestCase
{
    use MakePendaftaranBeasiswaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PendaftaranBeasiswaRepository
     */
    protected $pendaftaranBeasiswaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->pendaftaranBeasiswaRepo = App::make(PendaftaranBeasiswaRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePendaftaranBeasiswa()
    {
        $pendaftaranBeasiswa = $this->fakePendaftaranBeasiswaData();
        $createdPendaftaranBeasiswa = $this->pendaftaranBeasiswaRepo->create($pendaftaranBeasiswa);
        $createdPendaftaranBeasiswa = $createdPendaftaranBeasiswa->toArray();
        $this->assertArrayHasKey('id', $createdPendaftaranBeasiswa);
        $this->assertNotNull($createdPendaftaranBeasiswa['id'], 'Created PendaftaranBeasiswa must have id specified');
        $this->assertNotNull(PendaftaranBeasiswa::find($createdPendaftaranBeasiswa['id']), 'PendaftaranBeasiswa with given id must be in DB');
        $this->assertModelData($pendaftaranBeasiswa, $createdPendaftaranBeasiswa);
    }

    /**
     * @test read
     */
    public function testReadPendaftaranBeasiswa()
    {
        $pendaftaranBeasiswa = $this->makePendaftaranBeasiswa();
        $dbPendaftaranBeasiswa = $this->pendaftaranBeasiswaRepo->find($pendaftaranBeasiswa->id);
        $dbPendaftaranBeasiswa = $dbPendaftaranBeasiswa->toArray();
        $this->assertModelData($pendaftaranBeasiswa->toArray(), $dbPendaftaranBeasiswa);
    }

    /**
     * @test update
     */
    public function testUpdatePendaftaranBeasiswa()
    {
        $pendaftaranBeasiswa = $this->makePendaftaranBeasiswa();
        $fakePendaftaranBeasiswa = $this->fakePendaftaranBeasiswaData();
        $updatedPendaftaranBeasiswa = $this->pendaftaranBeasiswaRepo->update($fakePendaftaranBeasiswa, $pendaftaranBeasiswa->id);
        $this->assertModelData($fakePendaftaranBeasiswa, $updatedPendaftaranBeasiswa->toArray());
        $dbPendaftaranBeasiswa = $this->pendaftaranBeasiswaRepo->find($pendaftaranBeasiswa->id);
        $this->assertModelData($fakePendaftaranBeasiswa, $dbPendaftaranBeasiswa->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePendaftaranBeasiswa()
    {
        $pendaftaranBeasiswa = $this->makePendaftaranBeasiswa();
        $resp = $this->pendaftaranBeasiswaRepo->delete($pendaftaranBeasiswa->id);
        $this->assertTrue($resp);
        $this->assertNull(PendaftaranBeasiswa::find($pendaftaranBeasiswa->id), 'PendaftaranBeasiswa should not exist in DB');
    }
}
