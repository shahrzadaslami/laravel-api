<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Servers;
use App\Http\Requests\StoreServersRequest;
use App\Http\Requests\UpdateServersRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ServersResource;
use App\Http\Resources\V1\ServersCollection;
use Illuminate\Http\Request;
use App\Filters\V1\ServerFilter;
class ServersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ServerFilter();
        $queryItems = $filter->transform($request);

        if(count($queryItems) == 0) {
            return new ServersCollection(Servers::paginate());

        } else {
            return new ServersCollection(Servers::where($queryItems)->paginate());
        }


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
    public function show(Servers $server)
    {
        return  new ServersResource($server);
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
