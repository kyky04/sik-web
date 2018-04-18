<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DataBeritaUnivApiTest extends TestCase
{
    use MakeDataBeritaUnivTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateDataBeritaUniv()
    {
        $dataBeritaUniv = $this->fakeDataBeritaUnivData();
        $this->json('POST', '/api/v1/dataBeritaUnivs', $dataBeritaUniv);

        $this->assertApiResponse($dataBeritaUniv);
    }

    /**
     * @test
     */
    public function testReadDataBeritaUniv()
    {
        $dataBeritaUniv = $this->makeDataBeritaUniv();
        $this->json('GET', '/api/v1/dataBeritaUnivs/'.$dataBeritaUniv->id);

        $this->assertApiResponse($dataBeritaUniv->toArray());
    }

    /**
     * @test
     */
    public function testUpdateDataBeritaUniv()
    {
        $dataBeritaUniv = $this->makeDataBeritaUniv();
        $editedDataBeritaUniv = $this->fakeDataBeritaUnivData();

        $this->json('PUT', '/api/v1/dataBeritaUnivs/'.$dataBeritaUniv->id, $editedDataBeritaUniv);

        $this->assertApiResponse($editedDataBeritaUniv);
    }

    /**
     * @test
     */
    public function testDeleteDataBeritaUniv()
    {
        $dataBeritaUniv = $this->makeDataBeritaUniv();
        $this->json('DELETE', '/api/v1/dataBeritaUnivs/'.$dataBeritaUniv->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/dataBeritaUnivs/'.$dataBeritaUniv->id);

        $this->assertResponseStatus(404);
    }
}
