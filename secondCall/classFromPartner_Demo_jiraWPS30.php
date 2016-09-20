<?php

namespace Hotel\StaticData;

class StaticInput {

    public $hotelIds = array(
        54 =>
        array(
        ),
        34 =>
        array(
        ),
        44 =>
        array(
        ),
        24 =>
        array(
        ),
    );
    public $LanguageId = 1;
    //MANDATORY ARRAY
    /**
     * @var ReturnHotelStaticData;
     */
    public $ReturnHotelStaticData = array();

    /**
     * @var ReturnRoomTypeStaticData;
     */
    public $ReturnRoomTypeStaticData = array();

    /**
     * @var ReturnRateData;
     */
    public $ReturnRateData = array();

    function __construct() {
        $this->ReturnHotelStaticData = new ReturnHotelStaticData();
        $this->ReturnRoomTypeStaticData = new ReturnRoomTypeStaticData();
        $this->ReturnRateData = new ReturnRateData();
    }

}

class ReturnHotelStaticData {

    //
    //
    public $description1 = false; //NO MANDATORY BOOL
    public $description2 = true;
    public $geoPoints = false;
    public $ratingDescription = false;
    public $images = true;
    public $direct = false;
    public $hotelPreference = false;
    public $builtYear = false;
    public $renovationYear = false;
    public $floors = false;
    public $noOfRooms = false;
    public $luxury = false;
    public $address = false;
    public $zipCode = false;
    public $location = true;
    public $locationId = true;
    public $location1 = false;
    public $location2 = false;
    public $location3 = false;
    public $stateName = false;
    public $stateCode = false;
    public $countryName = false;
    public $regionName = false;
    public $regionCode = false;
    public $attraction = false;
    public $amenitie = false;
    public $leisure = false;
    public $business = false;
    public $transportation = true;
    public $hotelPhone = false;
    public $hotelCheckIn = false;
    public $hotelCheckOut = false;
    public $minAge = false;
    public $rating = false;
    public $fireSafety = false;
    //public $geoPoint = false;
    public $chain = false;
    public $lastUpdated = false;
    public $transferMandatory = false;
    public $tariffNotes = false;
    public $chainName = false;

}

class ReturnRoomTypeStaticData {

    public $twin = true; //NO MANDATORY BOOL
    public $roomAmenities = true;
    public $name = true;
    public $roomInfo = true;

}

class ReturnRateData {

    public $status = false;
    public $rateType = false;
    public $allowsExtraMeals = false;
    public $allowsSpecialRequests = false;
    public $allowsBeddingPreference = false;
    public $passengerNamesRequiredForBooking = false;
    public $allocationDetails = false;
    public $cancellationRules = false;
    public $minStay = false;
    public $withinCancellationDeadline = false;
    public $isBookable = false;
    public $onRequest = false;
    public $total = false;
    public $dates = false;
    public $specials = false;
    public $tariffNotes = false;
    public $dayOnRequest = false;
    public $including = false;
    public $leftToSellDaily = false;
    public $dailyMinStay = false;
    public $freeStay = false;

}
