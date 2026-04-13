<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuranController extends Controller
{
    // Menampilkan semua surah
    public function index()
    {
        $response = Http::get('https://api.alquran.cloud/v1/surah');
        $surahs = $response->json()['data'];

        return view('quran.index', compact('surahs'));
    }

    // Menampilkan detail surah
    public function show($id)
    {
        $response = Http::get("https://api.alquran.cloud/v1/surah/$id");
        $surah = $response->json()['data'];

        return view('quran.show', compact('surah'));
    }

    public function juz($id)
{
    $edition = 'quran-uthmani';

    $response = Http::get("https://api.alquran.cloud/v1/juz/$id/$edition");

    $juz = $response->json()['data'];

    return view('quran.juz', compact('juz'));
}

}
