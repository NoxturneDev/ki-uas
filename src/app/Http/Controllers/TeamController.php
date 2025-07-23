<?php

namespace App\Http\Controllers;

use App\Helpers\EncryptionHelper; // Assuming this helper exists in your project
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        // Fetch all teams and eager load their season data,
        // including the driver and car for each season.
        $teams = Team::with(['seasons.driver', 'seasons.car'])->get();

        // Encrypt the response as per the required format
        $encryptedResponse = EncryptionHelper::encrypt(json_encode($teams));
        
        return response()->json(['data' => $encryptedResponse]);
    }
}
