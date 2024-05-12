<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class OpenArticleController extends Controller
{
    public function openArticle(Request $request)
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
        $fileName = 'article.' . $fileExtension;
    
        if ($filePath === null) {
            return redirect()->back()->with('error', 'Invalid file!');
        } else {
            $filePath = '\app\\' . str_replace('/', '\\', $filePath);
            if (!file_exists(storage_path($filePath))) {
                return redirect()->back()->with('error', 'File not found!');
            }
    
            return response()->file(storage_path($filePath), ['Content-Disposition' => 'inline']);
        }
    }
}
