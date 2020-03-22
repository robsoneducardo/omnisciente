<?php

namespace App\Http\Controllers;

use App\Macroregion;
use Illuminate\Http\Request;

class MacroregionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view ('macroregions', ['macroregions' => Macroregion::all()]
        $macroregions = Macroregion::all();
        //dd ($macroregions);
        return view ('macroregions', compact('macroregions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Macroregion  $macroregion
     * @return \Illuminate\Http\Response
     */
    public function show(Macroregion $macroregion)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Macroregion  $macroregion
     * @return \Illuminate\Http\Response
     */
    public function edit(Macroregion $macroregion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Macroregion  $macroregion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Macroregion $macroregion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Macroregion  $macroregion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Macroregion $macroregion)
    {
        //
    }
}
