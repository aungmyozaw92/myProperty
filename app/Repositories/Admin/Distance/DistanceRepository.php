<?php

namespace App\Repositories\Admin\Distance;

/**
 * Interface DistanceRepository
 * @package App\Repositories\Distance
 */
interface DistanceRepository
{
    public function findOrThrowException($id);

    public function getAllDistances($order_by = 'id', $sort = 'asc');

    public function create($input,$type);

    public function destroy($id);

    public function update($id, $input);

}
