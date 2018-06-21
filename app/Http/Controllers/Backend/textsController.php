<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreatetextsRequest;
use App\Http\Requests\Backend\UpdatetextsRequest;
use App\Repositories\Backend\textsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class textsController extends AppBaseController
{
    /** @var  textsRepository */
    private $textsRepository;

    public function __construct(textsRepository $textsRepo)
    {
        $this->textsRepository = $textsRepo;
    }

    /**
     * Display a listing of the texts.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->textsRepository->pushCriteria(new RequestCriteria($request));
        $texts = $this->textsRepository->all();

        return view('backend.texts.index')
            ->with('texts', $texts);
    }

    /**
     * Show the form for creating a new texts.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.texts.create');
    }

    /**
     * Store a newly created texts in storage.
     *
     * @param CreatetextsRequest $request
     *
     * @return Response
     */
    public function store(CreatetextsRequest $request)
    {
        $input = $request->all();

        $texts = $this->textsRepository->create($input);

        Flash::success('Texts saved successfully.');

        return redirect(route('backend.texts.index'));
    }

    /**
     * Display the specified texts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $texts = $this->textsRepository->findWithoutFail($id);

        if (empty($texts)) {
            Flash::error('Texts not found');

            return redirect(route('backend.texts.index'));
        }

        return view('backend.texts.show')->with('texts', $texts);
    }

    /**
     * Show the form for editing the specified texts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $texts = $this->textsRepository->findWithoutFail($id);

        if (empty($texts)) {
            Flash::error('Texts not found');

            return redirect(route('backend.texts.index'));
        }

        return view('backend.texts.edit')->with('texts', $texts);
    }

    /**
     * Update the specified texts in storage.
     *
     * @param  int              $id
     * @param UpdatetextsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetextsRequest $request)
    {
        $data = $request->except('_token');
        // $data = $request->validated();
        //dd($data);

        $texts = $this->textsRepository->findWithoutFail($id);

        if (empty($texts)) {
            Flash::error('Texts not found');

            return redirect(route('backend.texts.index'));
        }

        //dd($request->all());
        if ($request->hasFile('img'))
        {
            $file = $request->img;
            $filename = date('y-m-d-H-i-s') . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move( public_path('/img/textsblocks/'), $filename );
            $data['img'] = $filename;
            //dd($data['img']);
        }

        $texts = $this->textsRepository->update($data, $id);
        //dd($texts);

        Flash::success('Texts updated successfully.');

        return redirect(route('backend.texts.index'));
    }

    /**
     * Remove the specified texts from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $texts = $this->textsRepository->findWithoutFail($id);

        if (empty($texts)) {
            Flash::error('Texts not found');

            return redirect(route('backend.texts.index'));
        }

        $this->textsRepository->delete($id);

        Flash::success('Texts deleted successfully.');

        return redirect(route('backend.texts.index'));
    }
}
