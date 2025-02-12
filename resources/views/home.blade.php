<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-8">Bonjour dans gestion des ventes</h1>

        <div class="grid grid-cols-2 gap-6">
            <a href="{{ route('categories.list') }}" class="btn">📂 Categories</a>
            <a href="{{ route('produits.list') }}" class="btn">🛍️ Produits</a>
            <a href="{{ route('ventes.list') }}" class="btn">💰 Ventes</a>
            <a href="{{ route('clients.list') }}" class="btn">👤 Clients</a>
            <a href="{{ route('ajouterClient.list') }}" class="btn">👤 ajouter Clients</a>
        </div>
    </div>

    <style>
        .btn {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            border-radius: 10px;
            transition: all 0.3s;
            text-align: center;
        }
        .btn:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>

</body>
</html>
