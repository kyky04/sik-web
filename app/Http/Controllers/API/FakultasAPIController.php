<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFakultasAPIRequest;
use App\Http\Requests\API\UpdateFakultasAPIRequest;
use App\Models\Fakultas;
use App\Repositories\FakultasRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class FakultasController
 * @package App\Http\Controllers\API
 */

class FakultasAPIController extends AppBaseController
{
    /** @var  FakultasRepository */
    private $fakultasRepository;

    public function __construct(FakultasRepository $fakultasRepo)
    {
        $this->fakultasRepository = $fakultasRepo;
    }

    /**
     * Display a listing of the Fakultas.
     * GET|HEAD /fakultas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->fakultasRepository->pushCriteria(new RequestCriteria($request));
        $this->fakultasRepository->pushCriteria(new LimitOffsetCriteria($request));
        $fakultas = $this->fakultasRepository->all();

        return $this->sendResponse($fakultas->toArray(), 'Fakultas retrieved successfully');
    }

    public function showByUniv(Request $request)
    {
        
        $fakultas = Fakultas::where('id_univ',$request->input('id_univ'))
                                       ->get();
        return $this->sendResponse($fakultas->toArray(), 'Data Berita Faks retrieved successfully');
    }

    /**
     * Store a newly created Fakultas in storage.
     * POST /fakultas
     *
     * @param CreateFakultasAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFakultasAPIRequest $request)
    {
        $input = $request->all();

        $fakultas = $this->fakultasRepository->create($input);

        return $this->sendResponse($fakultas->toArray(), 'Fakultas saved successfully');
    }

    /**
     * Display the specified Fakultas.
     * GET|HEAD /fakultas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Fakultas $fakultas */
        $fakultas = $this->fakultasRepository->findWithoutFail($id);

        if (empty($fakultas)) {
            return $this->sendError('Fakultas not found');
        }

        return $this->sendResponse($fakultas->toArray(), 'Fakultas retrieved successfully');
    }

    /**
     * Update the specified Fakultas in storage.
     * PUT/PATCH /fakultas/{id}
     *
     * @param  int $id
     * @param UpdateFakultasAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFakultasAPIRequest $request)
    {
        $input = $request->all();

        /** @var Fakultas $fakultas */
        $fakultas = $this->fakultasRepository->findWithoutFail($id);

        if (empty($fakultas)) {
            return $this->sendError('Fakultas not found');
        }

        $fakultas = $this->fakultasRepository->update($input, $id);

        return $this->sendResponse($fakultas->toArray(), 'Fakultas updated successfully');
    }

    /**
     * Remove the specified Fakultas from storage.
     * DELETE /fakultas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Fakultas $fakultas */
        $fakultas = $this->fakultasRepository->findWithoutFail($id);

        if (empty($fakultas)) {
            return $this->sendError('Fakultas not found');
        }

        $fakultas->delete();

        return $this->sendResponse($id, 'Fakultas deleted successfully');
    }
}
