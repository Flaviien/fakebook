<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Publication;
use App\Models\PublicationUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::select("*")->orderBy("created_at", "DESC")->get();
        $users = User::all();
        $likes = PublicationUser::where('user_id', auth()->user()->id)->get();

        foreach ($publications as $publication) { //attach a "liked" boolean key to $publication, to know if the current user like this publication
            foreach ($publication->likes_users->all() as $userWhoLikeThis) {
                if ($userWhoLikeThis->id == auth()->user()->id) {
                    $publication->liked = true;
                } else {
                    $publication->liked = false;
                }
            }
        }

        return Inertia::render('Dashboard', [
            'publications' => $publications,
            'users' => $users,
            'likes' => $likes
        ]);
    }

    public function store(Request $request)
    {
        $publication = new Publication;
        $publication->content = $request->message;
        $publication->likes = 0;
        $publication->user_id = auth()->user()->id;
        $publication->save();
        return Redirect::route('dashboard');
    }

    public function like(Request $request)
    {
        $like = new PublicationUser();
        $like->user_id = $request->input('user');
        $like->publication_id = $request->input('publication');
        $like->save();

        $likes = PublicationUser::where('publication_id', $request->input('publication'))->get();
        $publication = Publication::where('id', $request->input('publication'))->first();
        $publication->likes = count($likes);
        $publication->save();

        return Redirect::back();
    }

    public function unlike(Request $request)
    {
        $like = PublicationUser::where('publication_id', $request->input('publication'))->where('user_id', $request->input('user'))->first();
        $like->delete();

        $likes = PublicationUser::where('publication_id', $request->input('publication'))->get();
        $publication = Publication::where('id', $request->input('publication'))->first();
        $publication->likes = count($likes);
        $publication->save();

        return Redirect::back();
    }
}
