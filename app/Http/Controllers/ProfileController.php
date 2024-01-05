<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function showProfilePicture($user)
    {
        // Logic to retrieve user profile picture path from the database
        $picturePath = 'profile_photo_path';// Get the path from your database;

        // Check if the picture exists
        if (Storage::exists($picturePath)) {
            // Return the image with appropriate headers
            return response()->file(storage_path("app/{$picturePath}"));
        } else {
            // Return a default image or handle the case where the image doesn't exist
            return response()->file(public_path('images/default-profile-picture.jpg'));
        }
    }
}

