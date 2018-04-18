<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BeasiswaApiTest extends TestCase
{
    use MakeBeasiswaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateBeasiswa()
    {
        $beasiswa = $this->fakeBeasiswaData();
        $this->json('POST', '/api/v1/beasiswas', $beasiswa);

        $this->assertApiResponse($beasiswa);
    }

    /**
     * @test
     */
    public function testReadBeasiswa()
    {
        $beasiswa = $this->makeBeasiswa();
        $this->json('GET', '/api/v1/beasiswas/'.$beasiswa->id);

        $this->assertApiResponse($beasiswa->toArray());
    }

    /**
     * @test
     */
    public function testUpdateBeasiswa()
    {
        $beasiswa = $this->makeBeasiswa();
        $editedBeasiswa = $this->fakeBeasiswaData();

        $this->json('PUT', '/api/v1/beasiswas/'.$beasiswa->id, $editedBeasiswa);

        $this->assertApiResponse($editedBeasiswa);
    }

    /**
     * @test
     */
    public function testDeleteBeasiswa()
    {
        $beasiswa = $this->makeBeasiswa();
        $this->json('DELETE', '/api/v1/beasiswas/'.$beasiswa->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/beasiswas/'.$beasiswa->id);

        $this->assertResponseStatus(404);
    }
}
