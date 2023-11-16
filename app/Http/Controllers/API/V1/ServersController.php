<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Servers;
use App\Http\Requests\UpdateServersRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ServersResource;
use App\Http\Resources\V1\ServersCollection;
use Illuminate\Http\Request;
use App\Filters\V1\ServerFilter;
use App\Http\Requests\V1\StoreServersRequest;
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
            return new ServersCollection(Servers::all());

        } else {
            $servers = Servers::where($queryItems)->paginate();
            return new ServersCollection($servers->appends($request->query()));
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
        return new ServersResource(Servers::create($request->all()));
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
    public function destroy(Servers $server)
    {
        return  new ServersResource($server->delete());
    }
}
