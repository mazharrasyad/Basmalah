<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepengangguranRequest;
use App\Http\Requests\UpdatepengangguranRequest;
use App\Repositories\pengangguranRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\pengangguran;
use App\Models\dkm;
use App\Models\jadwal;
use Auth;

class pengangguranController extends AppBaseController
{
    /** @var  pengangguranRepository */
    private $pengangguranRepository;

    public function __construct(pengangguranRepository $pengangguranRepo)
    {
        $this->pengangguranRepository = $pengangguranRepo;
    }

    /**
     * Display a listing of the pengangguran.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if(Auth::guest())
          abort(404);

        $this->pengangguranRepository->pushCriteria(new RequestCriteria($request));
        $penganggurans = $this->pengangguranRepository->all();

        $dkms = dkm::all();

        return view('penganggurans.index',compact('dkms'))
            ->with('penganggurans', $penganggurans);
    }

    /**
     * Show the form for creating a new pengangguran.
     *
     * @return Response
     */
    public function create()
    {
        if(Auth::guest())
          abort(404);

        if(pengangguran::max('id') == NULL)
          $pengangguran = 0;
        else
          $pengangguran = pengangguran::max('id');

        return view('penganggurans.create',compact('pengangguran'));
    }

    /**
     * Store a newly created pengangguran in storage.
     *
     * @param CreatepengangguranRequest $request
     *
     * @return Response
     */
    public function store(CreatepengangguranRequest $request)
    {
        $input = $request->all();
        $url = md5($request->input('url'));
        $input['url'] = $url;
        $pengangguran = $this->pengangguranRepository->create($input);

        Flash::success('Data berhasil diterima');

        return redirect(route('penganggurans.index'));
    }

    /**
     * Display the specified pengangguran.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if (Auth::guest())
          abort(404);

        $pengangguran = pengangguran::where('url',$id)->first();

        if (empty($pengangguran)) {
            Flash::error('Data Pengangguran Tidak Ditemukan');

            return redirect(route('penganggurans.index'));
        }

        $dkms = dkm::all();
        $jadwals = jadwal::all();
        $i = 1;

        return view('penganggurans.show',compact('dkms','jadwals'))->with('pengangguran', $pengangguran);
    }

    /**
     * Show the form for editing the specified pengangguran.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if (Auth::guest())
          abort(404);

        $pengangguran = pengangguran::where('url',$id)->first();

        if (empty($pengangguran)) {
            Flash::error('Data Pengangguran Tidak Ditemukan');

            return redirect(route('penganggurans.index'));
        }

        return view('penganggurans.edit')->with('pengangguran', $pengangguran);
    }

    /**
     * Update the specified pengangguran in storage.
     *
     * @param  int              $id
     * @param UpdatepengangguranRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepengangguranRequest $request)
    {
        $pengangguran = $this->pengangguranRepository->findWithoutFail($id);

        if (empty($pengangguran)) {
            Flash::error('Data Pengangguran Tidak Ditemukan');

            return redirect(route('penganggurans.index'));
        }

        $pengangguran = $this->pengangguranRepository->update($request->all(), $id);

        Flash::success('Data Pengangguran berhasil diperbaharui');

        return redirect(route('penganggurans.index'));
    }

    /**
     * Remove the specified pengangguran from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pengangguran = $this->pengangguranRepository->findWithoutFail($id);

        if (empty($pengangguran)) {
            Flash::error('Data Pengangguran Tidak Ditemukan');

            return redirect(route('penganggurans.index'));
        }

        $this->pengangguranRepository->delete($id);

        Flash::success('Data Pengangguran berhasil dihapus');

        return redirect(route('penganggurans.index'));
    }
}
