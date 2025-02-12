<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }

        h3 {
            color: #333;
        }

        .btn-back {
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e3f2fd;
        }
    </style>
</head>

<body>
    <h3>clients lists</h3>
    @if (session('success'))
        <h3 class="alert alert-success">{{ session('success') }}</h3>
    @endif
    <a href="{{ route('homepage') }}" class="btn-back">Back</a>
    <table>
        <thead>
            <tr>
                <th>#id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $cl)
                <tr>
                    <td>{{ $cl->idclient }}</td>
                    <td>{{ $cl->nom }}</td>
                    <td>{{ $cl->prenom }}</td>
                    <td>
                        <a href="{{ route('supprimerClient.list', ['id' => $cl->idclient]) }}"
                            onclick="return confirm('Do you want to delete  ({{ $cl->nom }} {{ $cl->prenom }})?');">
                            Supprimer
                        </a>

                        <a style="margin-left: 40px"
                            href="{{ route('modifierClient.list', ['id' => $cl->idclient]) }}">modifier</a>

                    </td>



                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
