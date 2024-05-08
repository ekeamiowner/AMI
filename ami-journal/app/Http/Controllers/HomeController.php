<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $dispnum = $request->input('dispnum','5');
        /*
        if (!$dispnum){
            $dispnum=Session::get('disp');
        }
        */
        $query = Article::query();
        $query = Article::query()->where('state', 'ACCEPTED');
        
        
        if($dispnum=='*'){
        $articles = $query->paginate('*');
        }
        else
        {
            $articles = $query->paginate(intval($dispnum));
        }
        return view('pages.welcome.index', compact('articles'));
    }
}

?>
