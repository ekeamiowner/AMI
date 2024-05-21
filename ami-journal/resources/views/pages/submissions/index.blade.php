<!-- resources/views/submissions/index.blade.php -->
@extends('layouts.main')

@section('content')
<div class="container mx-auto">
    <h1 class="text-4xl font-bold mb-4">My Submissions</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="bg-gray-100 border px-4 py-2">Title</th>
                <th class="bg-gray-100 border px-4 py-2">State</th>
                <th class="bg-gray-100 border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td class="border px-4 py-2">{{ $article->title }}</td>
                    <td class="border px-4 py-2">{{ $article->state }}</td>
                    <td class="border px-4 py-2">
                        @if ($article->state == 'UNDER_REVIEW')
                            <a href="{{ route('submissions.edit', $article) }}" class="btn btn-primary">Update</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $articles->links() }}
    </div>
</div>
@endsection
