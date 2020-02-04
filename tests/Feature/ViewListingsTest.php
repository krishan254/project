<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Agent;
use App\Listing;
use App\User;

use Tests\TestCase;

class ViewListingsTest extends TestCase
{
    use RefreshDatabase;
    public function test_can_view_listings()
    {
      $user = factory(User::class)->create();
      $listing = factory(Listing::class)->make([
        'title' => 'New Listing',
      ]);
      $agent = $user->agent()->create();
      $agent->listings()->save($listing);
      $this->get('find-a-property')
           ->assertDontSeeText('Error')
           ->assertSeeText('New Listing');
    }

    public function test_can_view_an_agent_listing()
    {
      $user = factory(User::class)->create(['username'=>'kimmnyeri']);
      $listing = factory(Listing::class)->make([
        'title' => 'New Agent Listing',
      ]);
      $agent = $user->agent()->create();
      $agent->listings()->save($listing);
      $this->get('/kimmnyeri')
           ->assertDontSeeText('Error')
           ->assertSee('New Agent Listing');
    }
}
