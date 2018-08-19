<?php

namespace App\Repositories\Admin\PropertyType;

/**
 * Interface PropertyTypeRepository
 * @package App\Repositories\PropertyType
 */
interface PropertyTypeRepository
{
    public function findOrThrowException($id);

    public function getAllPropertyTypes($order_by = 'id', $sort = 'asc');

    public function create($input,$type);

    public function destroy($id);

    public function update($id, $input);

}
