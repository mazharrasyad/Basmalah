<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatedonasiAPIRequest;
use App\Http\Requests\API\UpdatedonasiAPIRequest;
use App\Models\donasi;
use App\Repositories\donasiRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class donasiController
 * @package App\Http\Controllers\API
 */

class donasiAPIController extends AppBaseController
{
    /** @var  donasiRepository */
    private $donasiRepository;

    public function __construct(donasiRepository $donasiRepo)
    {
        $this->donasiRepository = $donasiRepo;
    }

    /**
     * Display a listing of the donasi.
     * GET|HEAD /donasis
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->donasiRepository->pushCriteria(new RequestCriteria($request));
        $this->donasiRepository->pushCriteria(new LimitOffsetCriteria($request));
        $donasis = $this->donasiRepository->all();

        return $this->sendResponse($donasis->toArray(), 'Donasis retrieved successfully');
    }

    /**
     * Store a newly created donasi in storage.
     * POST /donasis
     *
     * @param CreatedonasiAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatedonasiAPIRequest $request)
    {
        $input = $request->all();

        $donasis = $this->donasiRepository->create($input);

        return $this->sendResponse($donasis->toArray(), 'Donasi saved successfully');
    }

    /**
     * Display the specified donasi.
     * GET|HEAD /donasis/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var donasi $donasi */
        $donasi = $this->donasiRepository->findWithoutFail($id);

        if (empty($donasi)) {
            return $this->sendError('Donasi not found');
        }

        return $this->sendResponse($donasi->toArray(), 'Donasi retrieved successfully');
    }

    /**
     * Update the specified donasi in storage.
     * PUT/PATCH /donasis/{id}
     *
     * @param  int $id
     * @param UpdatedonasiAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedonasiAPIRequest $request)
    {
        $input = $request->all();

        /** @var donasi $donasi */
        $donasi = $this->donasiRepository->findWithoutFail($id);

        if (empty($donasi)) {
            return $this->sendError('Donasi not found');
        }

        $donasi = $this->donasiRepository->update($input, $id);

        return $this->sendResponse($donasi->toArray(), 'donasi updated successfully');
    }

    /**
     * Remove the specified donasi from storage.
     * DELETE /donasis/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var donasi $donasi */
        $donasi = $this->donasiRepository->findWithoutFail($id);

        if (empty($donasi)) {
            return $this->sendError('Donasi not found');
        }

        $donasi->delete();

        return $this->sendResponse($id, 'Donasi deleted successfully');
    }
}
