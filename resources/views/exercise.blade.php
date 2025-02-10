<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
</head>
<body>

    <ul>
        @foreach ($data as $item)
        <li>
            Nama: {{ $item['nama'] }} <br>
            Asal Daerah: {{ $item['asal_daerah'] }} <br>
            Prodi: {{ $item['prodi'] }} <br>
            @if ($item['prodi'] === 'Sistem Informasi')
            Baju: Saya Menggunakan Baju bewarna Abu-abu
            @elseif ($item['prodi'] === 'Informatika')
            Baju: Saya Menggunakan Baju bewarna Mewah    
            @else
            Baju: Prodi tidak tersedia
            @endif <br>
            Angkatan: {{ $item['angkatan'] }} <br>
            Teman: @foreach ($item['teman'] as $teman)
            {{ $teman }}
            @endforeach
        </li>
        <br>
        @endforeach
    </ul>
    
</body>
</html>