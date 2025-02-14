@extends('layouts.app')

@section('title', 'Participants List')

@section('content')
    <div>
        <div>
            <h1>Participants</h1>
            <a href="{{ route('participants.create') }}">+ Create New Participants</a>
        </div>

        @if ($participants->isEmpty())
            <div>
                <h4>No Participants found.</h4>
            </div>
        @else
            <div>
                <table style="border: 1px solid black; width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="border: 1px solid black;">
                            <th style="border: 1px solid black;">#ID</th>
                            <th style="border: 1px solid black;">Name Particopants</th>
                            <th style="border: 1px solid black;">Email</th>
                            <th style="border: 1px solid black;">Name Competition</th>
                            <th style="border: 1px solid black;">Start Date Competition</th>
                            <th style="border: 1px solid black;">End Date Competition</th>
                            <th style="border: 1px solid black;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participants as $part)
                            <tr style="border: 1px solid black;">
                                <td style="border: 1px solid black;">{{ $part->id }}</td>
                                <td style="border: 1px solid black;">{{ $part->name }}</td>
                                <td style="border: 1px solid #000000;">{{ $part->email }}</td>
                                <td style="border: 1px solid black;">{{ $part->competition->name  }}</td>
                                <td style="border: 1px solid black;">{{ $part->competition->start_date }}</td>
                                <td style="border: 1px solid black;">{{ $part->competition->end_date }}</td>
                                <td style="border: 1px solid black;">
                                    <a href="{{ route('participants.show', $part->id ?? '#') }}">Detail</a>
                                    <a href="{{ route('participants.edit', $part->id ?? '#') }}">Edit</a>
                                    <form action="{{ route('participants.destroy', $part->id ?? '#') }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete {{ $part->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
