<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::select("*")->orderBy("created_at", "DESC")->get();
        $users = User::all();

        return Inertia::render('Dashboard', [
            'publications' => $publications,
            'users' => $users,
            'csrf_token' => csrf_token()
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
}
