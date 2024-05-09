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
        $selectedOption = $request->input('option', 'latest'); // Alapértelmezett opció "latest"
        
        $query = Article::query()->where('state', 'ACCEPTED');
        if ($dispnum == '*') {
            $articles = $query->paginate('*');
        } else {
            $articles = $query->paginate(intval($dispnum));
        }
        
        $volumes = Volume::all();
        
        $selectedVolumeId = $request->input('volume_id', null);
        if ($selectedVolumeId) {
            $selectedVolume = Volume::find($selectedVolumeId);
            $articles = $selectedVolume->articles()->paginate($dispnum);
        } else {
            $selectedVolume = Volume::latest()->first(); // Legnagyobb id-jú kötet kiválasztása
        }
    
        return view('pages.welcome.index', compact('articles', 'selectedOption', 'volumes', 'selectedVolume'));
    }    
    
}

?>
