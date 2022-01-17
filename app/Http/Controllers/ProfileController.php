<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Resources\ProfileResource;
use App\Models\Profile;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProfileController extends Controller
{
    public function index(): ResourceCollection
    {
        return ProfileResource::collection(Profile::all());
    }

    public function show(Profile $profile): ProfileResource
    {
        return new ProfileResource($profile);
    }

    public function store(ProfileRequest $request)
    {
        $data = $request->validated();

        $profile = Profile::create([
            'user_id' => $request->user()->id,
            ...$data
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('avatars', 'public');
            $user = $request->user();
            $user->photo = '/storage/' . $path;
            $user->save();
        }

        return response()->json([
            'message' => 'Successfully created profile',
            'profile' => new ProfileResource($profile)
        ]);
    }

    public function update(Profile $profile, ProfileRequest $request)
    {
        $data = $request->validated();

        $profile->update($data);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('avatars', 'public');
            $user = $request->user();
            $user->photo = '/storage/' . $path;
            $user->save();
        }

        return response()->json([
            'message' => 'Successfully updated profile',
            'profile' => new ProfileResource($profile)
        ]);
    }
}
