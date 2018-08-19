<?php

namespace App\Repositories\Admin\Purpose;

/**
 * Interface PurposeRepository
 * @package App\Repositories\Purpose
 */
interface PurposeRepository
{
    public function findOrThrowException($id);

    public function getAllPurposes($order_by = 'id', $sort = 'asc');

    public function create($input,$type);

    public function destroy($id);

    public function update($id, $input);

}
