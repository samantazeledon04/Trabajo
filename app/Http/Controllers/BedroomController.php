<?php

namespace App\Http\Controllers;

use App\Models\Bedroom;
use Illuminate\Http\Request;

/**
 * Class BedroomController
 * @package App\Http\Controllers
 */
class BedroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bedrooms = Bedroom::paginate();

        return view('bedroom.index', compact('bedrooms'))
            ->with('i', (request()->input('page', 1) - 1) * $bedrooms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bedroom = new Bedroom();
        return view('bedroom.create', compact('bedroom'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bedroom::$rules);

        $bedroom = Bedroom::create($request->all());

        return redirect()->route('bedrooms.index')
            ->with('success', 'Bedroom created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bedroom = Bedroom::find($id);

        return view('bedroom.show', compact('bedroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bedroom = Bedroom::find($id);

        return view('bedroom.edit', compact('bedroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bedroom $bedroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bedroom $bedroom)
    {
        request()->validate(Bedroom::$rules);

        $bedroom->update($request->all());

        return redirect()->route('bedrooms.index')
            ->with('success', 'Bedroom updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bedroom = Bedroom::find($id)->delete();

        return redirect()->route('bedrooms.index')
            ->with('success', 'Bedroom deleted successfully');
    }
}
