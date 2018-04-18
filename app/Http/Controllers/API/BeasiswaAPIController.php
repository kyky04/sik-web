<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBeasiswaAPIRequest;
use App\Http\Requests\API\UpdateBeasiswaAPIRequest;
use App\Models\Beasiswa;
use App\Repositories\BeasiswaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class BeasiswaController
 * @package App\Http\Controllers\API
 */

class BeasiswaAPIController extends AppBaseController
{
    /** @var  BeasiswaRepository */
    private $beasiswaRepository;

    public function __construct(BeasiswaRepository $beasiswaRepo)
    {
        $this->beasiswaRepository = $beasiswaRepo;
    }

    /**
     * Display a listing of the Beasiswa.
     * GET|HEAD /beasiswas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->beasiswaRepository->pushCriteria(new RequestCriteria($request));
        $this->beasiswaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $beasiswas = $this->beasiswaRepository->with('mahasiswa')->all();

        return $this->sendResponse($beasiswas->toArray(), 'Beasiswas retrieved successfully');
    }

    /**
     * Store a newly created Beasiswa in storage.
     * POST /beasiswas
     *
     * @param CreateBeasiswaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateBeasiswaAPIRequest $request)
    {
        $input = $request->all();

        $beasiswas = $this->beasiswaRepository->create($input);

        return $this->sendResponse($beasiswas->toArray(), 'Beasiswa saved successfully');
    }

    /**
     * Display the specified Beasiswa.
     * GET|HEAD /beasiswas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Beasiswa $beasiswa */
        $beasiswa = $this->beasiswaRepository->findWithoutFail($id);

        if (empty($beasiswa)) {
            return $this->sendError('Beasiswa not found');
        }

        return $this->sendResponse($beasiswa->toArray(), 'Beasiswa retrieved successfully');
    }

    /**
     * Update the specified Beasiswa in storage.
     * PUT/PATCH /beasiswas/{id}
     *
     * @param  int $id
     * @param UpdateBeasiswaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeasiswaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Beasiswa $beasiswa */
        $beasiswa = $this->beasiswaRepository->findWithoutFail($id);

        if (empty($beasiswa)) {
            return $this->sendError('Beasiswa not found');
        }

        $beasiswa = $this->beasiswaRepository->update($input, $id);

        return $this->sendResponse($beasiswa->toArray(), 'Beasiswa updated successfully');
    }

    /**
     * Remove the specified Beasiswa from storage.
     * DELETE /beasiswas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Beasiswa $beasiswa */
        $beasiswa = $this->beasiswaRepository->findWithoutFail($id);

        if (empty($beasiswa)) {
            return $this->sendError('Beasiswa not found');
        }

        $beasiswa->delete();

        return $this->sendResponse($id, 'Beasiswa deleted successfully');
    }
}
