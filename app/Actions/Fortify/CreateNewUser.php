<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Models\User;
use App\Models\Driver;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CreateNewUser implements CreatesNewUsers 
{
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email'),
                Rule::unique('drivers', 'email'),
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'role' => ['required', Rule::in(['passager', 'chauffeur'])],
        ])->validate();
        

        $profilePhotoPath = null;
        if (isset($input['profile_photo']) && $input['profile_photo']->isValid()) {
            $profilePhotoPath = $input['profile_photo']->store('profile_photos', 'public');
        }

        if ($input['role'] === 'passager') {
            return User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'profile_photo_path' => $profilePhotoPath,
                'role' => $input['role'],
            ]);
        } 
        
        return Driver::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'profile_photo_path' => $profilePhotoPath,
            'role' => $input['role'],
        ]);        
    }
}
