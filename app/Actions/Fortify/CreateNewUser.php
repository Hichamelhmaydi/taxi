<?php

namespace App\Actions\Fortify;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers 
{
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'role' => ['required', Rule::in(['passager', 'chauffeur'])],
            'current_team_id' => ['nullable', 'integer'],
        ])->validate();

        $profilePhotoPath = null;
        if (isset($input['profile_photo']) && $input['profile_photo']->isValid()) {
            $profilePhotoPath = $input['profile_photo']->store('profile_photos', 'public');
        }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'profile_photo_path' => $profilePhotoPath,
            'role' => $input['role'],
            'current_team_id' => $input['current_team_id'] ?? null,
            'role' => $input['role'],
        ]);
    }
}
