<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTopicRequest;
use App\Models\Property\Property;
use App\Models\Question;
use App\Models\Site;
use App\Models\Topic;
use Illuminate\Support\Facades\Redirect;
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
        return Inertia::render('Sites/FormCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
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

//        return Inertia::render('Edit');
        return Redirect::route('site.edit', [
            'site' => Site::find($request->get('site_id')),
        ]);
    }


    public function show(Request $request, Site $site, Topic $form)
    {
        // old one was "Form"
        return Inertia::render('Sites/TypeForm', [
            'topic' => $form,
            'title' => $form->text,
//            'questions' => $form->questions,
            'questionlist' => $form->questions,
        ]);
    }


    public function edit(Request $request, Site $site, Topic $form)
    {
        return Inertia::render('Sites/FormEdit', [
            'topic' => $form,
            'title' => $form->text,
            'questions' => $form->questions,
            'site' => $site,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function update(Request $request)
    {
        $question = Question::find($request->get('question_id'));

        $question->text = $request->get('question');

        $question->save();

        $form = Topic::find($request->get('topic_id'));

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

    /**
     * Remove the specified resource from storage.
     *\
     */
    public function destroy(Request $request)
    {
        Topic::find($request->get('topic_id'))->delete();

        return Redirect::route('site.edit', [
            'site' => Site::find($request->get('site_id')),
        ]);
    }
}
