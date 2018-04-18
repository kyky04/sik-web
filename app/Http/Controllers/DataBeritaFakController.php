<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataBeritaFakRequest;
use App\Http\Requests\UpdateDataBeritaFakRequest;
use App\Repositories\DataBeritaFakRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DataBeritaFakController extends AppBaseController
{
    /** @var  DataBeritaFakRepository */
    private $dataBeritaFakRepository;

    public function __construct(DataBeritaFakRepository $dataBeritaFakRepo)
    {
        $this->dataBeritaFakRepository = $dataBeritaFakRepo;
    }

    /**
     * Display a listing of the DataBeritaFak.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dataBeritaFakRepository->pushCriteria(new RequestCriteria($request));
        $dataBeritaFaks = $this->dataBeritaFakRepository->all();

        return view('data_berita_faks.index')
            ->with('dataBeritaFaks', $dataBeritaFaks);
    }

    /**
     * Show the form for creating a new DataBeritaFak.
     *
     * @return Response
     */
    public function create()
    {
        return view('data_berita_faks.create');
    }

    /**
     * Store a newly created DataBeritaFak in storage.
     *
     * @param CreateDataBeritaFakRequest $request
     *
     * @return Response
     */
    public function store(CreateDataBeritaFakRequest $request)
    {
        $input = $request->all();

        $dataBeritaFak = $this->dataBeritaFakRepository->create($input);

        Flash::success('Data Berita Fak saved successfully.');

        return redirect(route('dataBeritaFaks.index'));
    }

    /**
     * Display the specified DataBeritaFak.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataBeritaFak = $this->dataBeritaFakRepository->findWithoutFail($id);

        if (empty($dataBeritaFak)) {
            Flash::error('Data Berita Fak not found');

            return redirect(route('dataBeritaFaks.index'));
        }

        return view('data_berita_faks.show')->with('dataBeritaFak', $dataBeritaFak);
    }

    /**
     * Show the form for editing the specified DataBeritaFak.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataBeritaFak = $this->dataBeritaFakRepository->findWithoutFail($id);

        if (empty($dataBeritaFak)) {
            Flash::error('Data Berita Fak not found');

            return redirect(route('dataBeritaFaks.index'));
        }

        return view('data_berita_faks.edit')->with('dataBeritaFak', $dataBeritaFak);
    }

    /**
     * Update the specified DataBeritaFak in storage.
     *
     * @param  int              $id
     * @param UpdateDataBeritaFakRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataBeritaFakRequest $request)
    {
        $dataBeritaFak = $this->dataBeritaFakRepository->findWithoutFail($id);

        if (empty($dataBeritaFak)) {
            Flash::error('Data Berita Fak not found');

            return redirect(route('dataBeritaFaks.index'));
        }

        $dataBeritaFak = $this->dataBeritaFakRepository->update($request->all(), $id);

        Flash::success('Data Berita Fak updated successfully.');

        return redirect(route('dataBeritaFaks.index'));
    }

    /**
     * Remove the specified DataBeritaFak from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataBeritaFak = $this->dataBeritaFakRepository->findWithoutFail($id);

        if (empty($dataBeritaFak)) {
            Flash::error('Data Berita Fak not found');

            return redirect(route('dataBeritaFaks.index'));
        }

        $this->dataBeritaFakRepository->delete($id);

        Flash::success('Data Berita Fak deleted successfully.');

        return redirect(route('dataBeritaFaks.index'));
    }
}
