<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatebelajarAPIRequest;
use App\Http\Requests\API\UpdatebelajarAPIRequest;
use App\Models\belajar;
use App\Repositories\belajarRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class belajarController
 * @package App\Http\Controllers\API
 */

class belajarAPIController extends AppBaseController
{
    /** @var  belajarRepository */
    private $belajarRepository;

    public function __construct(belajarRepository $belajarRepo)
    {
        $this->belajarRepository = $belajarRepo;
    }

    /**
     * Display a listing of the belajar.
     * GET|HEAD /belajars
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->belajarRepository->pushCriteria(new RequestCriteria($request));
        $this->belajarRepository->pushCriteria(new LimitOffsetCriteria($request));
        $belajars = $this->belajarRepository->all();

        return $this->sendResponse($belajars->toArray(), 'Belajars retrieved successfully');
    }

    /**
     * Store a newly created belajar in storage.
     * POST /belajars
     *
     * @param CreatebelajarAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatebelajarAPIRequest $request)
    {
        $input = $request->all();

        $belajars = $this->belajarRepository->create($input);

        return $this->sendResponse($belajars->toArray(), 'Belajar saved successfully');
    }

    /**
     * Display the specified belajar.
     * GET|HEAD /belajars/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var belajar $belajar */
        $belajar = $this->belajarRepository->findWithoutFail($id);

        if (empty($belajar)) {
            return $this->sendError('Belajar not found');
        }

        return $this->sendResponse($belajar->toArray(), 'Belajar retrieved successfully');
    }

    /**
     * Update the specified belajar in storage.
     * PUT/PATCH /belajars/{id}
     *
     * @param  int $id
     * @param UpdatebelajarAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebelajarAPIRequest $request)
    {
        $input = $request->all();

        /** @var belajar $belajar */
        $belajar = $this->belajarRepository->findWithoutFail($id);

        if (empty($belajar)) {
            return $this->sendError('Belajar not found');
        }

        $belajar = $this->belajarRepository->update($input, $id);

        return $this->sendResponse($belajar->toArray(), 'belajar updated successfully');
    }

    /**
     * Remove the specified belajar from storage.
     * DELETE /belajars/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var belajar $belajar */
        $belajar = $this->belajarRepository->findWithoutFail($id);

        if (empty($belajar)) {
            return $this->sendError('Belajar not found');
        }

        $belajar->delete();

        return $this->sendResponse($id, 'Belajar deleted successfully');
    }
}
