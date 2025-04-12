<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class CuacaController extends Controller
{


    public function index()
    {
        $kodeWilayah = '3273'; // contoh: Bandung
        $url = "https://api.bmkg.go.id/publik/prakiraan-cuaca?adm4={$kodeWilayah}";

        try {
            $response = Http::timeout(10)->get($url);

            if ($response->successful()) {
                $data = $response->json();

                // Asumsikan struktur JSON-nya begini, sesuaikan kalau beda
                $cuacaHariIni = $data['data'][0]['weather']; 
                $suhuMin = $data['data'][0]['temperature_min'];
                $suhuMax = $data['data'][0]['temperature_max'];
                $lokasi = $data['data'][0]['location_name'];

                return view('home', compact('cuacaHariIni', 'suhuMin', 'suhuMax', 'lokasi'));
            } else {
                return view('home', ['error' => 'Gagal ambil data dari API BMKG.']);
            }
        } catch (\Exception $e) {
            return view('home', ['error' => 'Terjadi kesalahan saat menghubungi API.']);
        }
    }

}
