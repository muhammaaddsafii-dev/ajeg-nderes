<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Mode - Ajegnderes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-8">Pilih Mode Sambung Ayat</h1>
        <div class="max-w-md mx-auto">
            <a href="/"
                class="block w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded text-center mb-4">
                Berdasarkan Juz
            </a>
            <a href="/"
                class="block w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded text-center">
                Berdasarkan Surat
            </a>
        </div>

        @foreach ($surahs as $item)
            <p class="arab">{{ $item['name']['short'] }}</p>
            <!-- Sesuaikan dengan struktur data API Anda -->
        @endforeach
    </div>
</body>

</html>
