<?php

use App\Models\Pendaftar;
use App\Repositories\PendaftarRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PendaftarRepositoryTest extends TestCase
{
    use MakePendaftarTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PendaftarRepository
     */
    protected $pendaftarRepo;

    public function setUp()
    {
        parent::setUp();
        $this->pendaftarRepo = App::make(PendaftarRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePendaftar()
    {
        $pendaftar = $this->fakePendaftarData();
        $createdPendaftar = $this->pendaftarRepo->create($pendaftar);
        $createdPendaftar = $createdPendaftar->toArray();
        $this->assertArrayHasKey('id', $createdPendaftar);
        $this->assertNotNull($createdPendaftar['id'], 'Created Pendaftar must have id specified');
        $this->assertNotNull(Pendaftar::find($createdPendaftar['id']), 'Pendaftar with given id must be in DB');
        $this->assertModelData($pendaftar, $createdPendaftar);
    }

    /**
     * @test read
     */
    public function testReadPendaftar()
    {
        $pendaftar = $this->makePendaftar();
        $dbPendaftar = $this->pendaftarRepo->find($pendaftar->id);
        $dbPendaftar = $dbPendaftar->toArray();
        $this->assertModelData($pendaftar->toArray(), $dbPendaftar);
    }

    /**
     * @test update
     */
    public function testUpdatePendaftar()
    {
        $pendaftar = $this->makePendaftar();
        $fakePendaftar = $this->fakePendaftarData();
        $updatedPendaftar = $this->pendaftarRepo->update($fakePendaftar, $pendaftar->id);
        $this->assertModelData($fakePendaftar, $updatedPendaftar->toArray());
        $dbPendaftar = $this->pendaftarRepo->find($pendaftar->id);
        $this->assertModelData($fakePendaftar, $dbPendaftar->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePendaftar()
    {
        $pendaftar = $this->makePendaftar();
        $resp = $this->pendaftarRepo->delete($pendaftar->id);
        $this->assertTrue($resp);
        $this->assertNull(Pendaftar::find($pendaftar->id), 'Pendaftar should not exist in DB');
    }
}
