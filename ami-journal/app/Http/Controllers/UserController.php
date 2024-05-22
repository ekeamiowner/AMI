<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Middleware\AcceptedReviewer;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = User::query();
        if ($search) 
        {
            $query->where('name', 'like', "%$search%");
        }

        $users = $query->paginate(10);

        return view('pages.usermanagement.index', ['users' => $users , 'search' => $search]);
    }

    public function update(Request $request)
    {
        $userId = $request->input('user');
        $user = User::find($userId);

        if (!$user) 
        {
            return redirect()->back()->with('error', 'User not found.');
        }

        if ($user->accepted_reviewer !== null) 
        {
            $user->accepted_reviewer = !$user->accepted_reviewer;
            $user->save();
        } 
        else 
        {
            return redirect()->back()->with('error', '"accepted_reviewer" is null.');
        }
        
        if($user->accepted_reviewer)
        {
            session()->flash('success', "$user->name successfully promoted to reviewer.");
        }
        else 
        {
            session()->flash('success', "$user->name's rights successfully demoted.");
        }

        $users = User::paginate(10);
        return view('pages.usermanagement.index', ['users' => $users , 'search' => '']);
    }
    
}

