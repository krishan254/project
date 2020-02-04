<?php
namespace App\CustomHelpers\Listing;
use App\Listing;

class ListingHelper
{

  /**
   * Update a listing title.
   *
   * @param  $id and $title
   * @return boolean true / false
   */
   public static function updateTitle($id, $title )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'title' => $title ]) )
      return true;
     else
      return false;
   }

}
