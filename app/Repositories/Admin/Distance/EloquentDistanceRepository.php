<?php 
namespace App\Repositories\Admin\Distance;

use App\Models\Distance;

class EloquentDistanceRepository implements DistanceRepository
{

    public function findOrThrowException($id)
    {
        if (! is_null(Distance::where('id',$id))) {
           return Distance::find($id);
        }

        throw new GeneralException(trans('exceptions.backend.access.distance.not_found'));
    }


    public function getAllDistances($order_by = 'created_at', $sort = 'asc')
    {
         return Distance::orderBy($order_by, $sort)->get();
    }

    public function create($input,$type)
    {
        $distance               = new Distance;
        $distance->name         = $input['name'];
        $distance->save();
        return true;
    }

    public function update($id, $input)
    {
        $distance = $this->findOrThrowException($id);

        if ($distance->update($input)) {

          $distance->name       = $input['name'];
          $distance->save();

          return true;
        }

        throw new GeneralException(trans('exceptions.backend.access.distance.update_error'));
    }

    public function destroy($id)
    {

        $distance = $this->findOrThrowException($id);

        if ($distance->delete()) {
           return true;
        }

    }
    
}


?>