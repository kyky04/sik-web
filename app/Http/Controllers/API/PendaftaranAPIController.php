<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePendaftaranAPIRequest;
use App\Http\Requests\API\UpdatePendaftaranAPIRequest;
use App\Models\Pendaftaran;
use App\Repositories\PendaftaranRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PendaftaranController
 * @package App\Http\Controllers\API
 */

class PendaftaranAPIController extends AppBaseController
{
    /** @var  PendaftaranRepository */
    private $pendaftaranRepository;

    public function __construct(PendaftaranRepository $pendaftaranRepo)
    {
        $this->pendaftaranRepository = $pendaftaranRepo;
    }

    /**
     * Display a listing of the Pendaftaran.
     * GET|HEAD /pendaftarans
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pendaftaranRepository->pushCriteria(new RequestCriteria($request));
        $this->pendaftaranRepository->pushCriteria(new LimitOffsetCriteria($request));
        $pendaftarans = $this->pendaftaranRepository->all();

        return $this->sendResponse($pendaftarans->toArray(), 'Pendaftarans retrieved successfully');
    }

    /**
     * Store a newly created Pendaftaran in storage.
     * POST /pendaftarans
     *
     * @param CreatePendaftaranAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePendaftaranAPIRequest $request)
    {
        $input = $request->all();

        $pendaftarans = $this->pendaftaranRepository->create($input);

        return $this->sendResponse($pendaftarans->toArray(), 'Pendaftaran saved successfully');
    }

    /**
     * Display the specified Pendaftaran.
     * GET|HEAD /pendaftarans/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Pendaftaran $pendaftaran */
        $pendaftaran = $this->pendaftaranRepository->findWithoutFail($id);

        if (empty($pendaftaran)) {
            return $this->sendError('Pendaftaran not found');
        }

        return $this->sendResponse($pendaftaran->toArray(), 'Pendaftaran retrieved successfully');
    }

    /**
     * Update the specified Pendaftaran in storage.
     * PUT/PATCH /pendaftarans/{id}
     *
     * @param  int $id
     * @param UpdatePendaftaranAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePendaftaranAPIRequest $request)
    {
        $input = $request->all();

        /** @var Pendaftaran $pendaftaran */
        $pendaftaran = $this->pendaftaranRepository->findWithoutFail($id);

        if (empty($pendaftaran)) {
            return $this->sendError('Pendaftaran not found');
        }

        $pendaftaran = $this->pendaftaranRepository->update($input, $id);

        return $this->sendResponse($pendaftaran->toArray(), 'Pendaftaran updated successfully');
    }

    /**
     * Remove the specified Pendaftaran from storage.
     * DELETE /pendaftarans/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Pendaftaran $pendaftaran */
        $pendaftaran = $this->pendaftaranRepository->findWithoutFail($id);

        if (empty($pendaftaran)) {
            return $this->sendError('Pendaftaran not found');
        }

        $pendaftaran->delete();

        return $this->sendResponse($id, 'Pendaftaran deleted successfully');
    }
}
