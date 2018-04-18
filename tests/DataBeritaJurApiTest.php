<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DataBeritaJurApiTest extends TestCase
{
    use MakeDataBeritaJurTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateDataBeritaJur()
    {
        $dataBeritaJur = $this->fakeDataBeritaJurData();
        $this->json('POST', '/api/v1/dataBeritaJurs', $dataBeritaJur);

        $this->assertApiResponse($dataBeritaJur);
    }

    /**
     * @test
     */
    public function testReadDataBeritaJur()
    {
        $dataBeritaJur = $this->makeDataBeritaJur();
        $this->json('GET', '/api/v1/dataBeritaJurs/'.$dataBeritaJur->id);

        $this->assertApiResponse($dataBeritaJur->toArray());
    }

    /**
     * @test
     */
    public function testUpdateDataBeritaJur()
    {
        $dataBeritaJur = $this->makeDataBeritaJur();
        $editedDataBeritaJur = $this->fakeDataBeritaJurData();

        $this->json('PUT', '/api/v1/dataBeritaJurs/'.$dataBeritaJur->id, $editedDataBeritaJur);

        $this->assertApiResponse($editedDataBeritaJur);
    }

    /**
     * @test
     */
    public function testDeleteDataBeritaJur()
    {
        $dataBeritaJur = $this->makeDataBeritaJur();
        $this->json('DELETE', '/api/v1/dataBeritaJurs/'.$dataBeritaJur->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/dataBeritaJurs/'.$dataBeritaJur->id);

        $this->assertResponseStatus(404);
    }
}
