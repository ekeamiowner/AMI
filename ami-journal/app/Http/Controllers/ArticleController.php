<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
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
        $query->where('title', 'like', "%$search%")
              ->orWhere('abstract', 'like', "%$search%");
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

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

  }
    
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