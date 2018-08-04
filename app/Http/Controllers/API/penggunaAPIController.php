<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatepenggunaAPIRequest;
use App\Http\Requests\API\UpdatepenggunaAPIRequest;
use App\Models\pengguna;
use App\Repositories\penggunaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class penggunaController
 * @package App\Http\Controllers\API
 */

class penggunaAPIController extends AppBaseController
{
    /** @var  penggunaRepository */
    private $penggunaRepository;

    public function __construct(penggunaRepository $penggunaRepo)
    {
        $this->penggunaRepository = $penggunaRepo;
    }

    /**
     * Display a listing of the pengguna.
     * GET|HEAD /penggunas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->penggunaRepository->pushCriteria(new RequestCriteria($request));
        $this->penggunaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $penggunas = $this->penggunaRepository->all();

        return $this->sendResponse($penggunas->toArray(), 'Penggunas retrieved successfully');
    }

    /**
     * Store a newly created pengguna in storage.
     * POST /penggunas
     *
     * @param CreatepenggunaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatepenggunaAPIRequest $request)
    {
        $input = $request->all();

        $penggunas = $this->penggunaRepository->create($input);

        return $this->sendResponse($penggunas->toArray(), 'Pengguna saved successfully');
    }

    /**
     * Display the specified pengguna.
     * GET|HEAD /penggunas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var pengguna $pengguna */
        $pengguna = $this->penggunaRepository->findWithoutFail($id);

        if (empty($pengguna)) {
            return $this->sendError('Pengguna not found');
        }

        return $this->sendResponse($pengguna->toArray(), 'Pengguna retrieved successfully');
    }

    /**
     * Update the specified pengguna in storage.
     * PUT/PATCH /penggunas/{id}
     *
     * @param  int $id
     * @param UpdatepenggunaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepenggunaAPIRequest $request)
    {
        $input = $request->all();

        /** @var pengguna $pengguna */
        $pengguna = $this->penggunaRepository->findWithoutFail($id);

        if (empty($pengguna)) {
            return $this->sendError('Pengguna not found');
        }

        $pengguna = $this->penggunaRepository->update($input, $id);

        return $this->sendResponse($pengguna->toArray(), 'pengguna updated successfully');
    }

    /**
     * Remove the specified pengguna from storage.
     * DELETE /penggunas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var pengguna $pengguna */
        $pengguna = $this->penggunaRepository->findWithoutFail($id);

        if (empty($pengguna)) {
            return $this->sendError('Pengguna not found');
        }

        $pengguna->delete();

        return $this->sendResponse($id, 'Pengguna deleted successfully');
    }
}
