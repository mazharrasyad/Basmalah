<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatepengangguranAPIRequest;
use App\Http\Requests\API\UpdatepengangguranAPIRequest;
use App\Models\pengangguran;
use App\Repositories\pengangguranRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class pengangguranController
 * @package App\Http\Controllers\API
 */

class pengangguranAPIController extends AppBaseController
{
    /** @var  pengangguranRepository */
    private $pengangguranRepository;

    public function __construct(pengangguranRepository $pengangguranRepo)
    {
        $this->pengangguranRepository = $pengangguranRepo;
    }

    /**
     * Display a listing of the pengangguran.
     * GET|HEAD /penganggurans
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pengangguranRepository->pushCriteria(new RequestCriteria($request));
        $this->pengangguranRepository->pushCriteria(new LimitOffsetCriteria($request));
        $penganggurans = $this->pengangguranRepository->all();

        return $this->sendResponse($penganggurans->toArray(), 'Penganggurans retrieved successfully');
    }

    /**
     * Store a newly created pengangguran in storage.
     * POST /penganggurans
     *
     * @param CreatepengangguranAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatepengangguranAPIRequest $request)
    {
        $input = $request->all();

        $penganggurans = $this->pengangguranRepository->create($input);

        return $this->sendResponse($penganggurans->toArray(), 'Pengangguran saved successfully');
    }

    /**
     * Display the specified pengangguran.
     * GET|HEAD /penganggurans/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var pengangguran $pengangguran */
        $pengangguran = $this->pengangguranRepository->findWithoutFail($id);

        if (empty($pengangguran)) {
            return $this->sendError('Pengangguran not found');
        }

        return $this->sendResponse($pengangguran->toArray(), 'Pengangguran retrieved successfully');
    }

    /**
     * Update the specified pengangguran in storage.
     * PUT/PATCH /penganggurans/{id}
     *
     * @param  int $id
     * @param UpdatepengangguranAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepengangguranAPIRequest $request)
    {
        $input = $request->all();

        /** @var pengangguran $pengangguran */
        $pengangguran = $this->pengangguranRepository->findWithoutFail($id);

        if (empty($pengangguran)) {
            return $this->sendError('Pengangguran not found');
        }

        $pengangguran = $this->pengangguranRepository->update($input, $id);

        return $this->sendResponse($pengangguran->toArray(), 'pengangguran updated successfully');
    }

    /**
     * Remove the specified pengangguran from storage.
     * DELETE /penganggurans/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var pengangguran $pengangguran */
        $pengangguran = $this->pengangguranRepository->findWithoutFail($id);

        if (empty($pengangguran)) {
            return $this->sendError('Pengangguran not found');
        }

        $pengangguran->delete();

        return $this->sendResponse($id, 'Pengangguran deleted successfully');
    }
}
