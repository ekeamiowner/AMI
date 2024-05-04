<?php 

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\User;
use App\Models\Article;
use App\Http\Middleware\AcceptedReviewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class EditorController extends Controller 
{
    public function __construct()
    {
        $this->middleware(AcceptedReviewer::class);
    }

    public function index(Request $request)
    {
        $status = $request->input('status', 'SUBMITTED');
        $search = $request->input('search');
        $sortField = $request->input('sort', 'title');
        $sortDirection = $request->input('direction', 'asc');

        $query = Article::query();

        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', "%$search%")
                    ->orWhere('abstract', 'like', "%$search%");
            });
        }

        if ($status != 'ALL') {
            $query->where('state', $status);
        }

        if ($sortField === 'recommended_editor') {
            $query->join('users', 'users.id', '=', 'articles.recommended_editor_id')
                  ->orderBy('users.name', $sortDirection);
        } else {
            $query->orderBy($sortField, $sortDirection);
        }

        $articles = $query->paginate(10);

        return view('pages.editor.index', compact('articles', 'search', 'status'));
    }
}

?>