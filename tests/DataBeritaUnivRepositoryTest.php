<?php

use App\Models\DataBeritaUniv;
use App\Repositories\DataBeritaUnivRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DataBeritaUnivRepositoryTest extends TestCase
{
    use MakeDataBeritaUnivTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var DataBeritaUnivRepository
     */
    protected $dataBeritaUnivRepo;

    public function setUp()
    {
        parent::setUp();
        $this->dataBeritaUnivRepo = App::make(DataBeritaUnivRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateDataBeritaUniv()
    {
        $dataBeritaUniv = $this->fakeDataBeritaUnivData();
        $createdDataBeritaUniv = $this->dataBeritaUnivRepo->create($dataBeritaUniv);
        $createdDataBeritaUniv = $createdDataBeritaUniv->toArray();
        $this->assertArrayHasKey('id', $createdDataBeritaUniv);
        $this->assertNotNull($createdDataBeritaUniv['id'], 'Created DataBeritaUniv must have id specified');
        $this->assertNotNull(DataBeritaUniv::find($createdDataBeritaUniv['id']), 'DataBeritaUniv with given id must be in DB');
        $this->assertModelData($dataBeritaUniv, $createdDataBeritaUniv);
    }

    /**
     * @test read
     */
    public function testReadDataBeritaUniv()
    {
        $dataBeritaUniv = $this->makeDataBeritaUniv();
        $dbDataBeritaUniv = $this->dataBeritaUnivRepo->find($dataBeritaUniv->id);
        $dbDataBeritaUniv = $dbDataBeritaUniv->toArray();
        $this->assertModelData($dataBeritaUniv->toArray(), $dbDataBeritaUniv);
    }

    /**
     * @test update
     */
    public function testUpdateDataBeritaUniv()
    {
        $dataBeritaUniv = $this->makeDataBeritaUniv();
        $fakeDataBeritaUniv = $this->fakeDataBeritaUnivData();
        $updatedDataBeritaUniv = $this->dataBeritaUnivRepo->update($fakeDataBeritaUniv, $dataBeritaUniv->id);
        $this->assertModelData($fakeDataBeritaUniv, $updatedDataBeritaUniv->toArray());
        $dbDataBeritaUniv = $this->dataBeritaUnivRepo->find($dataBeritaUniv->id);
        $this->assertModelData($fakeDataBeritaUniv, $dbDataBeritaUniv->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteDataBeritaUniv()
    {
        $dataBeritaUniv = $this->makeDataBeritaUniv();
        $resp = $this->dataBeritaUnivRepo->delete($dataBeritaUniv->id);
        $this->assertTrue($resp);
        $this->assertNull(DataBeritaUniv::find($dataBeritaUniv->id), 'DataBeritaUniv should not exist in DB');
    }
}
