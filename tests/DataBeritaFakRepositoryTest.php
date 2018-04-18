<?php

use App\Models\DataBeritaFak;
use App\Repositories\DataBeritaFakRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DataBeritaFakRepositoryTest extends TestCase
{
    use MakeDataBeritaFakTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var DataBeritaFakRepository
     */
    protected $dataBeritaFakRepo;

    public function setUp()
    {
        parent::setUp();
        $this->dataBeritaFakRepo = App::make(DataBeritaFakRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateDataBeritaFak()
    {
        $dataBeritaFak = $this->fakeDataBeritaFakData();
        $createdDataBeritaFak = $this->dataBeritaFakRepo->create($dataBeritaFak);
        $createdDataBeritaFak = $createdDataBeritaFak->toArray();
        $this->assertArrayHasKey('id', $createdDataBeritaFak);
        $this->assertNotNull($createdDataBeritaFak['id'], 'Created DataBeritaFak must have id specified');
        $this->assertNotNull(DataBeritaFak::find($createdDataBeritaFak['id']), 'DataBeritaFak with given id must be in DB');
        $this->assertModelData($dataBeritaFak, $createdDataBeritaFak);
    }

    /**
     * @test read
     */
    public function testReadDataBeritaFak()
    {
        $dataBeritaFak = $this->makeDataBeritaFak();
        $dbDataBeritaFak = $this->dataBeritaFakRepo->find($dataBeritaFak->id);
        $dbDataBeritaFak = $dbDataBeritaFak->toArray();
        $this->assertModelData($dataBeritaFak->toArray(), $dbDataBeritaFak);
    }

    /**
     * @test update
     */
    public function testUpdateDataBeritaFak()
    {
        $dataBeritaFak = $this->makeDataBeritaFak();
        $fakeDataBeritaFak = $this->fakeDataBeritaFakData();
        $updatedDataBeritaFak = $this->dataBeritaFakRepo->update($fakeDataBeritaFak, $dataBeritaFak->id);
        $this->assertModelData($fakeDataBeritaFak, $updatedDataBeritaFak->toArray());
        $dbDataBeritaFak = $this->dataBeritaFakRepo->find($dataBeritaFak->id);
        $this->assertModelData($fakeDataBeritaFak, $dbDataBeritaFak->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteDataBeritaFak()
    {
        $dataBeritaFak = $this->makeDataBeritaFak();
        $resp = $this->dataBeritaFakRepo->delete($dataBeritaFak->id);
        $this->assertTrue($resp);
        $this->assertNull(DataBeritaFak::find($dataBeritaFak->id), 'DataBeritaFak should not exist in DB');
    }
}
