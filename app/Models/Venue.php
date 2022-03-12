<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Venue extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        "id",
        "name",
        "cityId",
        "code"
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
    public function city()
    {
        return $this->belongsTo(City::class, 'cityId', 'id');
    }

}
