<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProgram_StudiRequest;
use App\Http\Requests\UpdateProgram_StudiRequest;
use App\Repositories\Program_StudiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Program_StudiController extends AppBaseController
{
    /** @var  Program_StudiRepository */
    private $programStudiRepository;

    public function __construct(Program_StudiRepository $programStudiRepo)
    {
        $this->programStudiRepository = $programStudiRepo;
    }

    /**
     * Display a listing of the Program_Studi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->programStudiRepository->pushCriteria(new RequestCriteria($request));
        $programStudis = $this->programStudiRepository->all();

        return view('program__studis.index')
            ->with('programStudis', $programStudis);
    }

    /**
     * Show the form for creating a new Program_Studi.
     *
     * @return Response
     */
    public function create()
    {
        return view('program__studis.create');
    }

    /**
     * Store a newly created Program_Studi in storage.
     *
     * @param CreateProgram_StudiRequest $request
     *
     * @return Response
     */
    public function store(CreateProgram_StudiRequest $request)
    {
        $input = $request->all();

        $programStudi = $this->programStudiRepository->create($input);

        Flash::success('Program  Studi saved successfully.');

        return redirect(route('programStudis.index'));
    }

    /**
     * Display the specified Program_Studi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $programStudi = $this->programStudiRepository->findWithoutFail($id);

        if (empty($programStudi)) {
            Flash::error('Program  Studi not found');

            return redirect(route('programStudis.index'));
        }

        return view('program__studis.show')->with('programStudi', $programStudi);
    }

    /**
     * Show the form for editing the specified Program_Studi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $programStudi = $this->programStudiRepository->findWithoutFail($id);

        if (empty($programStudi)) {
            Flash::error('Program  Studi not found');

            return redirect(route('programStudis.index'));
        }

        return view('program__studis.edit')->with('programStudi', $programStudi);
    }

    /**
     * Update the specified Program_Studi in storage.
     *
     * @param  int              $id
     * @param UpdateProgram_StudiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProgram_StudiRequest $request)
    {
        $programStudi = $this->programStudiRepository->findWithoutFail($id);

        if (empty($programStudi)) {
            Flash::error('Program  Studi not found');

            return redirect(route('programStudis.index'));
        }

        $programStudi = $this->programStudiRepository->update($request->all(), $id);

        Flash::success('Program  Studi updated successfully.');

        return redirect(route('programStudis.index'));
    }

    /**
     * Remove the specified Program_Studi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $programStudi = $this->programStudiRepository->findWithoutFail($id);

        if (empty($programStudi)) {
            Flash::error('Program  Studi not found');

            return redirect(route('programStudis.index'));
        }

        $this->programStudiRepository->delete($id);

        Flash::success('Program  Studi deleted successfully.');

        return redirect(route('programStudis.index'));
    }
}
