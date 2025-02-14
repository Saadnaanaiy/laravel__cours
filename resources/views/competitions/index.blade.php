@extends('layouts.app')

@section('title', 'Competitions List')

@section('content')
    <div>
        <div>
            <h1>Competitions</h1>
            <a href="{{ route('competitions.create') }}">+ Create New Competition</a>
        </div>

        @if ($competitions->isEmpty())
            <div>
                <h4>No competitions found.</h4>
            </div>
        @else
            <div>
                <table style="border: 1px solid black; width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="border: 1px solid black;">
                            <th style="border: 1px solid black;">#ID</th>
                            <th style="border: 1px solid black;">Name</th>
                            <th style="border: 1px solid black;">Description</th>
                            <th style="border: 1px solid black;">Start Date</th>
                            <th style="border: 1px solid black;">End Date</th>
                            <th style="border: 1px solid black;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($competitions as $competition)
                            <tr style="border: 1px solid black;">
                                <td style="border: 1px solid black;">{{ $competition->id_competition }}</td>
                                <td style="border: 1px solid black;">{{ $competition->name }}</td>
                                <td style="border: 1px solid black;">
                                    {{ \Illuminate\Support\Str::limit($competition->description, 50) }}</td>
                                <td style="border: 1px solid black;">{{ $competition->start_date }}</td>
                                <td style="border: 1px solid black;">{{ $competition->end_date }}</td>
                                <td style="border: 1px solid black;">
                                    <a href="{{ route('competitions.show', $competition->id_competition) }}">Detail</a>
                                    <a href="{{ route('competitions.edit', $competition->id_competition) }}">Edit</a>
                                    <form action="{{ route('competitions.destroy', $competition->id_competition) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete {{ $competition->name }}?');">
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
