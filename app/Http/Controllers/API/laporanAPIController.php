<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatelaporanAPIRequest;
use App\Http\Requests\API\UpdatelaporanAPIRequest;
use App\Models\laporan;
use App\Repositories\laporanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class laporanController
 * @package App\Http\Controllers\API
 */

class laporanAPIController extends AppBaseController
{
    /** @var  laporanRepository */
    private $laporanRepository;

    public function __construct(laporanRepository $laporanRepo)
    {
        $this->laporanRepository = $laporanRepo;
    }

    /**
     * Display a listing of the laporan.
     * GET|HEAD /laporans
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->laporanRepository->pushCriteria(new RequestCriteria($request));
        $this->laporanRepository->pushCriteria(new LimitOffsetCriteria($request));
        $laporans = $this->laporanRepository->all();

        return $this->sendResponse($laporans->toArray(), 'Laporans retrieved successfully');
    }

    /**
     * Store a newly created laporan in storage.
     * POST /laporans
     *
     * @param CreatelaporanAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatelaporanAPIRequest $request)
    {
        $input = $request->all();

        $laporans = $this->laporanRepository->create($input);

        return $this->sendResponse($laporans->toArray(), 'Laporan saved successfully');
    }

    /**
     * Display the specified laporan.
     * GET|HEAD /laporans/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var laporan $laporan */
        $laporan = $this->laporanRepository->findWithoutFail($id);

        if (empty($laporan)) {
            return $this->sendError('Laporan not found');
        }

        return $this->sendResponse($laporan->toArray(), 'Laporan retrieved successfully');
    }

    /**
     * Update the specified laporan in storage.
     * PUT/PATCH /laporans/{id}
     *
     * @param  int $id
     * @param UpdatelaporanAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelaporanAPIRequest $request)
    {
        $input = $request->all();

        /** @var laporan $laporan */
        $laporan = $this->laporanRepository->findWithoutFail($id);

        if (empty($laporan)) {
            return $this->sendError('Laporan not found');
        }

        $laporan = $this->laporanRepository->update($input, $id);

        return $this->sendResponse($laporan->toArray(), 'laporan updated successfully');
    }

    /**
     * Remove the specified laporan from storage.
     * DELETE /laporans/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var laporan $laporan */
        $laporan = $this->laporanRepository->findWithoutFail($id);

        if (empty($laporan)) {
            return $this->sendError('Laporan not found');
        }

        $laporan->delete();

        return $this->sendResponse($id, 'Laporan deleted successfully');
    }
}
