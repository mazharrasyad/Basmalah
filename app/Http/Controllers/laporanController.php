<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelaporanRequest;
use App\Http\Requests\UpdatelaporanRequest;
use App\Repositories\laporanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\laporan;
use Auth;

class laporanController extends AppBaseController
{
    /** @var  laporanRepository */
    private $laporanRepository;

    public function __construct(laporanRepository $laporanRepo)
    {
        $this->laporanRepository = $laporanRepo;
    }

    /**
     * Display a listing of the laporan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if(Auth::guest())
          abort(404);

        $this->laporanRepository->pushCriteria(new RequestCriteria($request));
        $laporans = $this->laporanRepository->all();

        return view('laporans.index')
            ->with('laporans', $laporans);
    }

    /**
     * Show the form for creating a new laporan.
     *
     * @return Response
     */
    public function create()
    {
        if(laporan::max('id') == NULL)
          $laporan = 0;
        else
          $laporan = laporan::max('id');

        return view('laporans.create',compact('laporan'));
    }

    /**
     * Store a newly created laporan in storage.
     *
     * @param CreatelaporanRequest $request
     *
     * @return Response
     */
    public function store(CreatelaporanRequest $request)
    {
        $input = $request->all();
        $url = md5($request->input('url'));
        $input['url'] = $url;
        $laporan = $this->laporanRepository->create($input);

        Flash::success('Laporan diterima, selanjutnya kami akan mempertimbangkannya dan menghubungi Anda');

        return redirect(url('/'));
    }

    /**
     * Display the specified laporan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $laporan = laporan::where('url',$id)->first();

        if (empty($laporan)) {
            Flash::error('Data Laporan Tidak Ditemukan');

            return redirect(route('laporans.index'));
        }

        return view('laporans.show')->with('laporan', $laporan);
    }

    /**
     * Show the form for editing the specified laporan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $laporan = laporan::where('url',$id)->first();

        if (empty($laporan)) {
            Flash::error('Data Laporan Tidak Ditemukan');

            return redirect(route('laporans.index'));
        }

        return view('laporans.edit')->with('laporan', $laporan);
    }

    /**
     * Update the specified laporan in storage.
     *
     * @param  int              $id
     * @param UpdatelaporanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelaporanRequest $request)
    {
        $laporan = $this->laporanRepository->findWithoutFail($id);

        if (empty($laporan)) {
            Flash::error('Data Laporan Tidak Ditemukan');

            return redirect(route('laporans.index'));
        }

        $laporan = $this->laporanRepository->update($request->all(), $id);

        Flash::success('Data Laporan berhasil diperbaharui');

        return redirect(route('laporans.index'));
    }

    /**
     * Remove the specified laporan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $laporan = $this->laporanRepository->findWithoutFail($id);

        if (empty($laporan)) {
            Flash::error('Data Laporan Tidak Ditemukan');

            return redirect(route('laporans.index'));
        }

        $this->laporanRepository->delete($id);

        Flash::success('Data Laporan berhasil dihapus');

        return redirect(route('laporans.index'));
    }
}
