<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\State;
use App\Observers\LocationObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy(LocationObserver::class)]
final class Location extends Model
{
    use SoftDeletes;

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    protected function casts(): array
    {
        return [
            'uuid' => 'string',
            'name' => 'string',
            'slug' => 'string',
            'description' => 'string',
            'address' => 'string',
            'city' => 'string',
            'state' => State::class,
            'zip' => 'string',
            'phone' => 'string',
            'url' => 'string',
            'menu_url' => 'string',
            'directions_url' => 'string',
            'image' => 'string',
            'status' => 'boolean',
        ];
    }
}
