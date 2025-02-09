<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-5 flex flex-col items-center min-h-screen">
    <div class="w-full max-w-4xl">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold text-gray-800">Ventes List</h3>
            <a href="{{ route('homepage') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors duration-200">
                Back
            </a>
        </div>

        @if ($ventes->isEmpty())
            <p class="text-gray-600 text-center mt-8">No sales records found.</p>
        @else
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th class="px-4 py-3 text-sm font-medium">#ID Vente</th>
                                <th class="px-4 py-3 text-sm font-medium">Quantité</th>
                                <th class="px-4 py-3 text-sm font-medium">Date Vente</th>
                                <th class="px-4 py-3 text-sm font-medium">ID Client</th>
                                <th class="px-4 py-3 text-sm font-medium">ID Produit</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($ventes as $v)
                                <tr class="hover:bg-blue-50 transition-colors duration-200 even:bg-gray-50">
                                    <td class="px-4 py-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $v->idvente }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 text-center">{{ $v->quantite }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $v->datevente }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 text-center">{{ $v->idclient }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 text-center">{{ $v->idproduit }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
</body>
</html>
