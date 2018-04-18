<?php

use App\Models\DataBeritaJur;
use App\Repositories\DataBeritaJurRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DataBeritaJurRepositoryTest extends TestCase
{
    use MakeDataBeritaJurTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var DataBeritaJurRepository
     */
    protected $dataBeritaJurRepo;

    public function setUp()
    {
        parent::setUp();
        $this->dataBeritaJurRepo = App::make(DataBeritaJurRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateDataBeritaJur()
    {
        $dataBeritaJur = $this->fakeDataBeritaJurData();
        $createdDataBeritaJur = $this->dataBeritaJurRepo->create($dataBeritaJur);
        $createdDataBeritaJur = $createdDataBeritaJur->toArray();
        $this->assertArrayHasKey('id', $createdDataBeritaJur);
        $this->assertNotNull($createdDataBeritaJur['id'], 'Created DataBeritaJur must have id specified');
        $this->assertNotNull(DataBeritaJur::find($createdDataBeritaJur['id']), 'DataBeritaJur with given id must be in DB');
        $this->assertModelData($dataBeritaJur, $createdDataBeritaJur);
    }

    /**
     * @test read
     */
    public function testReadDataBeritaJur()
    {
        $dataBeritaJur = $this->makeDataBeritaJur();
        $dbDataBeritaJur = $this->dataBeritaJurRepo->find($dataBeritaJur->id);
        $dbDataBeritaJur = $dbDataBeritaJur->toArray();
        $this->assertModelData($dataBeritaJur->toArray(), $dbDataBeritaJur);
    }

    /**
     * @test update
     */
    public function testUpdateDataBeritaJur()
    {
        $dataBeritaJur = $this->makeDataBeritaJur();
        $fakeDataBeritaJur = $this->fakeDataBeritaJurData();
        $updatedDataBeritaJur = $this->dataBeritaJurRepo->update($fakeDataBeritaJur, $dataBeritaJur->id);
        $this->assertModelData($fakeDataBeritaJur, $updatedDataBeritaJur->toArray());
        $dbDataBeritaJur = $this->dataBeritaJurRepo->find($dataBeritaJur->id);
        $this->assertModelData($fakeDataBeritaJur, $dbDataBeritaJur->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteDataBeritaJur()
    {
        $dataBeritaJur = $this->makeDataBeritaJur();
        $resp = $this->dataBeritaJurRepo->delete($dataBeritaJur->id);
        $this->assertTrue($resp);
        $this->assertNull(DataBeritaJur::find($dataBeritaJur->id), 'DataBeritaJur should not exist in DB');
    }
}
