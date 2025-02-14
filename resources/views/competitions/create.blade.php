@extends('layouts.app')

@section('title', 'Create Competition')

@section('content')
    <div>
        <h2>Create a New Competition</h2>
        <form method="POST" action="{{ route('competitions.store') }}">
            @csrf

            <!-- Competition Name -->
            <div>
                <label for="name">Competition Name</label>
                <input type="text" id="name" name="name" placeholder="Enter competition name" required
                    value="{{ old('name') }}">
            </div>

            <!-- Description -->
            <div>
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="3" placeholder="Enter competition details">{{ old('description') }}</textarea>
            </div>

            <!-- Start Date -->
            <div>
                <label for="start_date">Start Date</label>
                <input type="date" id="start_date" name="start_date" required value="{{ old('start_date') }}">
            </div>

            <!-- End Date -->
            <div>
                <label for="end_date">End Date</label>
                <input type="date" id="end_date" name="end_date" required value="{{ old('end_date') }}">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit">Save Competition</button>
            </div>
        </form>
    </div>
@endsection
