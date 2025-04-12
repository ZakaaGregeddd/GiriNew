<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giri</title>
    <link rel="stylesheet" href="css/homeStyle.css">
</head>
<body>
    <div class="parent">
        <div class="upSect">
            <div class="logo">
                <a href="{{ url('/home') }}">
                    <img src="img/Giri.png" alt="Logo">
                </a>
            </div>
        </div>

        <div class="downSect">
            @if(isset($weather))
                <h2>Cuaca Gunung Bromo</h2>
                <p><strong>Waktu Lokal:</strong> {{ $weather['local_datetime'] ?? 'N/A' }}</p>
                <p><strong>Suhu:</strong> {{ $weather['t'] ?? 'N/A' }}°C</p>
                <p><strong>Kelembapan:</strong> {{ $weather['hu'] ?? 'N/A' }}%</p>
                <p><strong>Kondisi Cuaca:</strong> {{ $weather['weather_desc'] ?? 'N/A' }}</p>
                <p><strong>Kecepatan Angin:</strong> {{ $weather['ws'] ?? 'N/A' }} km/jam</p>
                <p><strong>Arah Angin:</strong> {{ $weather['wd'] ?? 'N/A' }}</p>
                <p><strong>Tutupan Awan:</strong> {{ $weather['tcc'] ?? 'N/A' }}%</p>
                <p><strong>Jarak Pandang:</strong> {{ $weather['vs_text'] ?? 'N/A' }} km</p>
            @else
                <p>Gagal mengambil data cuaca. Silakan coba lagi nanti.</p>
            @endif
        </div>
    </div>
</body>
</html>