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
        $user = User::where('id', $id)->first();
        $publications = Publication::where('user_id', $id)->orderBy("created_at", "DESC")->get();

        foreach ($publications as $publication) {
            foreach ($publication->likes_users->all() as $userWhoLikeThis) {
                if ($userWhoLikeThis->id == $id) {
                    $publication->liked = true;
                } else {
                    $publication->liked = false;
                }
            }
        }

        // dump($publications);

        return Inertia::render('Profile/Show', [
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
