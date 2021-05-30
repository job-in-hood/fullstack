<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected function edit()
    {
        $countries = Country::select(['id', 'name'])->get();

        return view('jobseeker.profile.edit', [
                'countries' => $countries
            ]
        );
    }

    protected function update(ProfileUpdateRequest $request)
    {
        auth()->user()
            ->fill($request->validated())
            ->country()->associate($request->country_id)
            ->save();

        session()->flash('success', 'Profile updated successfully');

        return redirect(route('dashboard'));
    }
}
