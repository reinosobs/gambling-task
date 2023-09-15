<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;

    protected $table = 'affiliate_location_data'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'latitude', 'longitude', 'affiliate_id'
    ];

    public function create($affiliate){
        $newAffiliate = new Affiliate;

        $newAffiliate->affiliate_id = $affiliate['affiliate_id'];
        $newAffiliate->name = $affiliate['name'];
        $newAffiliate->latitude = $affiliate['latitude'];
        $newAffiliate->longitude = $affiliate['longitude'];
        
        $newAffiliate->save();

    }

}
