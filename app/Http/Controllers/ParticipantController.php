<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Competition;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Participant::with('competition')
            ->whereHas('competition')
            ->get();
        return view('participants.index', compact('participants'));
    }

    public function create()
    {
        $participants = Participant::all();
        $competitions = Competition::all();
        return view('participants.create', compact('participants', "competitions"));
    }

    public function show(int $id_participant) {
        $participant = Participant::findOrFail($id_participant);
        return view("participants.show", compact("participant"));
    }

    public function store(Request $request)
    {
        Participant::create($request->all());
        return redirect()->route('participants.index');
    }

    public function edit(Participant $participant)
    {
        $competitions = Competition::all();
        return view('participants.edit', compact('participant', 'competitions'));
    }

    public function update(Request $request, Participant $participant)
    {
        $participant->update($request->all());
        return redirect()->route('participants.index');
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();
        return redirect()->route('participants.index');
    }
}
