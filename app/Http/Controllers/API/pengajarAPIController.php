<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatepengajarAPIRequest;
use App\Http\Requests\API\UpdatepengajarAPIRequest;
use App\Models\pengajar;
use App\Repositories\pengajarRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class pengajarController
 * @package App\Http\Controllers\API
 */

class pengajarAPIController extends AppBaseController
{
    /** @var  pengajarRepository */
    private $pengajarRepository;

    public function __construct(pengajarRepository $pengajarRepo)
    {
        $this->pengajarRepository = $pengajarRepo;
    }

    /**
     * Display a listing of the pengajar.
     * GET|HEAD /pengajars
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pengajarRepository->pushCriteria(new RequestCriteria($request));
        $this->pengajarRepository->pushCriteria(new LimitOffsetCriteria($request));
        $pengajars = $this->pengajarRepository->all();

        return $this->sendResponse($pengajars->toArray(), 'Pengajars retrieved successfully');
    }

    /**
     * Store a newly created pengajar in storage.
     * POST /pengajars
     *
     * @param CreatepengajarAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatepengajarAPIRequest $request)
    {
        $input = $request->all();

        $pengajars = $this->pengajarRepository->create($input);

        return $this->sendResponse($pengajars->toArray(), 'Pengajar saved successfully');
    }

    /**
     * Display the specified pengajar.
     * GET|HEAD /pengajars/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var pengajar $pengajar */
        $pengajar = $this->pengajarRepository->findWithoutFail($id);

        if (empty($pengajar)) {
            return $this->sendError('Pengajar not found');
        }

        return $this->sendResponse($pengajar->toArray(), 'Pengajar retrieved successfully');
    }

    /**
     * Update the specified pengajar in storage.
     * PUT/PATCH /pengajars/{id}
     *
     * @param  int $id
     * @param UpdatepengajarAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepengajarAPIRequest $request)
    {
        $input = $request->all();

        /** @var pengajar $pengajar */
        $pengajar = $this->pengajarRepository->findWithoutFail($id);

        if (empty($pengajar)) {
            return $this->sendError('Pengajar not found');
        }

        $pengajar = $this->pengajarRepository->update($input, $id);

        return $this->sendResponse($pengajar->toArray(), 'pengajar updated successfully');
    }

    /**
     * Remove the specified pengajar from storage.
     * DELETE /pengajars/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var pengajar $pengajar */
        $pengajar = $this->pengajarRepository->findWithoutFail($id);

        if (empty($pengajar)) {
            return $this->sendError('Pengajar not found');
        }

        $pengajar->delete();

        return $this->sendResponse($id, 'Pengajar deleted successfully');
    }
}
