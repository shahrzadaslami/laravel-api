<?php

namespace App\Http\Controllers;

use App\Models\Servers;
use App\Http\Requests\StoreServersRequest;
use App\Http\Requests\UpdateServersRequest;

class ServersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Servers $servers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servers $servers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServersRequest $request, Servers $servers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servers $servers)
    {
        //
    }
}