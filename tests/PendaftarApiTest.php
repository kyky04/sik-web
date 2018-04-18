<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PendaftarApiTest extends TestCase
{
    use MakePendaftarTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePendaftar()
    {
        $pendaftar = $this->fakePendaftarData();
        $this->json('POST', '/api/v1/pendaftars', $pendaftar);

        $this->assertApiResponse($pendaftar);
    }

    /**
     * @test
     */
    public function testReadPendaftar()
    {
        $pendaftar = $this->makePendaftar();
        $this->json('GET', '/api/v1/pendaftars/'.$pendaftar->id);

        $this->assertApiResponse($pendaftar->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePendaftar()
    {
        $pendaftar = $this->makePendaftar();
        $editedPendaftar = $this->fakePendaftarData();

        $this->json('PUT', '/api/v1/pendaftars/'.$pendaftar->id, $editedPendaftar);

        $this->assertApiResponse($editedPendaftar);
    }

    /**
     * @test
     */
    public function testDeletePendaftar()
    {
        $pendaftar = $this->makePendaftar();
        $this->json('DELETE', '/api/v1/pendaftars/'.$pendaftar->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/pendaftars/'.$pendaftar->id);

        $this->assertResponseStatus(404);
    }
}
