@extends('layouts.app')

@section('title', 'Show Competition')

@section('content')
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="card-title text-center text-blue-600 mb-4">Competition Details</h2>
            <ul class="list-none border border-gray-300 rounded-md p-4">
                <li class="py-2"><strong>ID:</strong> {{ $competition->id_competition }}</li>
                <li class="py-2"><strong>Name:</strong> {{ $competition->name }}</li>
                <li class="py-2"><strong>Description:</strong> {{ $competition->description }}</li>
                <li class="py-2"><strong>Start Date:</strong> {{ $competition->start_date }}</li>
                <li class="py-2"><strong>End Date:</strong> {{ $competition->end_date }}</li>
            </ul>
            <a href="{{ route('competitions.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded mt-3">
                Back to List
            </a>
        </div>
    </div>
@endsection
