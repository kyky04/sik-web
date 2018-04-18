<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDataBeritaUnivAPIRequest;
use App\Http\Requests\API\UpdateDataBeritaUnivAPIRequest;
use App\Models\DataBeritaUniv;
use App\Repositories\DataBeritaUnivRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class DataBeritaUnivController
 * @package App\Http\Controllers\API
 */

class DataBeritaUnivAPIController extends AppBaseController
{
    /** @var  DataBeritaUnivRepository */
    private $dataBeritaUnivRepository;

    public function __construct(DataBeritaUnivRepository $dataBeritaUnivRepo)
    {
        $this->dataBeritaUnivRepository = $dataBeritaUnivRepo;
    }

    /**
     * Display a listing of the DataBeritaUniv.
     * GET|HEAD /dataBeritaUnivs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dataBeritaUnivRepository->pushCriteria(new RequestCriteria($request));
        $this->dataBeritaUnivRepository->pushCriteria(new LimitOffsetCriteria($request));
        $dataBeritaUnivs = $this->dataBeritaUnivRepository->all();

        return $this->sendResponse($dataBeritaUnivs->toArray(), 'Data Berita Univs retrieved successfully');
    }

    /**
     * Store a newly created DataBeritaUniv in storage.
     * POST /dataBeritaUnivs
     *
     * @param CreateDataBeritaUnivAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDataBeritaUnivAPIRequest $request)
    {
        $input = $request->all();

        $dataBeritaUnivs = $this->dataBeritaUnivRepository->create($input);

        return $this->sendResponse($dataBeritaUnivs->toArray(), 'Data Berita Univ saved successfully');
    }

    /**
     * Display the specified DataBeritaUniv.
     * GET|HEAD /dataBeritaUnivs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var DataBeritaUniv $dataBeritaUniv */
        $dataBeritaUniv = $this->dataBeritaUnivRepository->findWithoutFail($id);

        if (empty($dataBeritaUniv)) {
            return $this->sendError('Data Berita Univ not found');
        }

        return $this->sendResponse($dataBeritaUniv->toArray(), 'Data Berita Univ retrieved successfully');
    }
public function showByUniv($id_univ)
    {
        /** @var DataBeritaUniv $dataBeritaUniv */
        $universitas = DataBeritaUniv::where('id_univ',$id_univ)->get();

        if (empty($universitas)) {
            return $this->sendError('Data Berita Univ not found');
        }

        return $this->sendResponse($universitas->toArray(), 'Data Berita Univ retrieved successfully');
    }



    /**
     * Update the specified DataBeritaUniv in storage.
     * PUT/PATCH /dataBeritaUnivs/{id}
     *
     * @param  int $id
     * @param UpdateDataBeritaUnivAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataBeritaUnivAPIRequest $request)
    {
        $input = $request->all();

        /** @var DataBeritaUniv $dataBeritaUniv */
        $dataBeritaUniv = $this->dataBeritaUnivRepository->findWithoutFail($id);

        if (empty($dataBeritaUniv)) {
            return $this->sendError('Data Berita Univ not found');
        }

        $dataBeritaUniv = $this->dataBeritaUnivRepository->update($input, $id);

        return $this->sendResponse($dataBeritaUniv->toArray(), 'DataBeritaUniv updated successfully');
    }

    /**
     * Remove the specified DataBeritaUniv from storage.
     * DELETE /dataBeritaUnivs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var DataBeritaUniv $dataBeritaUniv */
        $dataBeritaUniv = $this->dataBeritaUnivRepository->findWithoutFail($id);

        if (empty($dataBeritaUniv)) {
            return $this->sendError('Data Berita Univ not found');
        }

        $dataBeritaUniv->delete();

        return $this->sendResponse($id, 'Data Berita Univ deleted successfully');
    }
}
