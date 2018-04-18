<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePendaftarRequest;
use App\Http\Requests\UpdatePendaftarRequest;
use App\Repositories\PendaftarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PendaftarController extends AppBaseController
{
    /** @var  PendaftarRepository */
    private $pendaftarRepository;

    public function __construct(PendaftarRepository $pendaftarRepo)
    {
        $this->pendaftarRepository = $pendaftarRepo;
    }

    /**
     * Display a listing of the Pendaftar.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pendaftarRepository->pushCriteria(new RequestCriteria($request));
        $pendaftars = $this->pendaftarRepository->all();

        return view('pendaftars.index')
            ->with('pendaftars', $pendaftars);
    }

    /**
     * Show the form for creating a new Pendaftar.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendaftars.create');
    }

    /**
     * Store a newly created Pendaftar in storage.
     *
     * @param CreatePendaftarRequest $request
     *
     * @return Response
     */
    public function store(CreatePendaftarRequest $request)
    {
        $input = $request->all();

        $pendaftar = $this->pendaftarRepository->create($input);

        Flash::success('Pendaftar saved successfully.');

        return redirect(route('pendaftars.index'));
    }

    /**
     * Display the specified Pendaftar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pendaftar = $this->pendaftarRepository->findWithoutFail($id);

        if (empty($pendaftar)) {
            Flash::error('Pendaftar not found');

            return redirect(route('pendaftars.index'));
        }

        return view('pendaftars.show')->with('pendaftar', $pendaftar);
    }

    /**
     * Show the form for editing the specified Pendaftar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pendaftar = $this->pendaftarRepository->findWithoutFail($id);

        if (empty($pendaftar)) {
            Flash::error('Pendaftar not found');

            return redirect(route('pendaftars.index'));
        }

        return view('pendaftars.edit')->with('pendaftar', $pendaftar);
    }

    /**
     * Update the specified Pendaftar in storage.
     *
     * @param  int              $id
     * @param UpdatePendaftarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePendaftarRequest $request)
    {
        $pendaftar = $this->pendaftarRepository->findWithoutFail($id);

        if (empty($pendaftar)) {
            Flash::error('Pendaftar not found');

            return redirect(route('pendaftars.index'));
        }

        $pendaftar = $this->pendaftarRepository->update($request->all(), $id);

        Flash::success('Pendaftar updated successfully.');

        return redirect(route('pendaftars.index'));
    }

    /**
     * Remove the specified Pendaftar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pendaftar = $this->pendaftarRepository->findWithoutFail($id);

        if (empty($pendaftar)) {
            Flash::error('Pendaftar not found');

            return redirect(route('pendaftars.index'));
        }

        $this->pendaftarRepository->delete($id);

        Flash::success('Pendaftar deleted successfully.');

        return redirect(route('pendaftars.index'));
    }
}
