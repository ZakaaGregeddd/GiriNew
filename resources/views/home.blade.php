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
                        @if(isset($cuacaHariIni))
                <div class="cuaca-box">
                    <h2>Cuaca di {{ $lokasi }}</h2>
                    <p>Kondisi: {{ $cuacaHariIni }}</p>
                    <p>Suhu: {{ $suhuMin }}°C - {{ $suhuMax }}°C</p>
                </div>
            @elseif(isset($error))
                <p>{{ $error }}</p>
            @endif

        </div>
    </div>
</body>
</html>