<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class SubmissionController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $articles = Article::where('user_id', $user->id)->paginate(10);

        return view('pages.submissions.index', compact('articles'));
    }

    public function edit(Article $article)
    {
        //$this->authorize('update', $article);

        return view('pages.submissions.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,tex',
        ]);
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            
            $directory = $extension == 'pdf' ? 'pdf' : 'latex';
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs($directory, $filename);
    
            if ($extension == 'pdf') {
                $article->update(['source' => $path, 'status' => 'UPDATED']);
            } elseif ($extension == 'tex') {
                $article->update(['latex_path' => $path, 'status' => 'UPDATED']);
            }
        }
    

        return redirect()->route('submissions.index')->with('success', 'Article updated successfully.');
    }

}