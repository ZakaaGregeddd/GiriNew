<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        // Ganti {kode_wilayah_tingkat_iv} dengan kode wilayah Gunung Bromo
        $kodeWilayah = '350717'; // Contoh kode wilayah untuk Gunung Bromo
        $url = "https://api.bmkg.go.id/publik/prakiraan-cuaca?adm4={$kodeWilayah}";

        // Panggil API menggunakan HTTP Client Laravel
        $response = Http::get($url);

        // Periksa apakah respons berhasil
        if ($response->successful()) {
            $weatherData = $response->json();
        } else {
            $weatherData = null; // Jika gagal, set null
        }

        // Kirim data ke view
        return view('home', ['weather' => $weatherData]);
    }
}