<?php 

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use App\Http\Middleware\AcceptedReviewer;
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

        $articles = $query->paginate(10);

        return view('pages.editor.index', compact('articles', 'search', 'status'));
    }
    public function update($id)
    {
        $article = Article::where('id', 'like', "$id");


        return view('pages.editor.show', ['article' => $article]);
    }

    public function download(Request $request)
    {
        $filePath = $request->input('file');

        if (strpos($filePath, 'pdf/') === 0) {
            $column = 'source';
        } elseif (strpos($filePath, 'latex/') === 0) {
            $column = 'latex_path';
        } else {
            return redirect()->back()->with('error', 'Érvénytelen fájl elérési út!');
        }

        $article = Article::where($column, $filePath)->first();
        if (!$article) {
            return redirect()->back()->with('error', 'A fájl nem található!');
        }

        if (!$article->user) {
            return redirect()->back()->with('error', 'A felhasználó nem található!');
        }

        $userName = $article->user->name;
        $path_parts = pathinfo($filePath);
        $fileExtension = $path_parts['extension'];
        $fileName = strtolower(str_replace(' ', '-', $userName)) . ".$fileExtension";
        

        if (($filePath === null)) {
            return redirect()->back()->with('error', 'Érvénytelen fájl!');
        } else {
            $filePath = '\app\\' . str_replace('/', '\\', $filePath);
            if (!file_exists(storage_path($filePath))) {
                return redirect()->back()->with('error', 'A fájl nem található!');
            }
    
            return response()->download(storage_path($filePath), $fileName);
        }
    }
}

?>