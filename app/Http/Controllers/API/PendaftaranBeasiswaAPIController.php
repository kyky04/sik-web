<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePendaftaranBeasiswaAPIRequest;
use App\Http\Requests\API\UpdatePendaftaranBeasiswaAPIRequest;
use App\Models\PendaftaranBeasiswa;
use App\Repositories\PendaftaranBeasiswaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PendaftaranBeasiswaController
 * @package App\Http\Controllers\API
 */

class PendaftaranBeasiswaAPIController extends AppBaseController
{
    /** @var  PendaftaranBeasiswaRepository */
    private $pendaftaranBeasiswaRepository;

    public function __construct(PendaftaranBeasiswaRepository $pendaftaranBeasiswaRepo)
    {
        $this->pendaftaranBeasiswaRepository = $pendaftaranBeasiswaRepo;
    }

    /**
     * Display a listing of the PendaftaranBeasiswa.
     * GET|HEAD /pendaftaranBeasiswas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pendaftaranBeasiswaRepository->pushCriteria(new RequestCriteria($request));
        $this->pendaftaranBeasiswaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $pendaftaranBeasiswas = $this->pendaftaranBeasiswaRepository->all();

        return $this->sendResponse($pendaftaranBeasiswas->toArray(), 'Pendaftaran Beasiswas retrieved successfully');
    }

    /**
     * Store a newly created PendaftaranBeasiswa in storage.
     * POST /pendaftaranBeasiswas
     *
     * @param CreatePendaftaranBeasiswaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePendaftaranBeasiswaAPIRequest $request)
    {
        $input = $request->all();

        $pendaftaranBeasiswas = $this->pendaftaranBeasiswaRepository->create($input);

        return $this->sendResponse($pendaftaranBeasiswas->toArray(), 'Pendaftaran Beasiswa saved successfully');
    }

    /**
     * Display the specified PendaftaranBeasiswa.
     * GET|HEAD /pendaftaranBeasiswas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PendaftaranBeasiswa $pendaftaranBeasiswa */
        $pendaftaranBeasiswa = $this->pendaftaranBeasiswaRepository->findWithoutFail($id);

        if (empty($pendaftaranBeasiswa)) {
            return $this->sendError('Pendaftaran Beasiswa not found');
        }

        return $this->sendResponse($pendaftaranBeasiswa->toArray(), 'Pendaftaran Beasiswa retrieved successfully');
    }

    /**
     * Update the specified PendaftaranBeasiswa in storage.
     * PUT/PATCH /pendaftaranBeasiswas/{id}
     *
     * @param  int $id
     * @param UpdatePendaftaranBeasiswaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePendaftaranBeasiswaAPIRequest $request)
    {
        $input = $request->all();

        /** @var PendaftaranBeasiswa $pendaftaranBeasiswa */
        $pendaftaranBeasiswa = $this->pendaftaranBeasiswaRepository->findWithoutFail($id);

        if (empty($pendaftaranBeasiswa)) {
            return $this->sendError('Pendaftaran Beasiswa not found');
        }

        $pendaftaranBeasiswa = $this->pendaftaranBeasiswaRepository->update($input, $id);

        return $this->sendResponse($pendaftaranBeasiswa->toArray(), 'PendaftaranBeasiswa updated successfully');
    }

    /**
     * Remove the specified PendaftaranBeasiswa from storage.
     * DELETE /pendaftaranBeasiswas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PendaftaranBeasiswa $pendaftaranBeasiswa */
        $pendaftaranBeasiswa = $this->pendaftaranBeasiswaRepository->findWithoutFail($id);

        if (empty($pendaftaranBeasiswa)) {
            return $this->sendError('Pendaftaran Beasiswa not found');
        }

        $pendaftaranBeasiswa->delete();

        return $this->sendResponse($id, 'Pendaftaran Beasiswa deleted successfully');
    }
}
