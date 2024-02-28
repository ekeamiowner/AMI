<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Article;

class SubmissionController extends Controller
{

    public function create()
    {
        $types = Type::where('active', 1)->get();
        return view('pages.submissions.create', ['types' => $types]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'abstract' => 'required',
            'type_id' => 'required|exists:types,id,active,1',
            'upload' => 'file|mimes:pdf|max:2048',
            'upload2' => 'file|mimes:latex|max:2048',
        ]);

        $user_id = auth()->id();
        $editor_id = null;
        $title = $request->input('title');
        $abstract = $request->input('abstract');
        $state = 'SUBMITTED';
        $page_count = null;
        $note = $request->input('note');
        $language = 'en';
        $doi = null;
        $source = $request->file('upload') ? $request->file('upload')->store('pdf') : null;
        $type_id = $request->input('type_id');
        $latex_path = $request->file('upload2') ? $request->file('upload2')->store('latex') : null;

        $article = Article::create([
            'user_id' => $user_id,
            'editor_id' => $editor_id,
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

        return redirect()->route('articles.index');
    }
}
