<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDataBeritaJurAPIRequest;
use App\Http\Requests\API\UpdateDataBeritaJurAPIRequest;
use App\Models\DataBeritaJur;
use App\Repositories\DataBeritaJurRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class DataBeritaJurController
 * @package App\Http\Controllers\API
 */

class DataBeritaJurAPIController extends AppBaseController
{
    /** @var  DataBeritaJurRepository */
    private $dataBeritaJurRepository;

    public function __construct(DataBeritaJurRepository $dataBeritaJurRepo)
    {
        $this->dataBeritaJurRepository = $dataBeritaJurRepo;
    }

    /**
     * Display a listing of the DataBeritaJur.
     * GET|HEAD /dataBeritaJurs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dataBeritaJurRepository->pushCriteria(new RequestCriteria($request));
        $this->dataBeritaJurRepository->pushCriteria(new LimitOffsetCriteria($request));
        $dataBeritaJurs = $this->dataBeritaJurRepository->all();

        return $this->sendResponse($dataBeritaJurs->toArray(), 'Data Berita Jurs retrieved successfully');
    }

    public function showByUniv(Request $request)
    {
    
        $dataBeritaJurs = DataBeritaJur::where('id_univ',$request->input('id_univ'))
                                        ->where('id_fak',$request->input('id_fak'))
                                        ->where('id_jur',$request->input('id_jur'))->get();
        return $this->sendResponse($dataBeritaJurs->toArray(), 'Data Berita Faks retrieved successfully');
    }

    /**
     * Store a newly created DataBeritaJur in storage.
     * POST /dataBeritaJurs
     *
     * @param CreateDataBeritaJurAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDataBeritaJurAPIRequest $request)
    {
        $input = $request->all();

        $dataBeritaJurs = $this->dataBeritaJurRepository->create($input);

        return $this->sendResponse($dataBeritaJurs->toArray(), 'Data Berita Jur saved successfully');
    }

    /**
     * Display the specified DataBeritaJur.
     * GET|HEAD /dataBeritaJurs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var DataBeritaJur $dataBeritaJur */
        $dataBeritaJur = $this->dataBeritaJurRepository->findWithoutFail($id);

        if (empty($dataBeritaJur)) {
            return $this->sendError('Data Berita Jur not found');
        }

        return $this->sendResponse($dataBeritaJur->toArray(), 'Data Berita Jur retrieved successfully');
    }

    /**
     * Update the specified DataBeritaJur in storage.
     * PUT/PATCH /dataBeritaJurs/{id}
     *
     * @param  int $id
     * @param UpdateDataBeritaJurAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataBeritaJurAPIRequest $request)
    {
        $input = $request->all();

        /** @var DataBeritaJur $dataBeritaJur */
        $dataBeritaJur = $this->dataBeritaJurRepository->findWithoutFail($id);

        if (empty($dataBeritaJur)) {
            return $this->sendError('Data Berita Jur not found');
        }

        $dataBeritaJur = $this->dataBeritaJurRepository->update($input, $id);

        return $this->sendResponse($dataBeritaJur->toArray(), 'DataBeritaJur updated successfully');
    }

    /**
     * Remove the specified DataBeritaJur from storage.
     * DELETE /dataBeritaJurs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var DataBeritaJur $dataBeritaJur */
        $dataBeritaJur = $this->dataBeritaJurRepository->findWithoutFail($id);

        if (empty($dataBeritaJur)) {
            return $this->sendError('Data Berita Jur not found');
        }

        $dataBeritaJur->delete();

        return $this->sendResponse($id, 'Data Berita Jur deleted successfully');
    }
}
