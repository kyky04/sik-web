<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProdiAPIRequest;
use App\Http\Requests\API\UpdateProdiAPIRequest;
use App\Models\Prodi;
use App\Repositories\ProdiRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ProdiController
 * @package App\Http\Controllers\API
 */

class ProdiAPIController extends AppBaseController
{
    /** @var  ProdiRepository */
    private $prodiRepository;

    public function __construct(ProdiRepository $prodiRepo)
    {
        $this->prodiRepository = $prodiRepo;
    }

    /**
     * Display a listing of the Prodi.
     * GET|HEAD /prodis
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->prodiRepository->pushCriteria(new RequestCriteria($request));
        $this->prodiRepository->pushCriteria(new LimitOffsetCriteria($request));
        $prodis = $this->prodiRepository->all();

        return $this->sendResponse($prodis->toArray(), 'Prodis retrieved successfully');
    }

    /**
     * Store a newly created Prodi in storage.
     * POST /prodis
     *
     * @param CreateProdiAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProdiAPIRequest $request)
    {
        $input = $request->all();

        $prodis = $this->prodiRepository->create($input);

        return $this->sendResponse($prodis->toArray(), 'Prodi saved successfully');
    }

    /**
     * Display the specified Prodi.
     * GET|HEAD /prodis/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Prodi $prodi */
        $prodi = $this->prodiRepository->findWithoutFail($id);

        if (empty($prodi)) {
            return $this->sendError('Prodi not found');
        }

        return $this->sendResponse($prodi->toArray(), 'Prodi retrieved successfully');
    }

    /**
     * Update the specified Prodi in storage.
     * PUT/PATCH /prodis/{id}
     *
     * @param  int $id
     * @param UpdateProdiAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProdiAPIRequest $request)
    {
        $input = $request->all();

        /** @var Prodi $prodi */
        $prodi = $this->prodiRepository->findWithoutFail($id);

        if (empty($prodi)) {
            return $this->sendError('Prodi not found');
        }

        $prodi = $this->prodiRepository->update($input, $id);

        return $this->sendResponse($prodi->toArray(), 'Prodi updated successfully');
    }

    /**
     * Remove the specified Prodi from storage.
     * DELETE /prodis/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Prodi $prodi */
        $prodi = $this->prodiRepository->findWithoutFail($id);

        if (empty($prodi)) {
            return $this->sendError('Prodi not found');
        }

        $prodi->delete();

        return $this->sendResponse($id, 'Prodi deleted successfully');
    }
}
