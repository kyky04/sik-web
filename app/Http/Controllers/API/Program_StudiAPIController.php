<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProgram_StudiAPIRequest;
use App\Http\Requests\API\UpdateProgram_StudiAPIRequest;
use App\Models\Program_Studi;
use App\Repositories\Program_StudiRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class Program_StudiController
 * @package App\Http\Controllers\API
 */

class Program_StudiAPIController extends AppBaseController
{
    /** @var  Program_StudiRepository */
    private $programStudiRepository;

    public function __construct(Program_StudiRepository $programStudiRepo)
    {
        $this->programStudiRepository = $programStudiRepo;
    }

    /**
     * Display a listing of the Program_Studi.
     * GET|HEAD /programStudis
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->programStudiRepository->pushCriteria(new RequestCriteria($request));
        $this->programStudiRepository->pushCriteria(new LimitOffsetCriteria($request));
        $programStudis = $this->programStudiRepository->all();

        return $this->sendResponse($programStudis->toArray(), 'Program  Studis retrieved successfully');
    }

    /**
     * Store a newly created Program_Studi in storage.
     * POST /programStudis
     *
     * @param CreateProgram_StudiAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProgram_StudiAPIRequest $request)
    {
        $input = $request->all();

        $programStudis = $this->programStudiRepository->create($input);

        return $this->sendResponse($programStudis->toArray(), 'Program  Studi saved successfully');
    }

    /**
     * Display the specified Program_Studi.
     * GET|HEAD /programStudis/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Program_Studi $programStudi */
        $programStudi = $this->programStudiRepository->findWithoutFail($id);

        if (empty($programStudi)) {
            return $this->sendError('Program  Studi not found');
        }

        return $this->sendResponse($programStudi->toArray(), 'Program  Studi retrieved successfully');
    }

    /**
     * Update the specified Program_Studi in storage.
     * PUT/PATCH /programStudis/{id}
     *
     * @param  int $id
     * @param UpdateProgram_StudiAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProgram_StudiAPIRequest $request)
    {
        $input = $request->all();

        /** @var Program_Studi $programStudi */
        $programStudi = $this->programStudiRepository->findWithoutFail($id);

        if (empty($programStudi)) {
            return $this->sendError('Program  Studi not found');
        }

        $programStudi = $this->programStudiRepository->update($input, $id);

        return $this->sendResponse($programStudi->toArray(), 'Program_Studi updated successfully');
    }

    /**
     * Remove the specified Program_Studi from storage.
     * DELETE /programStudis/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Program_Studi $programStudi */
        $programStudi = $this->programStudiRepository->findWithoutFail($id);

        if (empty($programStudi)) {
            return $this->sendError('Program  Studi not found');
        }

        $programStudi->delete();

        return $this->sendResponse($id, 'Program  Studi deleted successfully');
    }
}
