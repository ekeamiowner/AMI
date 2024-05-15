@extends('layouts.main')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Created At</th>
                            <th class="px-4 py-2">Article ID</th>
                            <th class="px-4 py-2">Article Title</th>
                            <th class="px-4 py-2">Article Author</th>
                            <th class="px-4 py-2">Reviewer</th>
                            <th class="px-4 py-2">Content</th>
                            <th class="px-4 py-2">State</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviews->sortByDesc('created_at') as $review)
                        <tr>
                        <td class="border px-4 py-2">{{ $review->created_at }}</td>
                        <td class="border px-4 py-2">{{ $review->revision->article->id }}</td>
                        <td class="border px-4 py-2">{{ $review->revision->article->title }}</td>
                        <td class="border px-4 py-2">{{ $review->revision->article->user->name }}</td>
                        <td class="border px-4 py-2">{{ $review->user->name }}</td>
                        <td class="border px-4 py-2">{{ $review->content }}</td>
                        <td class="border px-4 py-2">{{ $review->state }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    {{ $reviews->links() }}
</div>
@endsection
