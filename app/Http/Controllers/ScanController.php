<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ScanController extends Controller
{
    public function scan(Request $request)
    {
        $station_id = $request->qrCodeMessage;

    // Assume that `$station_id` is validated before this point

    try {
        DB::beginTransaction();

        // Update the user's station_id directly in the database
        User::where('id', auth()->id())->update(['station' => $station_id]);
        Auth::user()->station = $station_id;

        DB::commit();
        
        // Success response
        return response()->json(['message' => 'Station ID updated successfully'], 200);
    } catch (\Exception $e) {
        DB::rollback();
        
        // Handle the error, log it, or return an appropriate response
        return response()->json(['error' => $e,], 500);
    }

    }
}
