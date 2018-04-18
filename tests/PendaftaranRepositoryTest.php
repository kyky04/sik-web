<?php

use App\Models\Pendaftaran;
use App\Repositories\PendaftaranRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PendaftaranRepositoryTest extends TestCase
{
    use MakePendaftaranTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PendaftaranRepository
     */
    protected $pendaftaranRepo;

    public function setUp()
    {
        parent::setUp();
        $this->pendaftaranRepo = App::make(PendaftaranRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePendaftaran()
    {
        $pendaftaran = $this->fakePendaftaranData();
        $createdPendaftaran = $this->pendaftaranRepo->create($pendaftaran);
        $createdPendaftaran = $createdPendaftaran->toArray();
        $this->assertArrayHasKey('id', $createdPendaftaran);
        $this->assertNotNull($createdPendaftaran['id'], 'Created Pendaftaran must have id specified');
        $this->assertNotNull(Pendaftaran::find($createdPendaftaran['id']), 'Pendaftaran with given id must be in DB');
        $this->assertModelData($pendaftaran, $createdPendaftaran);
    }

    /**
     * @test read
     */
    public function testReadPendaftaran()
    {
        $pendaftaran = $this->makePendaftaran();
        $dbPendaftaran = $this->pendaftaranRepo->find($pendaftaran->id);
        $dbPendaftaran = $dbPendaftaran->toArray();
        $this->assertModelData($pendaftaran->toArray(), $dbPendaftaran);
    }

    /**
     * @test update
     */
    public function testUpdatePendaftaran()
    {
        $pendaftaran = $this->makePendaftaran();
        $fakePendaftaran = $this->fakePendaftaranData();
        $updatedPendaftaran = $this->pendaftaranRepo->update($fakePendaftaran, $pendaftaran->id);
        $this->assertModelData($fakePendaftaran, $updatedPendaftaran->toArray());
        $dbPendaftaran = $this->pendaftaranRepo->find($pendaftaran->id);
        $this->assertModelData($fakePendaftaran, $dbPendaftaran->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePendaftaran()
    {
        $pendaftaran = $this->makePendaftaran();
        $resp = $this->pendaftaranRepo->delete($pendaftaran->id);
        $this->assertTrue($resp);
        $this->assertNull(Pendaftaran::find($pendaftaran->id), 'Pendaftaran should not exist in DB');
    }
}
