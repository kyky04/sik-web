<?php

use App\Models\Program_Studi;
use App\Repositories\Program_StudiRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Program_StudiRepositoryTest extends TestCase
{
    use MakeProgram_StudiTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var Program_StudiRepository
     */
    protected $programStudiRepo;

    public function setUp()
    {
        parent::setUp();
        $this->programStudiRepo = App::make(Program_StudiRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateProgram_Studi()
    {
        $programStudi = $this->fakeProgram_StudiData();
        $createdProgram_Studi = $this->programStudiRepo->create($programStudi);
        $createdProgram_Studi = $createdProgram_Studi->toArray();
        $this->assertArrayHasKey('id', $createdProgram_Studi);
        $this->assertNotNull($createdProgram_Studi['id'], 'Created Program_Studi must have id specified');
        $this->assertNotNull(Program_Studi::find($createdProgram_Studi['id']), 'Program_Studi with given id must be in DB');
        $this->assertModelData($programStudi, $createdProgram_Studi);
    }

    /**
     * @test read
     */
    public function testReadProgram_Studi()
    {
        $programStudi = $this->makeProgram_Studi();
        $dbProgram_Studi = $this->programStudiRepo->find($programStudi->id);
        $dbProgram_Studi = $dbProgram_Studi->toArray();
        $this->assertModelData($programStudi->toArray(), $dbProgram_Studi);
    }

    /**
     * @test update
     */
    public function testUpdateProgram_Studi()
    {
        $programStudi = $this->makeProgram_Studi();
        $fakeProgram_Studi = $this->fakeProgram_StudiData();
        $updatedProgram_Studi = $this->programStudiRepo->update($fakeProgram_Studi, $programStudi->id);
        $this->assertModelData($fakeProgram_Studi, $updatedProgram_Studi->toArray());
        $dbProgram_Studi = $this->programStudiRepo->find($programStudi->id);
        $this->assertModelData($fakeProgram_Studi, $dbProgram_Studi->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteProgram_Studi()
    {
        $programStudi = $this->makeProgram_Studi();
        $resp = $this->programStudiRepo->delete($programStudi->id);
        $this->assertTrue($resp);
        $this->assertNull(Program_Studi::find($programStudi->id), 'Program_Studi should not exist in DB');
    }
}
