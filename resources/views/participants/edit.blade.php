@extends('layouts.app')

@section('title', 'Edit Participant')

@section('content')
    <div>
        <h2>Edit {{ $participant->name }}</h2>
        <form method="POST" action="{{ route('participants.update', ['participant' => $participant->id]) }}">
            @csrf
            @method('PUT')

            <!-- Competition Name -->
            <div>
                <label for="name">Participant Name</label>
                <input type="text" value="{{ $participant->name }}" id="name" name="name" required>
            </div>

            <!-- Description -->
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ $participant->email }}" required>
            </div>

            <div>
                <button type="submit">Edit Competition</button>
            </div>
        </form>
    </div>
@endsection
