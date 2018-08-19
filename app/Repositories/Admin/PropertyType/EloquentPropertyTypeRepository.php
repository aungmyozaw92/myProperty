<?php 
namespace App\Repositories\Admin\PropertyType;

use App\Models\PropertyType;

class EloquentPropertyTypeRepository implements PropertyTypeRepository
{

    public function findOrThrowException($id)
    {
        if (! is_null(PropertyType::where('id',$id))) {
           return PropertyType::find($id);
        }

        throw new GeneralException(trans('exceptions.backend.access.property_type.not_found'));
    }


    public function getAllPropertyTypes($order_by = 'created_at', $sort = 'asc')
    {
         return PropertyType::orderBy($order_by, $sort)->get();
    }

    public function create($input,$type)
    {
        $property_type               = new PropertyType;
        $property_type->name         = $input['name'];
        $property_type->save();
        return true;
    }

    public function update($id, $input)
    {
        $property_type = $this->findOrThrowException($id);

        if ($property_type->update($input)) {

          $property_type->name       = $input['name'];
          $property_type->save();

          return true;
        }

        throw new GeneralException(trans('exceptions.backend.access.property_type.update_error'));
    }

    public function destroy($id)
    {

        $property_type = $this->findOrThrowException($id);

        if ($property_type->delete()) {
           return true;
        }

    }
    
}


?>