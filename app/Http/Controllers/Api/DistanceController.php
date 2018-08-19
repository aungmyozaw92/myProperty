<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests\DistanceRequest;

use App\Repositories\Admin\Distance\DistanceRepository;

class DistanceController extends Controller
{
    protected $distance;

    public function __construct(DistanceRepository $distance)
    {
        $this->distance       = $distance;
    }

    public function index()
    {
        $distances = $this->distance->getAllDistances();
        return response()->json(["distances" => $distances],200);
    }

    public function store(DistanceRequest $request)
    {
        $distance = $this->distance->create($request->all(),'distance');
        return response()->json($distance);
    }


    public function show($id)
    {
        $distance = $this->distance->findOrThrowException($id);
        return response()->json($distance);
    }

    public function update($id,DistanceRequest $request){
        $distance = $this->distance->update($id, $request->all());
        return response()->json($distance);

    }

     public function destroy($id)
    {
        $this->distance->destroy($id);
        return response()->json('Distance has been successfully Delete');
    }
}
