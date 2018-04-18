<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePendaftaranBeasiswaRequest;
use App\Http\Requests\UpdatePendaftaranBeasiswaRequest;
use App\Repositories\PendaftaranBeasiswaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PendaftaranBeasiswaController extends AppBaseController
{
    /** @var  PendaftaranBeasiswaRepository */
    private $pendaftaranBeasiswaRepository;

    public function __construct(PendaftaranBeasiswaRepository $pendaftaranBeasiswaRepo)
    {
        $this->pendaftaranBeasiswaRepository = $pendaftaranBeasiswaRepo;
    }

    /**
     * Display a listing of the PendaftaranBeasiswa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pendaftaranBeasiswaRepository->pushCriteria(new RequestCriteria($request));
        $pendaftaranBeasiswas = $this->pendaftaranBeasiswaRepository->all();

        return view('pendaftaran_beasiswas.index')
            ->with('pendaftaranBeasiswas', $pendaftaranBeasiswas);
    }

    /**
     * Show the form for creating a new PendaftaranBeasiswa.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendaftaran_beasiswas.create');
    }

    /**
     * Store a newly created PendaftaranBeasiswa in storage.
     *
     * @param CreatePendaftaranBeasiswaRequest $request
     *
     * @return Response
     */
    public function store(CreatePendaftaranBeasiswaRequest $request)
    {
        $input = $request->all();

        $pendaftaranBeasiswa = $this->pendaftaranBeasiswaRepository->create($input);

        Flash::success('Pendaftaran Beasiswa saved successfully.');

        return redirect(route('pendaftaranBeasiswas.index'));
    }

    /**
     * Display the specified PendaftaranBeasiswa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pendaftaranBeasiswa = $this->pendaftaranBeasiswaRepository->findWithoutFail($id);

        if (empty($pendaftaranBeasiswa)) {
            Flash::error('Pendaftaran Beasiswa not found');

            return redirect(route('pendaftaranBeasiswas.index'));
        }

        return view('pendaftaran_beasiswas.show')->with('pendaftaranBeasiswa', $pendaftaranBeasiswa);
    }

    /**
     * Show the form for editing the specified PendaftaranBeasiswa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pendaftaranBeasiswa = $this->pendaftaranBeasiswaRepository->findWithoutFail($id);

        if (empty($pendaftaranBeasiswa)) {
            Flash::error('Pendaftaran Beasiswa not found');

            return redirect(route('pendaftaranBeasiswas.index'));
        }

        return view('pendaftaran_beasiswas.edit')->with('pendaftaranBeasiswa', $pendaftaranBeasiswa);
    }

    /**
     * Update the specified PendaftaranBeasiswa in storage.
     *
     * @param  int              $id
     * @param UpdatePendaftaranBeasiswaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePendaftaranBeasiswaRequest $request)
    {
        $pendaftaranBeasiswa = $this->pendaftaranBeasiswaRepository->findWithoutFail($id);

        if (empty($pendaftaranBeasiswa)) {
            Flash::error('Pendaftaran Beasiswa not found');

            return redirect(route('pendaftaranBeasiswas.index'));
        }

        $pendaftaranBeasiswa = $this->pendaftaranBeasiswaRepository->update($request->all(), $id);

        Flash::success('Pendaftaran Beasiswa updated successfully.');

        return redirect(route('pendaftaranBeasiswas.index'));
    }

    /**
     * Remove the specified PendaftaranBeasiswa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pendaftaranBeasiswa = $this->pendaftaranBeasiswaRepository->findWithoutFail($id);

        if (empty($pendaftaranBeasiswa)) {
            Flash::error('Pendaftaran Beasiswa not found');

            return redirect(route('pendaftaranBeasiswas.index'));
        }

        $this->pendaftaranBeasiswaRepository->delete($id);

        Flash::success('Pendaftaran Beasiswa deleted successfully.');

        return redirect(route('pendaftaranBeasiswas.index'));
    }
}
