@extends('layouts.app')

@section('title', 'Edit Competition')

@section('content')
    <div>
        <h2>Edit {{ $competition->name }}</h2>
        <form method="POST" action="{{ route('competitions.update', ['competition' => $competition->id_competition]) }}">
            @csrf
            @method('PUT')

            <!-- Competition Name -->
            <div>
                <label for="name">Competition Name</label>
                <input type="text" value="{{ $competition->name }}" id="name" name="name" required>
            </div>

            <!-- Description -->
            <div>
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="3" required>{{ $competition->description }}</textarea>
            </div>

            <!-- Start Date -->
            <div>
                <label for="start_date">Start Date</label>
                <input type="date" id="start_date" name="start_date" required value="{{ $competition->start_date }}">
            </div>

            <!-- End Date -->
            <div>
                <label for="end_date">End Date</label>
                <input type="date" id="end_date" name="end_date" required value="{{ $competition->end_date }}">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit">Edit Competition</button>
            </div>
        </form>
    </div>
@endsection
