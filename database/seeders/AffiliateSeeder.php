<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Affiliate;

class AffiliateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Read the contents of the text file and parse it into an array
        $affiliatesData = file(storage_path('app/affiliates.txt'), FILE_IGNORE_NEW_LINES);
        $affiliates = [];
        foreach ($affiliatesData as $affiliate) {
            $data = json_decode($affiliate, true);
            if ($data) {
                $newAffiliate= new Affiliate();
                $newAffiliate->create($data);
            }
        }
    }
}
