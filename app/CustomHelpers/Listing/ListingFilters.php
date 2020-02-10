<?php
namespace App\CustomHelpers\Listing;
use App\Listing;
use Carbon\Carbon;

class ListingFilters
{
   /**
    * Get listings ordered based on supplied filters.
    *
    * @param   $sortField and $orderBy
    * @return  $listings
    */
    public static function getListingsByOrder( $filters = [] )
    {
      if( isset($filters['sortField']) && isset($filters['orderBy']) )

        return Listing::orderBy( $filters['sortField'], $filters['orderBy'] )->get();

      elseif( !isset($filters['sortField']) && isset($filters['orderBy']) )

        return Listing::orderBy( 'id', $filters['orderBy'] )->get();

      elseif( isset($filters['sortField']) && !isset($filters['orderBy']) )

        return Listing::orderBy( $filters['sortField'], 'DESC' )->get();

      else

        return Listing::orderBy( 'id', 'DESC' )->get();
    }

    /**
     * Get listings created certain date.
     *
     * @param   $date
     * @return  $listings
     */
     public static function getListingsByDate( $date )
     {
      if( isset($date['date']) && isset($date['orderBy']) )

        return Listing::orderBy( $date['date'], $date['orderBy'] )->get();

      elseif( !isset($date['date']) && isset($date['orderBy']) )

        return Listing::orderBy( 'date', $date['orderBy'] )->get();

      elseif( isset($date['date']) && !isset($date['orderBy']) )

        return Listing::orderBy( ['date'], 'DESC' )->get();

      else

        return Listing::orderBy( 'date', 'DESC' )->get();
     }

     /**
      * Get listings created during specific dates.
      *
      * @param   $startDate and $endDate
      * @return  $listings
      */
      public static function getListingsBySpecificDate( $startDate, $endDate )
      {
      if( isset($startDate, $endDate['sortField']) && isset($startDate, $endDate['orderBy']) )

        return Listing::orderBy( $startDate, $endDate['sortField'], $startDate, $endDate['orderBy'] )->get();

      elseif( !isset($startDate, $endDate['sortField']) && isset($startDate, $endDate['orderBy']) )

        return Listing::orderBy( 'startDate, endDate', $startDate, $endDate['orderBy'] )->get();

      elseif( isset($startDate, $endDate['sortField']) && !isset($startDate, $endDate['orderBy']) )

        return Listing::orderBy( ['sortField'], 'DESC' )->get();

      else

        return Listing::orderBy( 'startDate, endDate', 'DESC' )->get();
      }

      /**
       * Get listings based on supplied filters.
       *
       * @param  array $filters
       * @return array $listings
       */
       public static function getListings( $filters = [] )
       {
      if( isset($filters['id']) && isset($filters['orderBy']) )

        return Listing::orderBy( $filters['id'], $filters['orderBy'] )->get();

      elseif( !isset($filters['id']) && isset($filters['orderBy']) )

        return Listing::orderBy( 'id', $filters['orderBy'] )->get();

      elseif( isset($filters['id']) && !isset($filters['orderBy']) )

        return Listing::orderBy( $filters['id'], 'DESC' )->get();

      else

         return Listing::orderBy( $orderFilter )->whereBetween('created_at',[$startDate,$endDate])->whereDate( $date )--MORE QUERIES HERE-->get()
       }
}
