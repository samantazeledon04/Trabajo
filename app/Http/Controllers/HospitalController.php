<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

/**
 * Class HospitalController
 * @package App\Http\Controllers
 */
class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::paginate();

        return view('hospital.index', compact('hospitals'))
            ->with('i', (request()->input('page', 1) - 1) * $hospitals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospital = new Hospital();
        return view('hospital.create', compact('hospital'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Hospital::$rules);

        $hospital = Hospital::create($request->all());

        return redirect()->route('hospitals.index')
            ->with('success', 'Hospital created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hospital = Hospital::find($id);

        return view('hospital.show', compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital = Hospital::find($id);

        return view('hospital.edit', compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Hospital $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {
        request()->validate(Hospital::$rules);

        $hospital->update($request->all());

        return redirect()->route('hospitals.index')
            ->with('success', 'Hospital updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $hospital = Hospital::find($id)->delete();

        return redirect()->route('hospitals.index')
            ->with('success', 'Hospital deleted successfully');
    }
}
