<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiteRequest;
use App\Models\Property\Property;
use App\Models\Site;
use App\Models\Waitlist;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Sites/Index', [
            'sites' => $request->user()->currentTeam->sites
//            'properties' => $request->user()->currentTeam->properties
        ]);
    }


    public function create(Request $request)
    {
        return Inertia::render('Sites/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiteRequest $request)
    {
//        Site::create([
//            'type' => $request->get('type'),
//            'type' => $request->get('title')
//        ]);

//
        Site::create([
//            'email' => $request->get('email')
            'team_id' => 1,
            'type' => $request->get('type'),
            'title' => $request->get('title')
        ]);
        return Inertia::render('Index');
    }


    public function show(Site $site)
    {
        return Inertia::render('Sites/Show', [
            'site' => $site,
//            'photos' => $property->photosUrls(),
//            'primary_photo' => $property->primaryPhotoUrl,
        ]);
    }


    public function edit(Site $site)
    {
        return Inertia::render('Sites/Edit', [
            'site' => $site
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Site $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Property\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        $site->delete();
    }
}
