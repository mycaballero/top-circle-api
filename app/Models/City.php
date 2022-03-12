<?php

namespace App\Models;


use App\Models\Department;
use App\Models\MetropolitanArea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        "id",
        "name",
        "departmentId",
        "metropolitanAreasId",
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

    /**
     * @return BelongsTo
     */
    public function department()
    {
        return $this->belongsTo(Department::class,'id','cityId');
    }
}
