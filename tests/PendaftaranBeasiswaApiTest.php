<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PendaftaranBeasiswaApiTest extends TestCase
{
    use MakePendaftaranBeasiswaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePendaftaranBeasiswa()
    {
        $pendaftaranBeasiswa = $this->fakePendaftaranBeasiswaData();
        $this->json('POST', '/api/v1/pendaftaranBeasiswas', $pendaftaranBeasiswa);

        $this->assertApiResponse($pendaftaranBeasiswa);
    }

    /**
     * @test
     */
    public function testReadPendaftaranBeasiswa()
    {
        $pendaftaranBeasiswa = $this->makePendaftaranBeasiswa();
        $this->json('GET', '/api/v1/pendaftaranBeasiswas/'.$pendaftaranBeasiswa->id);

        $this->assertApiResponse($pendaftaranBeasiswa->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePendaftaranBeasiswa()
    {
        $pendaftaranBeasiswa = $this->makePendaftaranBeasiswa();
        $editedPendaftaranBeasiswa = $this->fakePendaftaranBeasiswaData();

        $this->json('PUT', '/api/v1/pendaftaranBeasiswas/'.$pendaftaranBeasiswa->id, $editedPendaftaranBeasiswa);

        $this->assertApiResponse($editedPendaftaranBeasiswa);
    }

    /**
     * @test
     */
    public function testDeletePendaftaranBeasiswa()
    {
        $pendaftaranBeasiswa = $this->makePendaftaranBeasiswa();
        $this->json('DELETE', '/api/v1/pendaftaranBeasiswas/'.$pendaftaranBeasiswa->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/pendaftaranBeasiswas/'.$pendaftaranBeasiswa->id);

        $this->assertResponseStatus(404);
    }
}
