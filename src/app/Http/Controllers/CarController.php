<?php

namespace App\Http\Controllers;

use App\Helpers\EncryptionHelper; // Assuming this helper exists in your project
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        // Fetch all cars and eager load their season data,
        // including the driver and team for that season.
        $cars = Car::with(['season.driver', 'season.team'])->get();

        // Encrypt the response as per the required format
        $encryptedResponse = EncryptionHelper::encrypt(json_encode($cars));
        
        return response()->json(['data' => $encryptedResponse]);
    }
}
