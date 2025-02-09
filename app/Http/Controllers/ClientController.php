<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller {
    public function AfficherClientInfo() {
        $client_info = Client::all();
        return view("client", ["clients" => $client_info]);
    }
}
