<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests\PurposeRequest;

use App\Repositories\Admin\Purpose\PurposeRepository;

class PurposeController extends Controller
{
    protected $purpose;

    public function __construct(PurposeRepository $purpose)
    {
        $this->purpose       = $purpose;
    }

    public function index()
    {
        $purposes = $this->purpose->getAllPurposes();
        return response()->json(["purposes" => $purposes],200);
    }

    public function store(PurposeRequest $request)
    {
        $purpose = $this->purpose->create($request->all(),'purpose');
        return response()->json('User has been successfully Added');
    }


    public function show($id)
    {
        $purpose = $this->purpose->findOrThrowException($id);
        return response()->json($purpose);
    }

    public function update($id,PurposeRequest $request){
        $purpose = $this->purpose->update($id, $request->all());
        return response()->json($purpose);

    }

     public function destroy($id)
    {
        $this->purpose->destroy($id);
        return response()->json('User has been successfully Delete');
    }
}
