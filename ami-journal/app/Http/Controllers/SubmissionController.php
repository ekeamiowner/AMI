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
            'title' => 'required|string|max:255',
            'pdf_file' => 'nullable|file|mimes:pdf',
            'latex_file' => 'nullable|file|mimes:tex',
        ]);
    
        $titleChanged = $request->input('title') !== $article->title;
        $pdfFileUploaded = $request->hasFile('pdf_file');
        $latexFileUploaded = $request->hasFile('latex_file');
    
        if (!$titleChanged && !$pdfFileUploaded && !$latexFileUploaded) {
            return redirect()->back()->with('error', 'No changes detected.');
        }
    
        if ($titleChanged) {
            $article->update(['title' => $request->input('title')]);
        }
    
        if ($pdfFileUploaded) {
            $pdfFile = $request->file('pdf_file');
            $pdfFilename = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs('pdf', $pdfFilename);
    
            $article->update(['source' => $pdfPath, 'status' => 'UPDATED']);
        }
    
        if ($latexFileUploaded) {
            $latexFile = $request->file('latex_file');
            $latexFilename = time() . '_' . $latexFile->getClientOriginalName();
            $latexPath = $latexFile->storeAs('latex', $latexFilename);
    
            $article->update(['latex_path' => $latexPath, 'status' => 'UPDATED']);
        }
    
        return redirect()->route('submissions.index')->with('success', 'Article updated successfully.');
    }
    

}