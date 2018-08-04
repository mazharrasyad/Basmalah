<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatejadwalAPIRequest;
use App\Http\Requests\API\UpdatejadwalAPIRequest;
use App\Models\jadwal;
use App\Repositories\jadwalRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class jadwalController
 * @package App\Http\Controllers\API
 */

class jadwalAPIController extends AppBaseController
{
    /** @var  jadwalRepository */
    private $jadwalRepository;

    public function __construct(jadwalRepository $jadwalRepo)
    {
        $this->jadwalRepository = $jadwalRepo;
    }

    /**
     * Display a listing of the jadwal.
     * GET|HEAD /jadwals
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jadwalRepository->pushCriteria(new RequestCriteria($request));
        $this->jadwalRepository->pushCriteria(new LimitOffsetCriteria($request));
        $jadwals = $this->jadwalRepository->all();

        return $this->sendResponse($jadwals->toArray(), 'Jadwals retrieved successfully');
    }

    /**
     * Store a newly created jadwal in storage.
     * POST /jadwals
     *
     * @param CreatejadwalAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatejadwalAPIRequest $request)
    {
        $input = $request->all();

        $jadwals = $this->jadwalRepository->create($input);

        return $this->sendResponse($jadwals->toArray(), 'Jadwal saved successfully');
    }

    /**
     * Display the specified jadwal.
     * GET|HEAD /jadwals/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var jadwal $jadwal */
        $jadwal = $this->jadwalRepository->findWithoutFail($id);

        if (empty($jadwal)) {
            return $this->sendError('Jadwal not found');
        }

        return $this->sendResponse($jadwal->toArray(), 'Jadwal retrieved successfully');
    }

    /**
     * Update the specified jadwal in storage.
     * PUT/PATCH /jadwals/{id}
     *
     * @param  int $id
     * @param UpdatejadwalAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatejadwalAPIRequest $request)
    {
        $input = $request->all();

        /** @var jadwal $jadwal */
        $jadwal = $this->jadwalRepository->findWithoutFail($id);

        if (empty($jadwal)) {
            return $this->sendError('Jadwal not found');
        }

        $jadwal = $this->jadwalRepository->update($input, $id);

        return $this->sendResponse($jadwal->toArray(), 'jadwal updated successfully');
    }

    /**
     * Remove the specified jadwal from storage.
     * DELETE /jadwals/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var jadwal $jadwal */
        $jadwal = $this->jadwalRepository->findWithoutFail($id);

        if (empty($jadwal)) {
            return $this->sendError('Jadwal not found');
        }

        $jadwal->delete();

        return $this->sendResponse($id, 'Jadwal deleted successfully');
    }
}
