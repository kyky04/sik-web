<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePendaftarAPIRequest;
use App\Http\Requests\API\UpdatePendaftarAPIRequest;
use App\Models\Pendaftar;
use App\Repositories\PendaftarRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PendaftarController
 * @package App\Http\Controllers\API
 */

class PendaftarAPIController extends AppBaseController
{
    /** @var  PendaftarRepository */
    private $pendaftarRepository;

    public function __construct(PendaftarRepository $pendaftarRepo)
    {
        $this->pendaftarRepository = $pendaftarRepo;
    }

    /**
     * Display a listing of the Pendaftar.
     * GET|HEAD /pendaftars
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pendaftarRepository->pushCriteria(new RequestCriteria($request));
        $this->pendaftarRepository->pushCriteria(new LimitOffsetCriteria($request));
        $pendaftars = $this->pendaftarRepository->all();

        return $this->sendResponse($pendaftars->toArray(), 'Pendaftars retrieved successfully');
    }

    /**
     * Store a newly created Pendaftar in storage.
     * POST /pendaftars
     *
     * @param CreatePendaftarAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePendaftarAPIRequest $request)
    {
        $input = $request->all();

        $pendaftars = $this->pendaftarRepository->create($input);

        return $this->sendResponse($pendaftars->toArray(), 'Pendaftar saved successfully');
    }

    /**
     * Display the specified Pendaftar.
     * GET|HEAD /pendaftars/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Pendaftar $pendaftar */
        $pendaftar = $this->pendaftarRepository->findWithoutFail($id);

        if (empty($pendaftar)) {
            return $this->sendError('Pendaftar not found');
        }

        return $this->sendResponse($pendaftar->toArray(), 'Pendaftar retrieved successfully');
    }

    /**
     * Update the specified Pendaftar in storage.
     * PUT/PATCH /pendaftars/{id}
     *
     * @param  int $id
     * @param UpdatePendaftarAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePendaftarAPIRequest $request)
    {
        $input = $request->all();

        /** @var Pendaftar $pendaftar */
        $pendaftar = $this->pendaftarRepository->findWithoutFail($id);

        if (empty($pendaftar)) {
            return $this->sendError('Pendaftar not found');
        }

        $pendaftar = $this->pendaftarRepository->update($input, $id);

        return $this->sendResponse($pendaftar->toArray(), 'Pendaftar updated successfully');
    }

    /**
     * Remove the specified Pendaftar from storage.
     * DELETE /pendaftars/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Pendaftar $pendaftar */
        $pendaftar = $this->pendaftarRepository->findWithoutFail($id);

        if (empty($pendaftar)) {
            return $this->sendError('Pendaftar not found');
        }

        $pendaftar->delete();

        return $this->sendResponse($id, 'Pendaftar deleted successfully');
    }
}
