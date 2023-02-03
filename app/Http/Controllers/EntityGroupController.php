<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntityGroupRequest;
use App\Http\Requests\UpdateEntityGroupRequest;
use App\Models\EntityGroup;

class EntityGroupController extends Controller
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
     * @param  \App\Http\Requests\StoreEntityGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntityGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EntityGroup  $entityGroup
     * @return \Illuminate\Http\Response
     */
    public function show(EntityGroup $entityGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EntityGroup  $entityGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(EntityGroup $entityGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntityGroupRequest  $request
     * @param  \App\Models\EntityGroup  $entityGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntityGroupRequest $request, EntityGroup $entityGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntityGroup  $entityGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntityGroup $entityGroup)
    {
        //
    }
}
