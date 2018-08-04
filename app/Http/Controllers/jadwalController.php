<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatejadwalRequest;
use App\Http\Requests\UpdatejadwalRequest;
use App\Repositories\jadwalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\jadwal;
use App\Models\pengangguran;
use App\Models\dkm;
use App\Models\belajar;
use App\Models\pengajar;
use Auth;

class jadwalController extends AppBaseController
{
    /** @var  jadwalRepository */
    private $jadwalRepository;

    public function __construct(jadwalRepository $jadwalRepo)
    {
        $this->jadwalRepository = $jadwalRepo;
    }

    /**
     * Display a listing of the jadwal.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if(Auth::guest())
          abort(404);

        $this->jadwalRepository->pushCriteria(new RequestCriteria($request));
        $jadwals = $this->jadwalRepository->all();

        return view('jadwals.index')
            ->with('jadwals', $jadwals);
    }

    /**
     * Show the form for creating a new jadwal.
     *
     * @return Response
     */
    public function create()
    {
        if(jadwal::max('id') == NULL)
          $jadwal = 0;
        else
          $jadwal = jadwal::max('id');

        $pengangguran = pengangguran::where('user_id', Auth::user()->id)->where(function ($status) { $status->where('Status', 'Menganggur')->orWhere('Status', 'Belajar');})->pluck('kode','id');
        $belajar = belajar::where('Status', 'Pending')->orWhere('Status', 'Aktif')->pluck('kode','id');

        return view('jadwals.create', compact('pengangguran','belajar','jadwal'));
    }

    /**
     * Store a newly created jadwal in storage.
     *
     * @param CreatejadwalRequest $request
     *
     * @return Response
     */
    public function store(CreatejadwalRequest $request)
    {
        $input = $request->all();
        $url = md5($request->input('url'));
        $input['url'] = $url;
        $jadwal = $this->jadwalRepository->create($input);

        Flash::success('Formulir diterima, selanjutnya kami akan menghubungi Anda');

        return redirect(route('jadwals.index'));
    }

    /**
     * Display the specified jadwal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if(Auth::guest())
          abort(404);

        $jadwal = jadwal::where('url',$id)->first();

        if (empty($jadwal)) {
            Flash::error('Data Jadwal Tidak Ditemukan');

            return redirect(route('jadwals.index'));
        }

        $penganggurans = pengangguran::all();
        $dkms = dkm::all();
        $belajars = belajar::all();
        $pengajars = pengajar::all();

        return view('jadwals.show', compact('penganggurans','dkms','belajars','pengajars'))->with('jadwal', $jadwal);
    }

    /**
     * Show the form for editing the specified jadwal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if(Auth::guest())
          abort(404);

        $jadwal = jadwal::where('url',$id)->first();

        if (empty($jadwal)) {
            Flash::error('Data Jadwal Tidak Ditemukan');

            return redirect(route('jadwals.index'));
        }

        return view('jadwals.edit')->with('jadwal', $jadwal);
    }

    /**
     * Update the specified jadwal in storage.
     *
     * @param  int              $id
     * @param UpdatejadwalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatejadwalRequest $request)
    {
        $jadwal = $this->jadwalRepository->findWithoutFail($id);

        if (empty($jadwal)) {
            Flash::error('Data Jadwal Tidak Ditemukan');

            return redirect(route('jadwals.index'));
        }

        $jadwal = $this->jadwalRepository->update($request->all(), $id);

        Flash::success('Data Jadwal berhasil diperbaharui');

        return redirect(route('jadwals.index'));
    }

    /**
     * Remove the specified jadwal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jadwal = $this->jadwalRepository->findWithoutFail($id);

        if (empty($jadwal)) {
            Flash::error('Data Jadwal Tidak Ditemukan');

            return redirect(route('jadwals.index'));
        }

        $this->jadwalRepository->delete($id);

        Flash::success('Data Jadwal berhasil dihapus');

        return redirect(route('jadwals.index'));
    }
}
