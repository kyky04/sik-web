<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProdiApiTest extends TestCase
{
    use MakeProdiTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateProdi()
    {
        $prodi = $this->fakeProdiData();
        $this->json('POST', '/api/v1/prodis', $prodi);

        $this->assertApiResponse($prodi);
    }

    /**
     * @test
     */
    public function testReadProdi()
    {
        $prodi = $this->makeProdi();
        $this->json('GET', '/api/v1/prodis/'.$prodi->id);

        $this->assertApiResponse($prodi->toArray());
    }

    /**
     * @test
     */
    public function testUpdateProdi()
    {
        $prodi = $this->makeProdi();
        $editedProdi = $this->fakeProdiData();

        $this->json('PUT', '/api/v1/prodis/'.$prodi->id, $editedProdi);

        $this->assertApiResponse($editedProdi);
    }

    /**
     * @test
     */
    public function testDeleteProdi()
    {
        $prodi = $this->makeProdi();
        $this->json('DELETE', '/api/v1/prodis/'.$prodi->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/prodis/'.$prodi->id);

        $this->assertResponseStatus(404);
    }
}
