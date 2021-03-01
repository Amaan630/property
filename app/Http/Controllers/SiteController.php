<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiteRequest;
use App\Models\Property\Property;
use App\Models\Site;
use App\Models\Topic;
use App\Models\Waitlist;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Database\Eloquent\Model as Eloquent;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Sites/Index', [
            'sites' => $request->user()->currentTeam->sites,
            'name' => $request->user()->name,
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
     * @return \Inertia\Response
     */
    public function store(StoreSiteRequest $request)
    {

        $site = Site::create([
//            'email' => $request->get('email')
            'team_id' => 1,
            'type' => $request->get('type'),
            'title' => $request->get('title')
        ]);


        return Inertia::render('Sites/Edit', [
            'site' => $site
        ]);
    }


    public function show(Site $site)
    {
        return Inertia::render('Sites/Show', [
            'site' => $site,
            'links' => $site->links,
            'topics' => $site->topics,
            'questions' => $site->topics->each(function ($topic) {
                return $topic->questions;
            })
        ]);
    }

    public function form(Site $site)
    {
        return Inertia::render('Sites/Show', [
            'site' => $site,
            'topics' => $site->topics,
            'questions' => $site->topics->each(function ($topic) {
                return $topic->questions;
            })
        ]);
    }


    public function edit(Site $site)
    {
        return Inertia::render('Sites/Edit', [
            'site' => $site,
            'links' => $site->links,
            'topics' => $site->topics,
            'questions' => $site->topics->each(function ($topic) {
                return $topic->questions;
            }),
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
