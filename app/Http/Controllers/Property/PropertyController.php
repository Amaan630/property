<?php

namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Models\Property\Property;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

class PropertyController extends Controller
{

    public function index(Request $request)
    {
        return Inertia::render('Property/Index', [
            'properties' => $request->user()->currentTeam->properties
        ]);
    }


    public function create(Request $request)
    {
        return Inertia::render('Property/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = new Property;

        $property->street1 = '123 Main St';
//        $property->street1 = $request->street1;
//        $property->description = $request->description;
//        $property->price = $request->price;
//        $property->bed = $request->bed;
//        $property->bath = $request->bath;
//        $property->sqft = $request->sqft;
//        $property->floor_plan_pdf_url = $request->floor_plan_pdf_url;
//        $property->protected_password = $request->protected_password;
//        $property->street1 = $request->street1;
//        $property->street2 = $request->street2;
//        $property->city = $request->city;
//        $property->state = $request->state;
//        $property->zip = $request->zip;
//        $property->country = $request->country;

        $property->save();
    }


    public function show(Property $property)
    {
        return Inertia::render('Property/Show', [
            'property' => $property,
            'photos' => $property->photosUrls(),
            'primary_photo' => $property->primaryPhotoUrl,
        ]);
    }


    public function edit(Property $property)
    {
        return Inertia::render('Property/Edit', [
            'property' => $property
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Property\Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Property\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();
    }
}
