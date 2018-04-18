<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBeasiswaRequest;
use App\Http\Requests\UpdateBeasiswaRequest;
use App\Repositories\BeasiswaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Mahasiswa;

class BeasiswaController extends AppBaseController
{
    /** @var  BeasiswaRepository */
    private $beasiswaRepository;

    public function __construct(BeasiswaRepository $beasiswaRepo)
    {
        $this->beasiswaRepository = $beasiswaRepo;
    }

    /**
     * Display a listing of the Beasiswa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->beasiswaRepository->pushCriteria(new RequestCriteria($request));
        $beasiswas = $this->beasiswaRepository->all();

        return view('beasiswas.index')
            ->with('beasiswas', $beasiswas);
    }

    /**
     * Show the form for creating a new Beasiswa.
     *
     * @return Response
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::select('nama','id')->get();
        return view('beasiswas.create',compact('mahasiswa',$mahasiswa));
    }

    /**
     * Store a newly created Beasiswa in storage.
     *
     * @param CreateBeasiswaRequest $request
     *
     * @return Response
     */
    public function store(CreateBeasiswaRequest $request)
    {
        $input = $request->all();

        $beasiswa = $this->beasiswaRepository->create($input);

        Flash::success('Beasiswa saved successfully.');

        return redirect(route('beasiswas.index'));
    }

    /**
     * Display the specified Beasiswa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $beasiswa = $this->beasiswaRepository->findWithoutFail($id);

        if (empty($beasiswa)) {
            Flash::error('Beasiswa not found');

            return redirect(route('beasiswas.index'));
        }

        return view('beasiswas.show')->with('beasiswa', $beasiswa);
    }

    /**
     * Show the form for editing the specified Beasiswa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $beasiswa = $this->beasiswaRepository->findWithoutFail($id);

        if (empty($beasiswa)) {
            Flash::error('Beasiswa not found');

            return redirect(route('beasiswas.index'));
        }

        return view('beasiswas.edit')->with('beasiswa', $beasiswa);
    }

    /**
     * Update the specified Beasiswa in storage.
     *
     * @param  int              $id
     * @param UpdateBeasiswaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeasiswaRequest $request)
    {
        $beasiswa = $this->beasiswaRepository->findWithoutFail($id);

        if (empty($beasiswa)) {
            Flash::error('Beasiswa not found');

            return redirect(route('beasiswas.index'));
        }

        $beasiswa = $this->beasiswaRepository->update($request->all(), $id);

        Flash::success('Beasiswa updated successfully.');

        return redirect(route('beasiswas.index'));
    }

    /**
     * Remove the specified Beasiswa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $beasiswa = $this->beasiswaRepository->findWithoutFail($id);

        if (empty($beasiswa)) {
            Flash::error('Beasiswa not found');

            return redirect(route('beasiswas.index'));
        }

        $this->beasiswaRepository->delete($id);

        Flash::success('Beasiswa deleted successfully.');

        return redirect(route('beasiswas.index'));
    }
}
