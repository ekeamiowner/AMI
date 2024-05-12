<?php 

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\User;
use App\Models\Review;
use App\Models\Article;
use App\Models\Revision;
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

    public function update(Request $request)
    {
        $article = Article::findOrFail($request->input('article_id'));
    
        if ($article->state === 'ACCEPTED' || $article->state === 'REJECTED') {
            return back()->with('error', 'The status of this article has been finalised and cannot be modified.');
        }
    
        $article->state = $request->input('status');
        $article->save();
    
        if ($article->state !== 'SUBMITTED') {
            $revision = new Revision();
            $revision->article_id = $article->id;
            $revision->created_at = now(); 
            $revision->updated_at = now();
            $revision->save();
    
            $review = new Review();
            $review->user_id = Auth::id();
            $review->revision_id = $revision->id;
            $review->state = $article->state;
            $review->content = $request->input('comment');
            $review->created_at = now();
            $review->updated_at = now();
            $review->save();
        }
    
        if (($article->state === 'REJECTED' || $article->state === 'ACCEPTED')) {
            $user = User::findOrFail(Auth::id());
            $user->completed_review++;
            $user->save();
        }
    
        return back()->with('success', 'Article status successfully updated.');
    }    

    public function download(Request $request)
    {
        $filePath = $request->input('file');

        if (strpos($filePath, 'pdf/') === 0) {
            $column = 'source';
        } elseif (strpos($filePath, 'latex/') === 0) {
            $column = 'latex_path';
        } else {
            return redirect()->back()->with('error', 'Invalid file path!');
        }

        $article = Article::where($column, $filePath)->first();
        if (!$article) {
            return redirect()->back()->with('error', 'File not found!');
        }

        if (!$article->user) {
            return redirect()->back()->with('error', 'User not found!');
        }

        $userName = $article->user->name;
        $path_parts = pathinfo($filePath);
        $fileExtension = $path_parts['extension'];
        $fileName = strtolower(str_replace(' ', '-', $userName)) . ".$fileExtension";
        

        if (($filePath === null)) {
            return redirect()->back()->with('error', 'Invalid file!');
        } else {
            $filePath = '\app\\' . str_replace('/', '\\', $filePath);
            if (!file_exists(storage_path($filePath))) {
                return redirect()->back()->with('error', 'File not found!');
            }

            return response()->download(storage_path($filePath), $fileName);
        }
    }

}

?>