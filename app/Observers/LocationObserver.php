<?php

namespace App\Observers;

use App\Models\Location;
use Str;

class LocationObserver
{
    public function creating(Location $location): void
    {
        $location->uuid = (string) Str::uuid();
    }
}
