<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affiliate;

class AffiliateController extends Controller
{
    public function index()
    {
        // Load affiliates from the text file
        $affiliates = Affiliate::all();

        // Output the results
        return view('affiliates.index', [
            'affiliates' => $affiliates ,
            'button' => 'Filter Affiliates'
        ]);
    }

    public function closeAffiliates()
    {
        // Load affiliates from the text file
        $affiliates = Affiliate::all();

        // Calculate distances and filter within 100km
        $filteredAffiliates = $this->filterAffiliatesWithin100Km($affiliates);

        // Output the results
        return view('affiliates.index', [
            'affiliates' => $filteredAffiliates,
            'button' => 'All Affiliates'
        ]);
    }


    private function filterAffiliatesWithin100Km($affiliates)
    {
        // Coordinates of Dublin office
        $dublinLatitude = 53.3340285;
        $dublinLongitude = -6.2535495;

        return $affiliates->filter(function ($affiliate) use ($dublinLatitude, $dublinLongitude) {
            $earthRadius = 6371; // Radius of the Earth in km
            $lat1 = deg2rad($dublinLatitude);
            $lon1 = deg2rad($dublinLongitude);
            $lat2 = deg2rad($affiliate->latitude);
            $lon2 = deg2rad($affiliate->longitude);

            $dLat = $lat2 - $lat1;
            $dLon = $lon2 - $lon1;

            $a = sin($dLat / 2) * sin($dLat / 2) + cos($lat1) * cos($lat2) * sin($dLon / 2) * sin($dLon / 2);
            $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

            $distance = $earthRadius * $c;

            return $distance <= 100;
        });
    }

}
