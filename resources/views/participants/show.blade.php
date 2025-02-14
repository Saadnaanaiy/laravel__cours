@extends('layouts.app')

@section('title', 'Show Participant')

@section('content')
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="card-title text-center text-blue-600 mb-4">Participant Details</h2>
            <ul class="list-none border border-gray-300 rounded-md p-4">
                <li class="py-2"><strong>ID:</strong> {{ $participant->id }}</li>
                <li class="py-2"><strong>Name:</strong> {{ $participant->name }}</li>
                <li class="py-2"><strong>Description:</strong> {{ $participant->email }}</li>
                <li class="py-2"><strong>Competition Name:</strong> {{ $participant->competition->name }}</li>
                <li class="py-2"><strong>Competition description:</strong> {{ $participant->competition->description }}
                </li>
            </ul>
            <a href="{{ route('participants.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded mt-3">
                Back to List
            </a>
        </div>
    </div>
@endsection
