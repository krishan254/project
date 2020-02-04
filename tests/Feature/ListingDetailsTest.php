<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Listing;
use App\CustomHelpers\Listing\ListingHelper;

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
}
