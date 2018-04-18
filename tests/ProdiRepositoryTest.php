<?php

use App\Models\Prodi;
use App\Repositories\ProdiRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProdiRepositoryTest extends TestCase
{
    use MakeProdiTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProdiRepository
     */
    protected $prodiRepo;

    public function setUp()
    {
        parent::setUp();
        $this->prodiRepo = App::make(ProdiRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateProdi()
    {
        $prodi = $this->fakeProdiData();
        $createdProdi = $this->prodiRepo->create($prodi);
        $createdProdi = $createdProdi->toArray();
        $this->assertArrayHasKey('id', $createdProdi);
        $this->assertNotNull($createdProdi['id'], 'Created Prodi must have id specified');
        $this->assertNotNull(Prodi::find($createdProdi['id']), 'Prodi with given id must be in DB');
        $this->assertModelData($prodi, $createdProdi);
    }

    /**
     * @test read
     */
    public function testReadProdi()
    {
        $prodi = $this->makeProdi();
        $dbProdi = $this->prodiRepo->find($prodi->id);
        $dbProdi = $dbProdi->toArray();
        $this->assertModelData($prodi->toArray(), $dbProdi);
    }

    /**
     * @test update
     */
    public function testUpdateProdi()
    {
        $prodi = $this->makeProdi();
        $fakeProdi = $this->fakeProdiData();
        $updatedProdi = $this->prodiRepo->update($fakeProdi, $prodi->id);
        $this->assertModelData($fakeProdi, $updatedProdi->toArray());
        $dbProdi = $this->prodiRepo->find($prodi->id);
        $this->assertModelData($fakeProdi, $dbProdi->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteProdi()
    {
        $prodi = $this->makeProdi();
        $resp = $this->prodiRepo->delete($prodi->id);
        $this->assertTrue($resp);
        $this->assertNull(Prodi::find($prodi->id), 'Prodi should not exist in DB');
    }
}
