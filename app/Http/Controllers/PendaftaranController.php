<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePendaftaranRequest;
use App\Http\Requests\UpdatePendaftaranRequest;
use App\Repositories\PendaftaranRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PendaftaranController extends AppBaseController
{
    /** @var  PendaftaranRepository */
    private $pendaftaranRepository;

    public function __construct(PendaftaranRepository $pendaftaranRepo)
    {
        $this->pendaftaranRepository = $pendaftaranRepo;
    }

    /**
     * Display a listing of the Pendaftaran.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pendaftaranRepository->pushCriteria(new RequestCriteria($request));
        $pendaftarans = $this->pendaftaranRepository->all();

        return view('pendaftarans.index')
            ->with('pendaftarans', $pendaftarans);
    }

    /**
     * Show the form for creating a new Pendaftaran.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendaftarans.create');
    }

    /**
     * Store a newly created Pendaftaran in storage.
     *
     * @param CreatePendaftaranRequest $request
     *
     * @return Response
     */
    public function store(CreatePendaftaranRequest $request)
    {
        $input = $request->all();

        $pendaftaran = $this->pendaftaranRepository->create($input);

        Flash::success('Pendaftaran saved successfully.');

        return redirect(route('pendaftarans.index'));
    }

    /**
     * Display the specified Pendaftaran.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pendaftaran = $this->pendaftaranRepository->findWithoutFail($id);

        if (empty($pendaftaran)) {
            Flash::error('Pendaftaran not found');

            return redirect(route('pendaftarans.index'));
        }

        return view('pendaftarans.show')->with('pendaftaran', $pendaftaran);
    }

    /**
     * Show the form for editing the specified Pendaftaran.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pendaftaran = $this->pendaftaranRepository->findWithoutFail($id);

        if (empty($pendaftaran)) {
            Flash::error('Pendaftaran not found');

            return redirect(route('pendaftarans.index'));
        }

        return view('pendaftarans.edit')->with('pendaftaran', $pendaftaran);
    }

    /**
     * Update the specified Pendaftaran in storage.
     *
     * @param  int              $id
     * @param UpdatePendaftaranRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePendaftaranRequest $request)
    {
        $pendaftaran = $this->pendaftaranRepository->findWithoutFail($id);

        if (empty($pendaftaran)) {
            Flash::error('Pendaftaran not found');

            return redirect(route('pendaftarans.index'));
        }

        $pendaftaran = $this->pendaftaranRepository->update($request->all(), $id);

        Flash::success('Pendaftaran updated successfully.');

        return redirect(route('pendaftarans.index'));
    }

    /**
     * Remove the specified Pendaftaran from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pendaftaran = $this->pendaftaranRepository->findWithoutFail($id);

        if (empty($pendaftaran)) {
            Flash::error('Pendaftaran not found');

            return redirect(route('pendaftarans.index'));
        }

        $this->pendaftaranRepository->delete($id);

        Flash::success('Pendaftaran deleted successfully.');

        return redirect(route('pendaftarans.index'));
    }
}
