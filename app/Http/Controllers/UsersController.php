<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wishlist;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (!is_null(request('query'))) {
            $users = User::whereRaw('LOWER(name) LIKE ? ', ['%' . trim(strtolower(request('query'))) . '%'])
                ->where('blocked', '0')
                ->get();
        } else {
            $users = array();
        }
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);

        $wishlist = Wishlist::User($id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('users.show', ['user' => $user, 'wishlist' => $wishlist]);
    }
}
