{{-- resources/views/pages/volumes/create.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Volume</h1>
    <form action="{{ route('volumes.store') }}" method="POST">
        @csrf {{-- CSRF token biztosítása a biztonságos űrlap beküldéshez --}}
        
        <div class="form-group">
            <label for="title">Volume Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter volume title" required>
        </div>
        
        {{-- További mezők hozzáadása szükség szerint --}}
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection