<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Volume;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $dispnum = $request->input('dispnum', '5');
        $selectedOption = $request->input('option', 'volume');
    
        $query = Article::query()->where('state', 'ACCEPTED');
        if ($dispnum == '*') 
        {
            $articles = $query->paginate('*');
        } 
        else 
        {
            $articles = $query->paginate(intval($dispnum));
        }
    
        $volumes = Volume::all();
    
        $selectedVolumeId = $request->input('volume_id', null);
        if ($selectedVolumeId) 
        {
            $selectedVolume = Volume::find($selectedVolumeId);
            $articles = $selectedVolume->articles()->paginate($dispnum);
        } 
        else 
        {
            if ($selectedOption == 'volume') 
            {
                $selectedVolume = Volume::orderBy('id', 'desc')->first();
            } 
            else 
            {
                $selectedVolume = Volume::latest()->first();
                $articles = Article::where('state', 'ACCEPTED')->orderByDesc('updated_at')->take(5)->get();
            }
        }
        
        foreach ($articles as $article) 
        {
            $volumeArticle = $article->volumes->first();
            if ($volumeArticle) 
            {
                $article->from_page = $volumeArticle->pivot->from_page;
                $article->to_page = $volumeArticle->pivot->to_page;
            } 
            else 
            {
                $article->from_page = 'N/A';
                $article->to_page = 'N/A';
            }
        }
        
        return view('pages.welcome.index', compact('articles', 'selectedOption', 'volumes', 'selectedVolume'));
    }
    
}

?>