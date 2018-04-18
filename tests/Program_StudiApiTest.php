<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Program_StudiApiTest extends TestCase
{
    use MakeProgram_StudiTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateProgram_Studi()
    {
        $programStudi = $this->fakeProgram_StudiData();
        $this->json('POST', '/api/v1/programStudis', $programStudi);

        $this->assertApiResponse($programStudi);
    }

    /**
     * @test
     */
    public function testReadProgram_Studi()
    {
        $programStudi = $this->makeProgram_Studi();
        $this->json('GET', '/api/v1/programStudis/'.$programStudi->id);

        $this->assertApiResponse($programStudi->toArray());
    }

    /**
     * @test
     */
    public function testUpdateProgram_Studi()
    {
        $programStudi = $this->makeProgram_Studi();
        $editedProgram_Studi = $this->fakeProgram_StudiData();

        $this->json('PUT', '/api/v1/programStudis/'.$programStudi->id, $editedProgram_Studi);

        $this->assertApiResponse($editedProgram_Studi);
    }

    /**
     * @test
     */
    public function testDeleteProgram_Studi()
    {
        $programStudi = $this->makeProgram_Studi();
        $this->json('DELETE', '/api/v1/programStudis/'.$programStudi->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/programStudis/'.$programStudi->id);

        $this->assertResponseStatus(404);
    }
}
