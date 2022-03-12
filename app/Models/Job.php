<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        "id",
        "categoryId",
        "description",
        "firstDate",
        "finishDate",
        "value"
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
    public function metropolitanArea()
    {
        return $this->belongsTo(Category::class,'id', 'categoryId');
    }
}
