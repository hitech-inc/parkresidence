<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateHousesRequest;
use App\Http\Requests\Backend\UpdateHousesRequest;
use App\Repositories\Backend\HousesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HousesController extends AppBaseController
{
    /** @var  HousesRepository */
    private $housesRepository;

    public function __construct(HousesRepository $housesRepo)
    {
        $this->housesRepository = $housesRepo;
    }

    /**
     * Display a listing of the Houses.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->housesRepository->pushCriteria(new RequestCriteria($request));
        $houses = $this->housesRepository->all();

        return view('backend.houses.index')
            ->with('houses', $houses);
    }

    /**
     * Show the form for creating a new Houses.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.houses.create');
    }

    /**
     * Store a newly created Houses in storage.
     *
     * @param CreateHousesRequest $request
     *
     * @return Response
     */
    public function store(CreateHousesRequest $request)
    {
        $input = $request->all();

        $houses = $this->housesRepository->create($input);

        Flash::success('Houses saved successfully.');

        return redirect(route('backend.houses.index'));
    }

    /**
     * Display the specified Houses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $houses = $this->housesRepository->findWithoutFail($id);

        if (empty($houses)) {
            Flash::error('Houses not found');

            return redirect(route('backend.houses.index'));
        }

        return view('backend.houses.show')->with('houses', $houses);
    }

    /**
     * Show the form for editing the specified Houses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $houses = $this->housesRepository->findWithoutFail($id);

        if (empty($houses)) {
            Flash::error('Houses not found');

            return redirect(route('backend.houses.index'));
        }

        return view('backend.houses.edit')->with('houses', $houses);
    }

    /**
     * Update the specified Houses in storage.
     *
     * @param  int              $id
     * @param UpdateHousesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHousesRequest $request)
    {
        $houses = $this->housesRepository->findWithoutFail($id);

        if (empty($houses)) {
            Flash::error('Houses not found');

            return redirect(route('backend.houses.index'));
        }

        $houses = $this->housesRepository->update($request->all(), $id);

        Flash::success('Houses updated successfully.');

        return redirect(route('backend.houses.index'));
    }

    /**
     * Remove the specified Houses from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $houses = $this->housesRepository->findWithoutFail($id);

        if (empty($houses)) {
            Flash::error('Houses not found');

            return redirect(route('backend.houses.index'));
        }

        $this->housesRepository->delete($id);

        Flash::success('Houses deleted successfully.');

        return redirect(route('backend.houses.index'));
    }
}
