<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Http\Controllers\AffiliateController;
use App\Models\Affiliate;

class AffiliateControllerTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A test which check if all the affiliates from the affiliate.txt are in the database after migration
     */
    public function test_that_can_return_total_affiliates_count() {
        $this->artisan('db:seed', ['--class' => 'AffiliateSeeder']);

        // Assert that the affiliates table has been seeded
        $this->assertDatabaseCount('affiliate_location_data', 32);
    }

    /** 
     * Unit test which check 2 affiliate locations and get which affiliate is within 100km 
     * and not within 100km of Dublin office
     */
    public function test_that__can_return_affiliates_within_100km_of_dublin()
    {
        // Create sample affiliates within and outside 100km of Dublin
        $dublinLatitude = 53.3340285;
        $dublinLongitude = -6.2535495;

        $within100KmAffiliate = Affiliate::factory()->create([
            'latitude' => $dublinLatitude + 0.5,
            'longitude' => $dublinLongitude + 0.5,
        ]);

        $outside100KmAffiliate = Affiliate::factory()->create([
            'latitude' => $dublinLatitude + 2.0,
            'longitude' => $dublinLongitude + 2.0,
        ]);

        // Make a GET request to your controller's index method
        $response = $this->get('/affiliates');

        // Assert that the response contains the expected affiliates within 100km
        $response->assertStatus(200)
            ->assertSee($within100KmAffiliate->name)
            ->assertDontSee($outside100KmAffiliate->name);
    }

}
