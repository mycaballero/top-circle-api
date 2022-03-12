<?php

namespace App\Models;


use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobHistory extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        "id",
        "userId",
        "JobId",
        "points",
        "status",
        "completedDate"
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
    public function job()
    {
        return $this->belongsTo(Job::class, 'jobId', 'id');
    }
}
