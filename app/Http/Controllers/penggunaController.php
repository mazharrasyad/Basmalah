<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepenggunaRequest;
use App\Http\Requests\UpdatepenggunaRequest;
use App\Repositories\penggunaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\User;
use App\Role;
use Auth;

class penggunaController extends AppBaseController
{
    /** @var  penggunaRepository */
    private $penggunaRepository;

    public function __construct(penggunaRepository $penggunaRepo)
    {
        $this->penggunaRepository = $penggunaRepo;
    }

    /**
     * Display a listing of the pengguna.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if(Auth::guest())
          abort(404);

        $this->penggunaRepository->pushCriteria(new RequestCriteria($request));
        $penggunas = $this->penggunaRepository->all();

        $role = role::pluck('name','id');

        return view('penggunas.index', compact('role'))
            ->with('penggunas', $penggunas);
    }

    /**
     * Show the form for creating a new pengguna.
     *
     * @return Response
     */
    public function create()
    {
        if(Auth::guest())
          abort(404);
        
        $role = role::pluck('name','id');
        return view('penggunas.create',compact('role'));
    }

    /**
     * Store a newly created pengguna in storage.
     *
     * @param CreatepenggunaRequest $request
     *
     * @return Response
     */
    public function store(CreatepenggunaRequest $request)
    {
        $input = $request->all();
        $hint_password = $request->input('password');
        $input['hint_password'] = $hint_password;
        $password = bcrypt($request->input('password'));
        $input['password'] = $password;
        $pengguna = $this->penggunaRepository->create($input);

        Flash::success('Data User berhasil ditambah');

        return redirect(route('penggunas.index'));
    }

    /**
     * Display the specified pengguna.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if(Auth::guest())
          abort(404);

        $pengguna = $this->penggunaRepository->findWithoutFail($id);

        if (empty($pengguna)) {
            Flash::error('Data User Tidak Ditemukan');

            return redirect(route('penggunas.index'));
        }

        $role = role::pluck('name','id');
        return view('penggunas.show', compact('role'))->with('pengguna', $pengguna);
    }

    /**
     * Show the form for editing the specified pengguna.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if(Auth::guest())
          abort(404);

        $pengguna = $this->penggunaRepository->findWithoutFail($id);

        if (empty($pengguna)) {
            Flash::error('Data User Tidak Ditemukan');

            return redirect(route('penggunas.index'));
        }

        $role = role::pluck('name','id');

        return view('penggunas.edit', compact('role'))->with('pengguna', $pengguna);
    }

    /**
     * Update the specified pengguna in storage.
     *
     * @param  int              $id
     * @param UpdatepenggunaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepenggunaRequest $request)
    {
        $pengguna = $this->penggunaRepository->findWithoutFail($id);

        if (empty($pengguna)) {
            Flash::error('Data User Tidak Ditemukan');

            return redirect(route('penggunas.index'));
        }

        $pengguna = $this->penggunaRepository->update($request->all(), $id);

        Flash::success('Data User berhasil diperbaharui');

        return redirect(route('penggunas.index'));
    }

    /**
     * Remove the specified pengguna from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pengguna = $this->penggunaRepository->findWithoutFail($id);

        if (empty($pengguna)) {
            Flash::error('Data User Tidak Ditemukan');

            return redirect(route('penggunas.index'));
        }

        $this->penggunaRepository->delete($id);

        Flash::success('Data DKM berhasil dihapus');

        return redirect(route('penggunas.index'));
    }
}
