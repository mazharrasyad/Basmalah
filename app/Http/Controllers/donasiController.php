<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedonasiRequest;
use App\Http\Requests\UpdatedonasiRequest;
use App\Repositories\donasiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\donasi;
use App\Models\dkm;
use Auth;

class donasiController extends AppBaseController
{
    /** @var  donasiRepository */
    private $donasiRepository;

    public function __construct(donasiRepository $donasiRepo)
    {
        $this->donasiRepository = $donasiRepo;
    }

    /**
     * Display a listing of the donasi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if(Auth::guest())
          abort(404);

        $this->donasiRepository->pushCriteria(new RequestCriteria($request));
        $donasis = $this->donasiRepository->all();


        return view('donasis.index')
            ->with('donasis', $donasis);
    }

    /**
     * Show the form for creating a new donasi.
     *
     * @return Response
     */
    public function create()
    {
      if(donasi::max('id') == NULL)
        $donasi = 0;
      else
        $donasi = donasi::max('id');

      $dkm = dkm::pluck('email','id');
      return view('donasis.create', compact('donasi','dkm'));
    }

    /**
     * Store a newly created donasi in storage.
     *
     * @param CreatedonasiRequest $request
     *
     * @return Response
     */
    public function store(CreatedonasiRequest $request)
    {
        $input = $request->all();
        $url = md5($request->input('url'));
        $input['url'] = $url;
        $donasi = $this->donasiRepository->create($input);

        Flash::success('Formulir diterima, selanjutnya kami akan menghubungi Anda');

        return redirect(url('/'));
    }

    /**
     * Display the specified donasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $donasi = donasi::where('url',$id)->first();

        if (empty($donasi)) {
            Flash::error('Data Donasi Tidak Ditemukan');

            return redirect(route('donasis.index'));
        }

        return view('donasis.show')->with('donasi', $donasi);
    }

    /**
     * Show the form for editing the specified donasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $donasi = donasi::where('url',$id)->first();

        if (empty($donasi)) {
            Flash::error('Data Donasi Tidak Ditemukan');

            return redirect(route('donasis.index'));
        }

        return view('donasis.edit')->with('donasi', $donasi);
    }

    /**
     * Update the specified donasi in storage.
     *
     * @param  int              $id
     * @param UpdatedonasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedonasiRequest $request)
    {
        $donasi = $this->donasiRepository->findWithoutFail($id);

        if (empty($donasi)) {
            Flash::error('Data Donasi Tidak Ditemukan');

            return redirect(route('donasis.index'));
        }

        $donasi = $this->donasiRepository->update($request->all(), $id);

        Flash::success('Data Donasi berhasil diperbaharui');

        return redirect(route('donasis.index'));
    }

    /**
     * Remove the specified donasi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $donasi = $this->donasiRepository->findWithoutFail($id);

        if (empty($donasi)) {
            Flash::error('Data Donasi Tidak Ditemukan');

            return redirect(route('donasis.index'));
        }

        $this->donasiRepository->delete($id);

        Flash::success('Data Donasi berhasil dihapus');

        return redirect(route('donasis.index'));
    }
}
