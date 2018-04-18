<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataBeritaUnivRequest;
use App\Http\Requests\UpdateDataBeritaUnivRequest;
use App\Repositories\DataBeritaUnivRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DataBeritaUnivController extends AppBaseController
{
    /** @var  DataBeritaUnivRepository */
    private $dataBeritaUnivRepository;

    public function __construct(DataBeritaUnivRepository $dataBeritaUnivRepo)
    {
        $this->dataBeritaUnivRepository = $dataBeritaUnivRepo;
    }

    /**
     * Display a listing of the DataBeritaUniv.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dataBeritaUnivRepository->pushCriteria(new RequestCriteria($request));
        $dataBeritaUnivs = $this->dataBeritaUnivRepository->all();

        return view('data_berita_univs.index')
            ->with('dataBeritaUnivs', $dataBeritaUnivs);
    }

    /**
     * Show the form for creating a new DataBeritaUniv.
     *
     * @return Response
     */
    public function create()
    {
        return view('data_berita_univs.create');
    }

    /**
     * Store a newly created DataBeritaUniv in storage.
     *
     * @param CreateDataBeritaUnivRequest $request
     *
     * @return Response
     */
    public function store(CreateDataBeritaUnivRequest $request)
    {
        $input = $request->all();

        $dataBeritaUniv = $this->dataBeritaUnivRepository->create($input);

        Flash::success('Data Berita Univ saved successfully.');

        return redirect(route('dataBeritaUnivs.index'));
    }

    /**
     * Display the specified DataBeritaUniv.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataBeritaUniv = $this->dataBeritaUnivRepository->findWithoutFail($id);

        if (empty($dataBeritaUniv)) {
            Flash::error('Data Berita Univ not found');

            return redirect(route('dataBeritaUnivs.index'));
        }

        return view('data_berita_univs.show')->with('dataBeritaUniv', $dataBeritaUniv);
    }

    /**
     * Show the form for editing the specified DataBeritaUniv.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataBeritaUniv = $this->dataBeritaUnivRepository->findWithoutFail($id);

        if (empty($dataBeritaUniv)) {
            Flash::error('Data Berita Univ not found');

            return redirect(route('dataBeritaUnivs.index'));
        }

        return view('data_berita_univs.edit')->with('dataBeritaUniv', $dataBeritaUniv);
    }

    /**
     * Update the specified DataBeritaUniv in storage.
     *
     * @param  int              $id
     * @param UpdateDataBeritaUnivRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataBeritaUnivRequest $request)
    {
        $dataBeritaUniv = $this->dataBeritaUnivRepository->findWithoutFail($id);

        if (empty($dataBeritaUniv)) {
            Flash::error('Data Berita Univ not found');

            return redirect(route('dataBeritaUnivs.index'));
        }

        $dataBeritaUniv = $this->dataBeritaUnivRepository->update($request->all(), $id);

        Flash::success('Data Berita Univ updated successfully.');

        return redirect(route('dataBeritaUnivs.index'));
    }

    /**
     * Remove the specified DataBeritaUniv from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataBeritaUniv = $this->dataBeritaUnivRepository->findWithoutFail($id);

        if (empty($dataBeritaUniv)) {
            Flash::error('Data Berita Univ not found');

            return redirect(route('dataBeritaUnivs.index'));
        }

        $this->dataBeritaUnivRepository->delete($id);

        Flash::success('Data Berita Univ deleted successfully.');

        return redirect(route('dataBeritaUnivs.index'));
    }
}
