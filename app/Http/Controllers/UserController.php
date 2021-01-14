<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function show($id)
    {
        $publications = Publication::where('user_id', $id)->orderBy("created_at", "DESC")->get();
        return Inertia::render('Profile/Show', [
            'csrf_token' => csrf_token(),
            'publications' => $publications
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->bio = $request->input("bio");
        $user->save();
        return Redirect::back();
    }
}
