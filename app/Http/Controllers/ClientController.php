<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function AfficherClientInfo()
    {
        $client_info = Client::all();
        return view("client", ["clients" => $client_info]);
    }

    public function ajouter(Request $request)
    {
        // dd($request->all());
        Client::create($request->all());
        return redirect()->route("clients.list")->with("success", "client ajouter avec sucesss!");
    }

    public function supprimer(int $idClient)
    {
        $client_Supprimer = Client::find($idClient);
        $client_Supprimer->delete();
        return redirect()->route("clients.list")->with("success", "client supprimer avec success!",);
    }

    public function modifier(int $idClient)
    {
        $cl = Client::findOrFail($idClient);
        return view("forms.modifierClient", compact("cl"));
    }

    public function mettreAJour(Request $request, int $idClient) {
        $client_modif = Client::findOrFail($idClient);
        $client_modif->update($request->all());
        return redirect()->route("clients.list")->with("success", "client modifier avec success!",);
    }
}
