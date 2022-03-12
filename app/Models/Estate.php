<?php

namespace App\Models;

use App\Models\User;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estate extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        "id",
        "userId",
        "venueId",
        "acumulated",
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
    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venueId', 'id');
    }
}
