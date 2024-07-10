<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class MobileLegendsController extends Controller
{
    public function getPlayerInfo(Request $request)
    {
        dd($request->all());
        Log::info('getPlayerInfo called');

        // Mendapatkan id dan zone dari request
        $id = $request->input('id');
        $zone = $request->input('zone');

        Log::info('Received ID: ' . $id . ' Zone: ' . $zone);

        // Gantikan PLAYER_ID dan ZONE_ID dengan nilai aktual
        $url = str_replace(['PLAYER_ID', 'ZONE_ID'], [$id, $zone], env('EXTERNAL_API_ENDPOINT'));

        try {
            // Mengirimkan permintaan GET
            $response = Http::get($url);

            // Mendapatkan body response dan mengdecode menjadi array
            $data = json_decode($response->getBody()->getContents(), true);
            Log::info('Response Data: ', $data);

            // Mengembalikan response dalam format JSON
            return response()->json([
                'success' => true,
                'game' => 'Mobile Legends: Bang Bang',
                'id' => (int) $id,
                'zoneId' => (int) $zone,
                'name' => $data['confirmationFields']['username'] ?? 'Unknown',
            ]);
        } catch (\Exception $e) {
            // Mencatat error
            Log::error('Failed to fetch player info: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch player info',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}