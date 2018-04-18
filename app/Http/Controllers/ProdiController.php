<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProdiRequest;
use App\Http\Requests\UpdateProdiRequest;
use App\Repositories\ProdiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProdiController extends AppBaseController
{
    /** @var  ProdiRepository */
    private $prodiRepository;

    public function __construct(ProdiRepository $prodiRepo)
    {
        $this->prodiRepository = $prodiRepo;
    }

    /**
     * Display a listing of the Prodi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->prodiRepository->pushCriteria(new RequestCriteria($request));
        $prodis = $this->prodiRepository->all();

        return view('prodis.index')
            ->with('prodis', $prodis);
    }

    /**
     * Show the form for creating a new Prodi.
     *
     * @return Response
     */
    public function create()
    {
        return view('prodis.create');
    }

    /**
     * Store a newly created Prodi in storage.
     *
     * @param CreateProdiRequest $request
     *
     * @return Response
     */
    public function store(CreateProdiRequest $request)
    {
        $input = $request->all();

        $prodi = $this->prodiRepository->create($input);

        Flash::success('Prodi saved successfully.');

        return redirect(route('prodis.index'));
    }

    /**
     * Display the specified Prodi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prodi = $this->prodiRepository->findWithoutFail($id);

        if (empty($prodi)) {
            Flash::error('Prodi not found');

            return redirect(route('prodis.index'));
        }

        return view('prodis.show')->with('prodi', $prodi);
    }

    /**
     * Show the form for editing the specified Prodi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prodi = $this->prodiRepository->findWithoutFail($id);

        if (empty($prodi)) {
            Flash::error('Prodi not found');

            return redirect(route('prodis.index'));
        }

        return view('prodis.edit')->with('prodi', $prodi);
    }

    /**
     * Update the specified Prodi in storage.
     *
     * @param  int              $id
     * @param UpdateProdiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProdiRequest $request)
    {
        $prodi = $this->prodiRepository->findWithoutFail($id);

        if (empty($prodi)) {
            Flash::error('Prodi not found');

            return redirect(route('prodis.index'));
        }

        $prodi = $this->prodiRepository->update($request->all(), $id);

        Flash::success('Prodi updated successfully.');

        return redirect(route('prodis.index'));
    }

    /**
     * Remove the specified Prodi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prodi = $this->prodiRepository->findWithoutFail($id);

        if (empty($prodi)) {
            Flash::error('Prodi not found');

            return redirect(route('prodis.index'));
        }

        $this->prodiRepository->delete($id);

        Flash::success('Prodi deleted successfully.');

        return redirect(route('prodis.index'));
    }
}
