<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWaitlistRequest;
use App\Models\Waitlist;
use Inertia\Inertia;

class WaitlistController extends Controller
{
    public function store(StoreWaitlistRequest $request)
    {
        Waitlist::create([
            'email' => $request->get('email')
        ]);

        return Inertia::render('Welcome');
    }
}
