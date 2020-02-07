<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Listing;
use App\CustomHelpers\Listing\ListingFilters;
use Carbon\Carbon;

class FilterListingTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_filter_listing_ascending()
    {
        factory(Listing::class,10)->create();
        $foundListings = ListingFilters::getListingsByOrder(['sortField'=>'created_at','orderBy' => 'ASC']);
        $retrivedListings = Listing::all();
        $this->assertEquals($foundListings[0]['id'],$retrivedListings[0]['id']);
    }

    public function test_can_filter_listing_descending()
    {
        factory(Listing::class,10)->create();
        $foundListings = ListingFilters::getListingsByOrder(['orderBy' => 'DESC']);
        $retrivedListings = Listing::all();
        $this->assertEquals($foundListings[0]['id'],$retrivedListings[9]['id']);
    }

    public function test_can_filter_listing_date()
    {
        factory(Listing::class)->create(['title'=>'Created today','created_at' => Carbon::today()]);
        factory(Listing::class)->create(['title'=>'Created yesterday','created_at' => Carbon::yesterday()]);
        $foundListings = ListingFilters::getListingsByDate( Carbon::today() );

        $this->assertEquals(count($foundListings),1);
        $this->assertEquals($foundListings['title'],'Created today');
    }

    public function test_can_filter_listing_in_specific_dates()
    {
        factory(Listing::class,2)->create(['title'=>'Created today','created_at' => Carbon::today()]);
        factory(Listing::class,2)->create(['title'=>'Created yesterday','created_at' => Carbon::yesterday()]);
        factory(Listing::class,10)->create(['title'=>'Created yesterday','created_at' => Carbon::tomorrow()]);
        $foundListings = ListingFilters::getListingsBySpecificDate( Carbon::yesterday(), Carbon::today() );

        $this->assertEquals(count($foundListings),4);
    }
}
