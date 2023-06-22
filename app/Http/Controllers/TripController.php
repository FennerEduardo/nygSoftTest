<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTripRequest;
use App\Http\Requests\UpdateTripRequest;
use App\Models\City;
use App\Models\Departament;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Illuminate\Support\Str;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departaments = Departament::all();
        $cities = City::all();
        $trips = Trip::with(['city.departament', 'user'])->orderBy('id' , 'desc')->get();

        return Inertia::render(
            'Trips/TripCreate',
            [
                'departaments' => $departaments,
                'cities' => $cities,
                'trips' => $trips,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:' . User::class,
            'city_ids' => 'required|array',
            'city_ids.*' => 'exists:cities,id',
        ]);


        $email = Str::slug($request->name, '') . '@nygsoft.com';
        $user = User::create([
            'name' => $request->name,
            'email' => $email,
            'password' => Hash::make($email),
        ]);

        foreach ($request->city_ids as $city_id) {
            Trip::create([
                'user_id' => $user->id,
                'city_id' => $city_id,
            ]);
        }


        return redirect()->back()->with(['message' => 'Se han registrado los viajes con éxito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTripRequest $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
