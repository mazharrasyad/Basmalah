<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedkmRequest;
use App\Http\Requests\UpdatedkmRequest;
use App\Repositories\dkmRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\dkm;
use App\Models\pengangguran;
use App\User;;
use Auth;

class dkmController extends AppBaseController
{
    /** @var  dkmRepository */
    private $dkmRepository;

    public function __construct(dkmRepository $dkmRepo)
    {
        $this->dkmRepository = $dkmRepo;
    }

    /**
     * Display a listing of the dkm.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dkmRepository->pushCriteria(new RequestCriteria($request));
        $dkms = $this->dkmRepository->all();

        $penganggurans = pengangguran::all();

        return view('dkms.index', compact('penganggurans'))
            ->with('dkms', $dkms);
    }

    /**
     * Show the form for creating a new dkm.
     *
     * @return Response
     */
    public function create()
    {
        if(dkm::max('id') == NULL)
          $dkm = 0;
        else
          $dkm = dkm::max('id');

        return view('dkms.create', compact('dkm'));
    }

    /**
     * Store a newly created dkm in storage.
     *
     * @param CreatedkmRequest $request
     *
     * @return Response
     */
    public function store(CreatedkmRequest $request)
    {
        $input = $request->all();
        $url = md5($request->input('url'));
        $input['url'] = $url;
        $dkm = $this->dkmRepository->create($input);

        Flash::success('Formulir diterima, selanjutnya kami akan menghubungi Anda');

        return redirect(route('dkms.index'));
    }

    /**
     * Display the specified dkm.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dkm = dkm::where('url',$id)->first();

        if (empty($dkm)) {
            Flash::error('Data DKM Tidak Ditemukan');

            return redirect(route('dkms.index'));
        }

        $penganggurans = pengangguran::all();
        $i = 1;

        return view('dkms.show', compact('penganggurans'))->with('dkm', $dkm);
    }

    /**
     * Show the form for editing the specified dkm.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if (Auth::guest())
          abort(404);

        $dkm = dkm::where('url',$id)->first();

        if (empty($dkm)) {
            Flash::error('Data DKM Tidak Ditemukan');

            return redirect(route('dkms.index'));
        }

        $user = user::pluck('email','id');
        
        return view('dkms.edit', compact('user'))->with('dkm', $dkm);
    }

    /**
     * Update the specified dkm in storage.
     *
     * @param  int              $id
     * @param UpdatedkmRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedkmRequest $request)
    {
        $dkm = $this->dkmRepository->findWithoutFail($id);

        if (empty($dkm)) {
            Flash::error('Data DKM Tidak Ditemukan');

            return redirect(route('dkms.index'));
        }
        $dkm = $this->dkmRepository->update($request->all(), $id);

        Flash::success('Data DKM berhasil diperbaharui');

        return redirect(route('dkms.index'));
    }

    /**
     * Remove the specified dkm from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dkm = $this->dkmRepository->findWithoutFail($id);

        if (empty($dkm)) {
            Flash::error('Data DKM Tidak Ditemukan');

            return redirect(route('dkms.index'));
        }

        $this->dkmRepository->delete($id);

        Flash::success('Data DKM berhasil dihapus');

        return redirect(route('dkms.index'));
    }
}
