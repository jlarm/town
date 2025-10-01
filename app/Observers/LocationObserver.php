<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\Location;
use Str;

final class LocationObserver
{
    public function creating(Location $location): void
    {
        $location->uuid = (string) Str::uuid();
    }
}
