<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
    ];

    public function locations(): BelongsToMany
    {
        return $this->belongsToMany(Location::class);
    }
}
