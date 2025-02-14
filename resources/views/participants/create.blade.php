@extends('layouts.app')

@section('title', 'Create Participant')

@section('content')
    <div>
        <h2>Create a New Participant</h2>
        <form method="POST" action="{{ route('participants.store') }}">
            @csrf

            <div>
                <label for="name">Participant Name</label>
                <input type="text" id="name" name="name" placeholder="Enter competition name" required
                    value="{{ old('name') }}">
            </div>

            <div>
                <label for="email">Email</label>
                <input id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
            </div>

            <div>
                <select name="id_competition" id="id_competition">
                    <option value="">choose competition</option>
                    @foreach ($competitions as $comp)
                        <option value="{{ $comp->id_competition }}">{{ $comp->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit">Save Participant</button>
            </div>
        </form>
    </div>
@endsection
