<?php

namespace App\Http\Controllers;

use App\Helpers\EncryptionHelper; // Assuming this helper exists in your project
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        // Fetch all drivers and eager load their season data,
        // including the team and car for each season.
        $drivers = Driver::with(['seasons.team', 'seasons.car'])->get();

        // Encrypt the response as per the required format
        $encryptedResponse = EncryptionHelper::encrypt(json_encode($drivers));
        
        return response()->json(['data' => $encryptedResponse]);
    }
}
