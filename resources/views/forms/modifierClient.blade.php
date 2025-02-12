
<form action="{{ route("mettreAJour.list", ['id' => $cl->idclient]) }}" method="post">
    @csrf
    <label for="">nom</label>
    <input type="text" name="nom" id="" value="{{ $cl->nom }}" placeholder="entrer votre nom...">
    <label for="">prenom</label>
    <input type="text" name="prenom" value="{{ $cl->prenom }}" id="" placeholder="entrer votre prenom...">
    <button type="submit">modifier client</button>
</form>
