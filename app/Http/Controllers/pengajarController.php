<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepengajarRequest;
use App\Http\Requests\UpdatepengajarRequest;
use App\Repositories\pengajarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\pengajar;
use App\Models\belajar;
use App\User;
use Auth;

class pengajarController extends AppBaseController
{
    /** @var  pengajarRepository */
    private $pengajarRepository;

    public function __construct(pengajarRepository $pengajarRepo)
    {
        $this->pengajarRepository = $pengajarRepo;
    }

    /**
     * Display a listing of the pengajar.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pengajarRepository->pushCriteria(new RequestCriteria($request));
        $pengajars = $this->pengajarRepository->all();

        $belajars = belajar::all();

        return view('pengajars.index',compact('belajars'))
            ->with('pengajars', $pengajars);
    }

    /**
     * Show the form for creating a new pengajar.
     *
     * @return Response
     */
    public function create()
    {
        if(pengajar::max('id') == NULL)
          $pengajar = 0;
        else
          $pengajar = pengajar::max('id');

        return view('pengajars.create',compact('pengajar'));
    }

    /**
     * Store a newly created pengajar in storage.
     *
     * @param CreatepengajarRequest $request
     *
     * @return Response
     */
    public function store(CreatepengajarRequest $request)
    {
        $input = $request->all();
        $url = md5($request->input('url'));
        $input['url'] = $url;
        $pengajar = $this->pengajarRepository->create($input);

        Flash::success('Formulir diterima, selanjutnya kami akan menghubungi Anda');

        return redirect(route('pengajars.index'));
    }

    /**
     * Display the specified pengajar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pengajar = pengajar::where('url',$id)->first();

        if (empty($pengajar)) {
            Flash::error('Data Pengajar Tidak Ditemukan');

            return redirect(route('pengajars.index'));
        }

        $belajars = belajar::all();
        $i = 1;

        return view('pengajars.show',compact('belajars'))->with('pengajar', $pengajar);
    }

    /**
     * Show the form for editing the specified pengajar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pengajar = pengajar::where('url',$id)->first();

        if (empty($pengajar)) {
            Flash::error('Data Pengajar Tidak Ditemukan');

            return redirect(route('pengajars.index'));
        }

        $user = user::pluck('email','id');

        return view('pengajars.edit',compact('user'))->with('pengajar', $pengajar);
    }

    /**
     * Update the specified pengajar in storage.
     *
     * @param  int              $id
     * @param UpdatepengajarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepengajarRequest $request)
    {
        $pengajar = $this->pengajarRepository->findWithoutFail($id);

        if (empty($pengajar)) {
            Flash::error('Data Pengajar Tidak Ditemukan');

            return redirect(route('pengajars.index'));
        }
        $pengajar = $this->pengajarRepository->update($request->all(), $id);

        Flash::success('Data Pengajar berhasil diperbaharui');

        return redirect(route('pengajars.index'));
    }

    /**
     * Remove the specified pengajar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pengajar = $this->pengajarRepository->findWithoutFail($id);

        if (empty($pengajar)) {
            Flash::error('Data Pengajar Tidak Ditemukan');

            return redirect(route('pengajars.index'));
        }

        $this->pengajarRepository->delete($id);

        Flash::success('Data Pengajar berhasil dihapus');

        return redirect(route('pengajars.index'));
    }
}
