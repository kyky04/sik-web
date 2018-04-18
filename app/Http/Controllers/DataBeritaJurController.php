<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataBeritaJurRequest;
use App\Http\Requests\UpdateDataBeritaJurRequest;
use App\Repositories\DataBeritaJurRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DataBeritaJurController extends AppBaseController
{
    /** @var  DataBeritaJurRepository */
    private $dataBeritaJurRepository;

    public function __construct(DataBeritaJurRepository $dataBeritaJurRepo)
    {
        $this->dataBeritaJurRepository = $dataBeritaJurRepo;
    }

    /**
     * Display a listing of the DataBeritaJur.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dataBeritaJurRepository->pushCriteria(new RequestCriteria($request));
        $dataBeritaJurs = $this->dataBeritaJurRepository->all();

        return view('data_berita_jurs.index')
            ->with('dataBeritaJurs', $dataBeritaJurs);
    }

    /**
     * Show the form for creating a new DataBeritaJur.
     *
     * @return Response
     */
    public function create()
    {
        return view('data_berita_jurs.create');
    }

    /**
     * Store a newly created DataBeritaJur in storage.
     *
     * @param CreateDataBeritaJurRequest $request
     *
     * @return Response
     */
    public function store(CreateDataBeritaJurRequest $request)
    {
        $input = $request->all();

        $dataBeritaJur = $this->dataBeritaJurRepository->create($input);

        Flash::success('Data Berita Jur saved successfully.');

        return redirect(route('dataBeritaJurs.index'));
    }

    /**
     * Display the specified DataBeritaJur.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataBeritaJur = $this->dataBeritaJurRepository->findWithoutFail($id);

        if (empty($dataBeritaJur)) {
            Flash::error('Data Berita Jur not found');

            return redirect(route('dataBeritaJurs.index'));
        }

        return view('data_berita_jurs.show')->with('dataBeritaJur', $dataBeritaJur);
    }

    /**
     * Show the form for editing the specified DataBeritaJur.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataBeritaJur = $this->dataBeritaJurRepository->findWithoutFail($id);

        if (empty($dataBeritaJur)) {
            Flash::error('Data Berita Jur not found');

            return redirect(route('dataBeritaJurs.index'));
        }

        return view('data_berita_jurs.edit')->with('dataBeritaJur', $dataBeritaJur);
    }

    /**
     * Update the specified DataBeritaJur in storage.
     *
     * @param  int              $id
     * @param UpdateDataBeritaJurRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataBeritaJurRequest $request)
    {
        $dataBeritaJur = $this->dataBeritaJurRepository->findWithoutFail($id);

        if (empty($dataBeritaJur)) {
            Flash::error('Data Berita Jur not found');

            return redirect(route('dataBeritaJurs.index'));
        }

        $dataBeritaJur = $this->dataBeritaJurRepository->update($request->all(), $id);

        Flash::success('Data Berita Jur updated successfully.');

        return redirect(route('dataBeritaJurs.index'));
    }

    /**
     * Remove the specified DataBeritaJur from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataBeritaJur = $this->dataBeritaJurRepository->findWithoutFail($id);

        if (empty($dataBeritaJur)) {
            Flash::error('Data Berita Jur not found');

            return redirect(route('dataBeritaJurs.index'));
        }

        $this->dataBeritaJurRepository->delete($id);

        Flash::success('Data Berita Jur deleted successfully.');

        return redirect(route('dataBeritaJurs.index'));
    }
}
