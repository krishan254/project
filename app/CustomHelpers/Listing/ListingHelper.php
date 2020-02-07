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
   /**
   * Update a listing Name.
   *
   * @param  $id and $name
   * @return boolean true / false
   */
   public static function updateName($id, $name )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'name' => $name ]) )
      return true;
     else
      return false;
   }
     /**
   * Update a listings Type.
   *
   * @param  $id and $Type
   * @return boolean true / false
   */
   public static function updateType($id, $type )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'type' => $type ]) )
      return true;
     else
      return false;
   }
  /**
   * Update a listings Units.
   *
   * @param  $id and $units
   * @return boolean true / false
   */
   public static function updateUnits($id, $units )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'units' => $units ]) )
      return true;
     else
      return false;
   }

     /**
   * Update a listings parkingSpaces.
   *
   * @param  $id and $parkingSpaces
   * @return boolean true / false
   */
   public static function updateParkingSpaces($id, $parkingSpaces )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'parkingSpaces' => $parkingSpaces ]) )
      return true;
     else
      return false;
   }
        /**
   * Update a listings parkingSpacesPerUnit.
   *
   * @param  $id and $parkingSpacesPerUnit
   * @return boolean true / false
   */
   public static function updateParkingSpacesPerUnit($id, $parkingSpacesPerUnit )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'parkingSpacesPerUnit' => $parkingSpacesPerUnit ]) )
      return true;
     else
      return false;
   }
        /**
   * Update a listings startDate.
   *
   * @param  $id and $startDate
   * @return boolean true / false
   */
   public static function updateStartDate($id, $startDate )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'startDate' => $startDate ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings EndDate.
   *
   * @param  $id and $endDate
   * @return boolean true / false
   */
   public static function updateEndDate($id, $endDate )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'endDate' => $endDate ]) )
      return true;
     else
      return false;
   }
 /**
   * Update a listings Address.
   *
   * @param  $id and $address
   * @return boolean true / false
   */
   public static function updateAddress($id, $address )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'address' => $address ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings PhysicalAddress.
   *
   * @param  $id and $physicalAddress
   * @return boolean true / false
   */
   public static function updatePhysicalAddress($id, $physicalAddress )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'physicalAddress' => $physicalAddress ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings ConstructionDate.
   *
   * @param  $id and $constructionDate
   * @return boolean true / false
   */
   public static function updateConstructionDate($id, $constructionDate )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'constructionDate' => $constructionDate ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings RenovationDate.
   *
   * @param  $id and $renovationDate
   * @return boolean true / false
   */
   public static function updateRenovationDate($id, $renovationDate )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'renovationDate' => $renovationDate ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings pinLocation.
   *
   * @param  $id and $pinLocation
   * @return boolean true / false
   */
   public static function updatePinLocation($id, $pinLocation )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'pinLocation' => $pinLocation ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings landMark.
   *
   * @param  $id and $landMark
   * @return boolean true / false
   */
   public static function updateLandMark($id, $landMark )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'landMark' => $landMark ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings OccupationCertNo.
   *
   * @param  $id and $occupationCertNo
   * @return boolean true / false
   */
   public static function updateOccupationCertNo($id, $occupationCertNo )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'occupationCertNo' => $occupationCertNo ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings OccupationCertImg.
   *
   * @param  $id and $occupationCertImg
   * @return boolean true / false
   */
   public static function updateOccupationCertImg($id, $occupationCertImg )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'occupationCertImg' => $occupationCertImg ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings PlotNo.
   *
   * @param  $id and $plotNo
   * @return boolean true / false
   */
   public static function updatePlotNo($id, $plotNo )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'plotNo' => $plotNo ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings BuildingMaterial.
   *
   * @param  $id and $buildingMaterial
   * @return boolean true / false
   */
   public static function updateBuildingMaterial($id, $buildingMaterial )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'buildingMaterial' => $buildingMaterial ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings furnished.
   *
   * @param  $id and $furnished
   * @return boolean true / false
   */
   public static function updateFurnished($id, $furnished )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'furnished' => $furnished ]) )
      return true;
     else
      return false;
   }
           /**
   * Update a listings ModernFinishinge.
   *
   * @param  $id and $modernFinishing
   * @return boolean true / false
   */
   public static function updateModernFinishing($id, $modernFinishing )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'modernFinishing' => $modernFinishing ]) )
      return true;
     else
      return false;
   }
   /**
   * Update a listings AdvertisingCost.
   *
   * @param  $id and $advertisingCost
   * @return boolean true / false
   */
   public static function updateAdvertisingCost($id, $advertisingCost )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'advertisingCost' => $advertisingCost ]) )
      return true;
     else
      return false;
   }
    /**
   * Update a listings Discount.
   *
   * @param  $id and $discount
   * @return boolean true / false
   */
   public static function updateDiscount($id, $discount )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'discount' => $discount ]) )
      return true;
     else
      return false;
   }

    /**
   * Update a listings Payable.
   *
   * @param  $id and $payable
   * @return boolean true / false
   */
   public static function updatePayable($id, $payable )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'payable' => $payable ]) )
      return true;
     else
      return false;
   }        /**
   * Update a listings Received.
   *
   * @param  $id and $received
   * @return boolean true / false
   */
   public static function updateReceived($id, $received )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'received' => $received ]) )
      return true;
     else
      return false;
   }

/**
   * Update a listings Pending.
   *
   * @param  $id and $pending
   * @return boolean true / false
   */
   public static function updatePending($id, $pending )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'pending' => $pending ]) )
      return true;
     else
      return false;
  }
/**
   * Update a listings PercentageDiscount.
   *
   * @param  $id and $percentageDiscount
   * @return boolean true / false
   */
   public static function updatePercentageDiscount($id, $percentageDiscount )
   {
     if( !$id )
      return false;

     $listing = Listing::find($id);

     if( $listing->update([ 'percentageDiscount' => $percentageDiscount ]) )
      return true;
     else
      return false;
   }

}
