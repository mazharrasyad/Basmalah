<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatedkmAPIRequest;
use App\Http\Requests\API\UpdatedkmAPIRequest;
use App\Models\dkm;
use App\Repositories\dkmRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class dkmController
 * @package App\Http\Controllers\API
 */

class dkmAPIController extends AppBaseController
{
    /** @var  dkmRepository */
    private $dkmRepository;

    public function __construct(dkmRepository $dkmRepo)
    {
        $this->dkmRepository = $dkmRepo;
    }

    /**
     * Display a listing of the dkm.
     * GET|HEAD /dkms
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dkmRepository->pushCriteria(new RequestCriteria($request));
        $this->dkmRepository->pushCriteria(new LimitOffsetCriteria($request));
        $dkms = $this->dkmRepository->all();

        return $this->sendResponse($dkms->toArray(), 'Dkms retrieved successfully');
    }

    /**
     * Store a newly created dkm in storage.
     * POST /dkms
     *
     * @param CreatedkmAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatedkmAPIRequest $request)
    {
        $input = $request->all();

        $dkms = $this->dkmRepository->create($input);

        return $this->sendResponse($dkms->toArray(), 'Dkm saved successfully');
    }

    /**
     * Display the specified dkm.
     * GET|HEAD /dkms/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var dkm $dkm */
        $dkm = $this->dkmRepository->findWithoutFail($id);

        if (empty($dkm)) {
            return $this->sendError('Dkm not found');
        }

        return $this->sendResponse($dkm->toArray(), 'Dkm retrieved successfully');
    }

    /**
     * Update the specified dkm in storage.
     * PUT/PATCH /dkms/{id}
     *
     * @param  int $id
     * @param UpdatedkmAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedkmAPIRequest $request)
    {
        $input = $request->all();

        /** @var dkm $dkm */
        $dkm = $this->dkmRepository->findWithoutFail($id);

        if (empty($dkm)) {
            return $this->sendError('Dkm not found');
        }

        $dkm = $this->dkmRepository->update($input, $id);

        return $this->sendResponse($dkm->toArray(), 'dkm updated successfully');
    }

    /**
     * Remove the specified dkm from storage.
     * DELETE /dkms/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var dkm $dkm */
        $dkm = $this->dkmRepository->findWithoutFail($id);

        if (empty($dkm)) {
            return $this->sendError('Dkm not found');
        }

        $dkm->delete();

        return $this->sendResponse($id, 'Dkm deleted successfully');
    }
}
