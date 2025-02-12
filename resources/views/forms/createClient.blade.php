
<form action="{{ route("ajouterClient.list") }}" method="post">
    @csrf
    <label for="">nom</label>
    <input type="text" name="nom" id="" placeholder="entrer votre nom...">
    <label for="">prenom</label>
    <input type="text" name="prenom" id="" placeholder="entrer votre prenom...">
    <button type="submit">ajouter client</button>
</form>
