<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PendaftaranApiTest extends TestCase
{
    use MakePendaftaranTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePendaftaran()
    {
        $pendaftaran = $this->fakePendaftaranData();
        $this->json('POST', '/api/v1/pendaftarans', $pendaftaran);

        $this->assertApiResponse($pendaftaran);
    }

    /**
     * @test
     */
    public function testReadPendaftaran()
    {
        $pendaftaran = $this->makePendaftaran();
        $this->json('GET', '/api/v1/pendaftarans/'.$pendaftaran->id);

        $this->assertApiResponse($pendaftaran->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePendaftaran()
    {
        $pendaftaran = $this->makePendaftaran();
        $editedPendaftaran = $this->fakePendaftaranData();

        $this->json('PUT', '/api/v1/pendaftarans/'.$pendaftaran->id, $editedPendaftaran);

        $this->assertApiResponse($editedPendaftaran);
    }

    /**
     * @test
     */
    public function testDeletePendaftaran()
    {
        $pendaftaran = $this->makePendaftaran();
        $this->json('DELETE', '/api/v1/pendaftarans/'.$pendaftaran->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/pendaftarans/'.$pendaftaran->id);

        $this->assertResponseStatus(404);
    }
}
