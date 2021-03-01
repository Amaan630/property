<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTopicRequest;
use App\Models\Question;
use App\Models\Site;
use App\Models\Link;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class LinkController extends Controller
{

    public function index(Request $request)
    {
//        return Inertia::render('Sites/Form', [
//            'sites' => $request->user()->currentTeam->sites
//        ]);
    }


    public function create(Request $request)
    {
//        return Inertia::render('Sites/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(StoreTopicRequest $request)
    {
        Link::create([
            'site_id' => $request->get('site_id'),
            'title' => $request->get('title'),
            'url' => $request->get('url'),
        ]);

        return Redirect::route('site.edit', [
            'site' => Site::find($request->get('site_id')),
        ]);
    }


    public function show(Request $request)
    {
//        window.location = $request->get('url');
        return Redirect::away($request->get('url'));
    }


    public function edit(Request $request, Site $site, Topic $form)
    {
//        return Inertia::render('Sites/FormEdit', [
//            'topic' => $form,
//            'title' => $form->text,
//            'questions' => $form->questions,
//            'site' => $site,
//        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function update(Request $request)
    {
        $link = Link::find($request->get('link_id'));

        $link->url = $request->get('url');

        $link->save();

        return Redirect::route('site.edit', [
            'site' => Site::find($request->get('site_id')),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *\
     */
    public function destroy(Request $request)
    {
        Link::find($request->get('link_id'))->delete();

        return Redirect::route('site.edit', [
            'site' => Site::find($request->get('site_id')),
        ]);
    }
}
