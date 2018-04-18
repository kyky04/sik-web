<?php

use App\Models\Beasiswa;
use App\Repositories\BeasiswaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BeasiswaRepositoryTest extends TestCase
{
    use MakeBeasiswaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var BeasiswaRepository
     */
    protected $beasiswaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->beasiswaRepo = App::make(BeasiswaRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateBeasiswa()
    {
        $beasiswa = $this->fakeBeasiswaData();
        $createdBeasiswa = $this->beasiswaRepo->create($beasiswa);
        $createdBeasiswa = $createdBeasiswa->toArray();
        $this->assertArrayHasKey('id', $createdBeasiswa);
        $this->assertNotNull($createdBeasiswa['id'], 'Created Beasiswa must have id specified');
        $this->assertNotNull(Beasiswa::find($createdBeasiswa['id']), 'Beasiswa with given id must be in DB');
        $this->assertModelData($beasiswa, $createdBeasiswa);
    }

    /**
     * @test read
     */
    public function testReadBeasiswa()
    {
        $beasiswa = $this->makeBeasiswa();
        $dbBeasiswa = $this->beasiswaRepo->find($beasiswa->id);
        $dbBeasiswa = $dbBeasiswa->toArray();
        $this->assertModelData($beasiswa->toArray(), $dbBeasiswa);
    }

    /**
     * @test update
     */
    public function testUpdateBeasiswa()
    {
        $beasiswa = $this->makeBeasiswa();
        $fakeBeasiswa = $this->fakeBeasiswaData();
        $updatedBeasiswa = $this->beasiswaRepo->update($fakeBeasiswa, $beasiswa->id);
        $this->assertModelData($fakeBeasiswa, $updatedBeasiswa->toArray());
        $dbBeasiswa = $this->beasiswaRepo->find($beasiswa->id);
        $this->assertModelData($fakeBeasiswa, $dbBeasiswa->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteBeasiswa()
    {
        $beasiswa = $this->makeBeasiswa();
        $resp = $this->beasiswaRepo->delete($beasiswa->id);
        $this->assertTrue($resp);
        $this->assertNull(Beasiswa::find($beasiswa->id), 'Beasiswa should not exist in DB');
    }
}
