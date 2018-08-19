<?php 
namespace App\Repositories\Admin\Purpose;

use App\Models\Purpose;

class EloquentPurposeRepository implements PurposeRepository
{

    public function findOrThrowException($id)
    {
        if (! is_null(Purpose::where('id',$id))) {
           return Purpose::find($id);
        }

        throw new GeneralException(trans('exceptions.backend.access.purpose.not_found'));
    }


    public function getAllPurposes($order_by = 'created_at', $sort = 'asc')
    {
         return Purpose::orderBy($order_by, $sort)->get();
    }

    public function create($input,$type)
    {
        $purpose               = new Purpose;
        $purpose->name         = $input['name'];
        $purpose->save();
        return true;
    }

    public function update($id, $input)
    {
        $purpose = $this->findOrThrowException($id);

        if ($purpose->update($input)) {

          $purpose->name       = $input['name'];
          $purpose->save();

          return true;
        }

        throw new GeneralException(trans('exceptions.backend.access.purpose.update_error'));
    }

    public function destroy($id)
    {

        $purpose = $this->findOrThrowException($id);

        if ($purpose->delete()) {
           return true;
        }

    }
    
}


?>