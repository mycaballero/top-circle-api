<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        "id",
        "name",
        "countryId",
    ];

    /**
     * The attributes excluded from the model"s JSON form.
     *
     * @var array
     */
    protected $hidden = [
        "updated_at",
        "deleted_at"
    ];
}
