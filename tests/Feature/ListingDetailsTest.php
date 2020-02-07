<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Listing;
use App\CustomHelpers\Listing\ListingHelper;
use Carbon\Carbon;

class ListingDetailsTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_a_listing()
    {
      $listing = factory(Listing::class)->create(['title'=>'title']);
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['title'],$listing->title);
      $this->assertEquals('title',$foundListing['title']);
    }

    public function test_can_update_a_listing_title()
    {
      $listing = factory(Listing::class)->create(['title'=>'title']);
      ListingHelper::updateTitle( $listing->id, 'new title' );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['title'],'new title');
    }

    public function test_can_update_a_listing_name()
    {
      $listing = factory(Listing::class)->create(['name'=>'name']);
      ListingHelper::updateName( $listing->id, 'new name' );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['name'],'new name');
    }

    public function test_can_update_a_listing_type()
    {
      $listing = factory(Listing::class)->create(['type'=>1]);
      ListingHelper::updateType( $listing->id, 2 );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['type'],2);
    }

    public function test_can_update_a_listing_units()
    {
      $listing = factory(Listing::class)->create(['units'=>10]);
      ListingHelper::updateUnits( $listing->id, 20 );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['units'],20);
    }

    public function test_can_update_a_listing_parking_spaces()
    {
      $listing = factory(Listing::class)->create(['parkingSpaces'=>10]);
      ListingHelper::updateParkingSpaces( $listing->id, 20 );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['parkingSpaces'],20);
    }

    public function test_can_update_a_listing_parking_spaces_per_unit()
    {
      $listing = factory(Listing::class)->create(['parkingSpacesPerUnit'=>10]);
      ListingHelper::updateParkingSpacesPerUnit( $listing->id, 20 );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['parkingSpacesPerUnit'],20);
    }

    public function test_can_update_a_listing_start_date()
    {
      $listing = factory(Listing::class)->create(['startDate'=>Carbon::today()]);
      ListingHelper::updateStartDate( $listing->id, Carbon::yesterday() );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['startDate'],Carbon::yesterday());
    }

    public function test_can_update_a_listing_end_date()
    {
      $listing = factory(Listing::class)->create(['endDate'=>Carbon::today()]);
      ListingHelper::updateEndDate( $listing->id, Carbon::yesterday() );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['endDate'],Carbon::yesterday());
    }

    public function test_can_update_a_listing_address()
    {
      $listing = factory(Listing::class)->create(['address'=>'P.o box 86 Njoro']);
      ListingHelper::updateAddress( $listing->id, 'Shibuya ku' );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['address'],'Shibuya ku');
    }

    public function test_can_update_a_listing_physical_address()
    {
      $listing = factory(Listing::class)->create(['physicalAddress'=>'Nairobi utawala']);
      ListingHelper::updatePhysicalAddress( $listing->id, 'Nakuru langa langa' );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['physicalAddress'],'Nakuru langa langa');
    }

    public function test_can_update_a_listing_construction_date()
    {
      $listing = factory(Listing::class)->create(['constructionDate'=>Carbon::yesterday()]);
      ListingHelper::updateConstructionDate( $listing->id, Carbon::today() );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['constructionDate'],Carbon::today());
    }

    public function test_can_update_a_listing_renovation_date()
    {
      $listing = factory(Listing::class)->create(['renovationDate'=>Carbon::yesterday()]);
      ListingHelper::updateRenovationDate( $listing->id, Carbon::today() );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['renovationDate'],Carbon::today());
    }

    public function test_can_update_a_listing_pin_location()
    {
      $listing = factory(Listing::class)->create(['pinLocation'=>'terert56546kgh567576546456849yurg4658']);
      ListingHelper::updatePinLocation( $listing->id, '343546terert56546kgh567576546456849yurg4658' );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['pinLocation'],'343546terert56546kgh567576546456849yurg4658');
    }

    public function test_can_update_a_listing_landmark()
    {
      $listing = factory(Listing::class)->create(['landMark'=>'Kicc']);
      ListingHelper::updateLandMark( $listing->id, 'Times towers' );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['landMark'],'Times towers');
    }

    public function test_can_update_a_listing_occupation_cert_no()
    {
      $listing = factory(Listing::class)->create(['occupationCertNo'=>'841215']);
      ListingHelper::updateOccupationCertNo( $listing->id, '12345' );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['occupationCertNo'],'12345');
    }

    public function test_can_update_a_listing_occupation_cert_img()
    {
      $listing = factory(Listing::class)->create(['occupationCertImg'=>'https://carbon.nesbot.com/docs/']);
      ListingHelper::updateOccupationCertImg( $listing->id, 'https://carbon.nesbot.com/docs/image' );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['occupationCertImg'],'https://carbon.nesbot.com/docs/image');
    }

    public function test_can_update_a_listing_plot_no()
    {
      $listing = factory(Listing::class)->create(['plotNo'=>'154fdr']);
      ListingHelper::updatePlotNo( $listing->id, '3654ert' );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['plotNo'],'3654ert');
    }

    public function test_can_update_a_listing_building_material()
    {
      $listing = factory(Listing::class)->create(['buildingMaterial'=>'wood']);
      ListingHelper::updateBuildingMaterial( $listing->id, 'bricks' );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['buildingMaterial'],'bricks');
    }

    public function test_can_update_a_listing_furnished_record()
    {
      $listing = factory(Listing::class)->create(['furnished'=>0]);
      ListingHelper::updateFurnished( $listing->id, 1 );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['furnished'],1);
    }

    public function test_can_update_a_listing_modern_furnishing_record()
    {
      $listing = factory(Listing::class)->create(['modernFinishing'=>0]);
      ListingHelper::updateModernFinishing( $listing->id, 1 );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['modernFinishing'],1);
    }

    public function test_can_update_a_listing_advertising_cost()
    {
      $listing = factory(Listing::class)->create(['advertisingCost'=>100]);
      ListingHelper::updateAdvertisingCost( $listing->id, 1000 );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['advertisingCost'],1000);
    }

    public function test_can_update_a_listing_discount()
    {
      $listing = factory(Listing::class)->create(['discount'=>100]);
      ListingHelper::updateDiscount( $listing->id, 1000 );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['discount'],1000);
    }

    public function test_can_update_a_listing_payable_amount()
    {
      $listing = factory(Listing::class)->create(['payable'=>100]);
      ListingHelper::updatePayable( $listing->id, 1000 );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['payable'],1000);
    }

    public function test_can_update_a_listing_received_amount()
    {
      $listing = factory(Listing::class)->create(['received'=>100]);
      ListingHelper::updateReceived( $listing->id, 1000 );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['received'],1000);
    }

    public function test_can_update_a_listing_pending_amount()
    {
      $listing = factory(Listing::class)->create(['pending'=>100]);
      ListingHelper::updatePending( $listing->id, 1000 );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['pending'],1000);
    }

    public function test_can_update_a_listing_percentage_discount()
    {
      $listing = factory(Listing::class)->create(['percentageDiscount'=>'10%']);
      ListingHelper::updatePercentageDiscount( $listing->id, '50%' );
      $foundListing = $this->get('/api/get-a-listing/'.$listing->id.'');
      $this->assertEquals($foundListing['percentageDiscount'],'50%');
    }
}
