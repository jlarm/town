<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\LocationResource;
use App\Models\Location;
use Inertia\Inertia;
use Inertia\Response;

final class IndexController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Index', [
            'locations' => Inertia::scroll(
                LocationResource::collection(
                    Location::query()
                        ->where('status', true)
                        ->with('categories')
                        ->latest()
                        ->paginate(10)
                )
            ),
        ]);
    }
}
