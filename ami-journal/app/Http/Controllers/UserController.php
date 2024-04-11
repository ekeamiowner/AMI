<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = User::query();
    if ($search) {
        $query->where('username', 'like', "%$search%");
    }

    $users = $query->paginate(10);

    return view('pages.usermanagement.index', ['users' => $users , 'search' => $search]);
    }

    public function update(){
        
    }
}

