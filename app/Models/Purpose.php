<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{
    protected $fillable = ['name'];

	protected $table = 'purposes';

    // public function subcategory()
    // {
    //     return $this->hasMany('App\Models\SubCategory');
    // }
}
