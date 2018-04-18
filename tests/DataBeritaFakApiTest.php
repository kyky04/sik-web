<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DataBeritaFakApiTest extends TestCase
{
    use MakeDataBeritaFakTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateDataBeritaFak()
    {
        $dataBeritaFak = $this->fakeDataBeritaFakData();
        $this->json('POST', '/api/v1/dataBeritaFaks', $dataBeritaFak);

        $this->assertApiResponse($dataBeritaFak);
    }

    /**
     * @test
     */
    public function testReadDataBeritaFak()
    {
        $dataBeritaFak = $this->makeDataBeritaFak();
        $this->json('GET', '/api/v1/dataBeritaFaks/'.$dataBeritaFak->id);

        $this->assertApiResponse($dataBeritaFak->toArray());
    }

    /**
     * @test
     */
    public function testUpdateDataBeritaFak()
    {
        $dataBeritaFak = $this->makeDataBeritaFak();
        $editedDataBeritaFak = $this->fakeDataBeritaFakData();

        $this->json('PUT', '/api/v1/dataBeritaFaks/'.$dataBeritaFak->id, $editedDataBeritaFak);

        $this->assertApiResponse($editedDataBeritaFak);
    }

    /**
     * @test
     */
    public function testDeleteDataBeritaFak()
    {
        $dataBeritaFak = $this->makeDataBeritaFak();
        $this->json('DELETE', '/api/v1/dataBeritaFaks/'.$dataBeritaFak->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/dataBeritaFaks/'.$dataBeritaFak->id);

        $this->assertResponseStatus(404);
    }
}
