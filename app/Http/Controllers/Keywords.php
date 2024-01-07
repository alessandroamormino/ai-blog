<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Keywords extends Controller
{
    public function getKeywords(){
		$apiKey = config("app.serpapi_key");
		$geo = "IT";
		$hl = "it";
		$frequency = "realtime";
		$cat = "b";

		$response = Http::get("https://serpapi.com/search?engine=google_trends_trending_now&geo={$geo}&hl={$hl}&frequency={$frequency}&cat={$cat}&api_key={$apiKey}");

		if ($response->successful()) {
			$data = $response->json();
			$searches = [];
			for($i = 0; $i < 5; $i++){
				$searches[] = $data['realtime_searches'][$i];
			};

			return response()->json($searches);
		} else {
			return response()->json(['error' => 'Errore nella chiamata API'], $response->status());
		}
	}
}
