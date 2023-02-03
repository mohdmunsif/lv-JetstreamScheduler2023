<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCalendarEntityRequest;
use App\Http\Requests\UpdateCalendarEntityRequest;
use App\Models\CalendarEntity;

class CalendarEntityController extends Controller
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
     * @param  \App\Http\Requests\StoreCalendarEntityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCalendarEntityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CalendarEntity  $calendarEntity
     * @return \Illuminate\Http\Response
     */
    public function show(CalendarEntity $calendarEntity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CalendarEntity  $calendarEntity
     * @return \Illuminate\Http\Response
     */
    public function edit(CalendarEntity $calendarEntity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCalendarEntityRequest  $request
     * @param  \App\Models\CalendarEntity  $calendarEntity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCalendarEntityRequest $request, CalendarEntity $calendarEntity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CalendarEntity  $calendarEntity
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalendarEntity $calendarEntity)
    {
        //
    }
}
