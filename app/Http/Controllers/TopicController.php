<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTopicRequest;
use App\Models\Property\Property;
use App\Models\Question;
use App\Models\Site;
use App\Models\Topic;
use App\Models\Waitlist;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TopicController extends Controller
{


//    public function show(Request $request, Site $site, Topic $topic)
//    {
//
//    }

//    public function store(Request $request, Site $site, Topic $topic)
//    {
//
//    }


    public function index(Request $request)
    {
        return Inertia::render('Sites/Form', [
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
    public function store(StoreTopicRequest $request)
    {
        Topic::create([
            'site_id' => $request->get('site_id'),
            'text' => $request->get('text'),
        ]);

        // home worth questions
//        Question::create([
//            'site_id' => $request->get('site_id'),
//            'text' => $request->get('text'),
//        ]);

        return Inertia::render('Edit');
    }


    public function show(Request $request, Site $site, Topic $form)
    {
        return Inertia::render('Sites/Form', [
            'topic' => $form,
            'title' => $form->text,
            'questions' => $form->questions,
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
