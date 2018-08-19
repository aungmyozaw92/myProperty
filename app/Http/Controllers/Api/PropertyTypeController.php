<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests\PropertyTypeRequest;

use App\Repositories\Admin\PropertyType\PropertyTypeRepository;

class PropertyTypeController extends Controller
{
    protected $property_type;

    public function __construct(PropertyTypeRepository $property_type)
    {
        $this->property_type       = $property_type;
    }

    public function index()
    {
        $property_types = $this->property_type->getAllPropertyTypes();
        return response()->json(["property_types" => $property_types],200);
    }

    public function store(PropertyTypeRequest $request)
    {
        $property_type = $this->property_type->create($request->all(),'property_type');
        return response()->json($property_type);
    }


    public function show($id)
    {
        $property_type = $this->property_type->findOrThrowException($id);
        return response()->json($property_type);
    }

    public function update($id,PropertyTypeRequest $request){
        $property_type = $this->property_type->update($id, $request->all());
        return response()->json($property_type);

    }

     public function destroy($id)
    {
        $this->property_type->destroy($id);
        return response()->json('User has been successfully Delete');
    }
}
