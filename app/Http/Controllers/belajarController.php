<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebelajarRequest;
use App\Http\Requests\UpdatebelajarRequest;
use App\Repositories\belajarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\belajar;
use App\Models\pengajar;
use Auth;

class belajarController extends AppBaseController
{
    /** @var  belajarRepository */
    private $belajarRepository;

    public function __construct(belajarRepository $belajarRepo)
    {
        $this->belajarRepository = $belajarRepo;
    }

    /**
     * Display a listing of the belajar.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if(Auth::guest())
          abort(404);

        $this->belajarRepository->pushCriteria(new RequestCriteria($request));
        $belajars = $this->belajarRepository->all();

        $pengajars = pengajar::all();

        return view('belajars.index',compact('pengajars'))
            ->with('belajars', $belajars);
    }

    /**
     * Show the form for creating a new belajar.
     *
     * @return Response
     */
    public function create()
    {
        if(belajar::max('id') == NULL)
          $belajar = 0;
        else
          $belajar = belajar::max('id');

        return view('belajars.create',compact('belajar'));
    }

    /**
     * Store a newly created belajar in storage.
     *
     * @param CreatebelajarRequest $request
     *
     * @return Response
     */
    public function store(CreatebelajarRequest $request)
    {
        $input = $request->all();
        $url = md5($request->input('url'));
        $input['url'] = $url;
        $belajar = $this->belajarRepository->create($input);

        Flash::success('Data berhasil diterima');

        return redirect(route('belajars.index'));
    }

    /**
     * Display the specified belajar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if (Auth::guest())
          abort(404);

        $belajar = belajar::where('url',$id)->first();

        if (empty($belajar)) {
            Flash::error('Data Belajar Tidak Ditemukan');

            return redirect(route('belajars.index'));
        }

        $pengajars = pengajar::all();

        return view('belajars.show',compact('pengajars'))->with('belajar', $belajar);
    }

    /**
     * Show the form for editing the specified belajar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if (Auth::guest())
          abort(404);

        $belajar = belajar::where('url',$id)->first();

        if (empty($belajar)) {
            Flash::error('Data Belajar Tidak Ditemukan');

            return redirect(route('belajars.index'));
        }

        $pengajars = pengajar::all();

        return view('belajars.edit',compact('pengajars'))->with('belajar', $belajar);
    }

    /**
     * Update the specified belajar in storage.
     *
     * @param  int              $id
     * @param UpdatebelajarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebelajarRequest $request)
    {
        $belajar = $this->belajarRepository->findWithoutFail($id);

        if (empty($belajar)) {
            Flash::error('Data Belajar Tidak Ditemukan');

            return redirect(route('belajars.index'));
        }

        $belajar = $this->belajarRepository->update($request->all(), $id);

        Flash::success('Data Belajar berhasil diperbaharui');

        return redirect(route('belajars.index'));
    }

    /**
     * Remove the specified belajar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $belajar = $this->belajarRepository->findWithoutFail($id);

        if (empty($belajar)) {
            Flash::error('Data Belajar Tidak Ditemukan');

            return redirect(route('belajars.index'));
        }

        $this->belajarRepository->delete($id);

        Flash::success('Data Belajar berhasil dihapus');

        return redirect(route('belajars.index'));
    }
}
