<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDayoffEntityRequest;
use App\Http\Requests\UpdateDayoffEntityRequest;
use App\Models\DayoffEntity;

class DayoffEntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDayoffEntityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDayoffEntityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DayoffEntity  $dayoffEntity
     * @return \Illuminate\Http\Response
     */
    public function show(DayoffEntity $dayoffEntity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DayoffEntity  $dayoffEntity
     * @return \Illuminate\Http\Response
     */
    public function edit(DayoffEntity $dayoffEntity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDayoffEntityRequest  $request
     * @param  \App\Models\DayoffEntity  $dayoffEntity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDayoffEntityRequest $request, DayoffEntity $dayoffEntity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DayoffEntity  $dayoffEntity
     * @return \Illuminate\Http\Response
     */
    public function destroy(DayoffEntity $dayoffEntity)
    {
        //
    }
}
