<?php 

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller 
{
    
  /**
   * Display a listing of the resource.
   *
   * @return Response
   * @param  Request
   */
  public function index(Request $request)
  {
      $search = $request->input('search');
      $query = Article::query();
      if ($search) {
          $query->where(function($q) use ($search) {
              $q->where('title', 'like', "%$search%")
                  ->orWhere('abstract', 'like', "%$search%");
          })
          ->where('state', 'ACCEPTED');
      } else {
          $query->where('state', 'ACCEPTED');
      }
  
      $articles = $query->paginate(10);
  
      return view('pages.articles.index', ['articles' => $articles , 'search' => $search]);
  }
  

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
    public function create()
    {
        $types = Type::where('active', 1)->get();
        $recommended_editors = User::where('accepted_reviewer', 1)->get();
        return view('pages.articles.create', ['types' => $types], ['recommended_editors' => $recommended_editors]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'abstract' => 'required',
            'type_id' => 'required|exists:types,id,active,1',
            'upload' => 'required|file|mimes:pdf|max:102400',
            'upload2' => 'required|file|mimes:tex|max:102400', 
            'recommended_editor_id' => 'nullable',
        ]);

        $user_id = Auth::id();
        $editor_id = null;
        $recommended_editor_id = $request->input('recommended_editor_id');
        $title = $request->input('title');
        $abstract = $request->input('abstract');
        $state = 'SUBMITTED';
        $page_count = null;
        $note = $request->input('note');
        $language = 'en';
        $doi = null;
        $source = $request->file('upload')->store('pdf');
        $type_id = $request->input('type_id');
        $latex_path = $request->file('upload2')->store('latex');

        $article = Article::create([
            'user_id' => $user_id,
            'editor_id' => $editor_id,
            'recommended_editor_id' => $recommended_editor_id,
            'title' => $title,
            'abstract' => $abstract,
            'state' => $state,
            'page_count' => $page_count,
            'note' => $note,
            'language' => $language,
            'doi' => $doi,
            'source' => $source,
            'type_id' => $type_id,
            'latex_path' => $latex_path,
        ]);

        if ($article) {
            Session::flash('success', 'The article has been successfully uploaded, the editors will review it soon');
        } else {
            Session::flash('error', 'An error occurred during upload');
        }
        
        return redirect()->route('articles.index');
    }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
    
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response 
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }



  
}



?>