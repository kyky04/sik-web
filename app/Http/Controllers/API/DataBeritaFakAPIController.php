<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDataBeritaFakAPIRequest;
use App\Http\Requests\API\UpdateDataBeritaFakAPIRequest;
use App\Models\DataBeritaFak;
use App\Repositories\DataBeritaFakRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class DataBeritaFakController
 * @package App\Http\Controllers\API
 */

class DataBeritaFakAPIController extends AppBaseController
{
    /** @var  DataBeritaFakRepository */
    private $dataBeritaFakRepository;

    public function __construct(DataBeritaFakRepository $dataBeritaFakRepo)
    {
        $this->dataBeritaFakRepository = $dataBeritaFakRepo;
    }

    /**
     * Display a listing of the DataBeritaFak.
     * GET|HEAD /dataBeritaFaks
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dataBeritaFakRepository->pushCriteria(new RequestCriteria($request));
        $this->dataBeritaFakRepository->pushCriteria(new LimitOffsetCriteria($request));
        $dataBeritaFaks = $this->dataBeritaFakRepository->all();

        return $this->sendResponse($dataBeritaFaks->toArray(), 'Data Berita Faks retrieved successfully');
    }

    public function showByUniv(Request $request)
    {
        
        $dataBeritaFaks = DataBeritaFak::where('id_univ',$request->input('id_univ'))
                                        ->where('id_fak',$request->input('id_fak'))->get();
        return $this->sendResponse($dataBeritaFaks->toArray(), 'Data Berita Faks retrieved successfully');
    }

    /**
     * Store a newly created DataBeritaFak in storage.
     * POST /dataBeritaFaks
     *
     * @param CreateDataBeritaFakAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDataBeritaFakAPIRequest $request)
    {
        $input = $request->all();

        $dataBeritaFaks = $this->dataBeritaFakRepository->create($input);

        return $this->sendResponse($dataBeritaFaks->toArray(), 'Data Berita Fak saved successfully');
    }

    /**
     * Display the specified DataBeritaFak.
     * GET|HEAD /dataBeritaFaks/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var DataBeritaFak $dataBeritaFak */
        $dataBeritaFak = $this->dataBeritaFakRepository->findWithoutFail($id);

        if (empty($dataBeritaFak)) {
            return $this->sendError('Data Berita Fak not found');
        }

        return $this->sendResponse($dataBeritaFak->toArray(), 'Data Berita Fak retrieved successfully');
    }

    /**
     * Update the specified DataBeritaFak in storage.
     * PUT/PATCH /dataBeritaFaks/{id}
     *
     * @param  int $id
     * @param UpdateDataBeritaFakAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataBeritaFakAPIRequest $request)
    {
        $input = $request->all();

        /** @var DataBeritaFak $dataBeritaFak */
        $dataBeritaFak = $this->dataBeritaFakRepository->findWithoutFail($id);

        if (empty($dataBeritaFak)) {
            return $this->sendError('Data Berita Fak not found');
        }

        $dataBeritaFak = $this->dataBeritaFakRepository->update($input, $id);

        return $this->sendResponse($dataBeritaFak->toArray(), 'DataBeritaFak updated successfully');
    }

    /**
     * Remove the specified DataBeritaFak from storage.
     * DELETE /dataBeritaFaks/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var DataBeritaFak $dataBeritaFak */
        $dataBeritaFak = $this->dataBeritaFakRepository->findWithoutFail($id);

        if (empty($dataBeritaFak)) {
            return $this->sendError('Data Berita Fak not found');
        }

        $dataBeritaFak->delete();

        return $this->sendResponse($id, 'Data Berita Fak deleted successfully');
    }
}
