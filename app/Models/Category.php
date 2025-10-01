<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Category extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'name',
        'slug',
    ];

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
