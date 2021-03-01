<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTopicRequest;
use App\Models\Property\Property;
use App\Models\Question;
use App\Models\Site;
use App\Models\Topic;
use App\Models\Waitlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class QuestionController extends Controller
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
     */
    public function store(StoreTopicRequest $request)
    {
        Question::create([
            'topic_id' => $request->get('topic_id'),
            'text' => $request->get('question'),
        ]);

//        $form = Topic::find($request->get('topic_id'));

//        return Inertia::render('Sites/FormEdit', [
//            'topic' => $form,
//            'title' => $form->text,
//            'questions' => $form->questions,
//        ]);

        return Redirect::route('site.form.edit', [
            'site' => Site::find($request->get('site_id')),
            'form' => Topic::find($request->get('topic_id')),
        ]);
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
     */
    public function destroy(Request $request)
    {
        Question::find($request->get('question_id'))->delete();

//        return Inertia::render('Sites/FormEdit', [
//            'form' => Site::find($request->get('topic_id')),
//            'site' => Site::findByUuid($request->get('site_id')),
//        ]);

//        $site = $request->get('site_id');
//        $site = $request->get('site_id');

        return Redirect::route('site.form.edit', [
            'site' => Site::find($request->get('site_id')),
            'form' => Topic::find($request->get('topic_id')),
        ]);
    }
}
