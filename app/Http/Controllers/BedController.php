<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use Illuminate\Http\Request;

/**
 * Class BedController
 * @package App\Http\Controllers
 */
class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beds = Bed::paginate();

        return view('bed.index', compact('beds'))
            ->with('i', (request()->input('page', 1) - 1) * $beds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bed = new Bed();
        return view('bed.create', compact('bed'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bed::$rules);

        $bed = Bed::create($request->all());

        return redirect()->route('beds.index')
            ->with('success', 'Bed created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bed = Bed::find($id);

        return view('bed.show', compact('bed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bed = Bed::find($id);

        return view('bed.edit', compact('bed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bed $bed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bed $bed)
    {
        request()->validate(Bed::$rules);

        $bed->update($request->all());

        return redirect()->route('beds.index')
            ->with('success', 'Bed updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bed = Bed::find($id)->delete();

        return redirect()->route('beds.index')
            ->with('success', 'Bed deleted successfully');
    }
}
