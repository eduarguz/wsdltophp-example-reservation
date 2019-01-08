<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirType StructType
 * @subpackage Structs
 */
class AirType extends AbstractStructBase
{
    /**
     * The DepartureAirport
     * Meta informations extracted from the WSDL
     * - documentation: Departure point of flight segment. | Departure point of flight segment.
     * - minOccurs: 0
     * @var string
     */
    public $DepartureAirport;
    /**
     * The DepartureAirportCodeContext
     * Meta informations extracted from the WSDL
     * - documentation: IATA. Ex."IATA" | IATA. Ex."IATA"
     * - minOccurs: 0
     * @var string
     */
    public $DepartureAirportCodeContext;
    /**
     * The DepartureTerminalName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureTerminalName;
    /**
     * The DepartureTerminalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureTerminalCode;
    /**
     * The ArrivalAirport
     * Meta informations extracted from the WSDL
     * - documentation: Arrival airport point of flight segment. | Departure point of flight segment.
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalAirport;
    /**
     * The ArrivalAirportCodeContext
     * Meta informations extracted from the WSDL
     * - documentation: IATA. Ex."IATA" | IATA. Ex."IATA"
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalAirportCodeContext;
    /**
     * The ArrivalTerminalName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalTerminalName;
    /**
     * The ArrivalTerminalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalTerminalCode;
    /**
     * The OperatingAirlineCode
     * Meta informations extracted from the WSDL
     * - documentation: The operating airline of the flight if it is a codeshare flight. | The operating airline of the flight if it is a codeshare flight. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by
     * an optional uppercase letter. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter.
     * - minOccurs: 0
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string
     */
    public $OperatingAirlineCode;
    /**
     * The OperatingAirlineShortName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OperatingAirlineShortName;
    /**
     * The OperatingFlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: The operating carrier flight number of the flight. | The operating carrier flight number of the flight. | Identifies a flight number (1 to 4 numbers followed by optional uppercase A - Z, which specifies an operational suffix. Value
     * may also be the enumerated or OPEN or ARNK. ARNK means Arrival Unknown. An OPEN air segment indicates the cities in the flight and the class of service for ticketing purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses
     * leading 0 in flight numbers (ex: 0900 is different than 900). | Identifies a flight number (1 to 4 numbers followed by optional uppercase A - Z, which specifies an operational suffix. Value may also be the enumerated or OPEN or ARNK. ARNK means
     * Arrival Unknown. An OPEN air segment indicates the cities in the flight and the class of service for ticketing purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses leading 0 in flight numbers (ex: 0900 is different than
     * 900).
     * - minOccurs: 0
     * - union: _flightNumberPattern | _flightNumberLiterals
     * @var string
     */
    public $OperatingFlightNumber;
    /**
     * The EquipmentType
     * Meta informations extracted from the WSDL
     * - documentation: Code used to describe the aircraft type. Example "73H" | Code used to describe the aircraft type. Example "73H"
     * - minOccurs: 0
     * @var string
     */
    public $EquipmentType;
    /**
     * The MarketingAirlineCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a company by the company code. | Identifies a company by the company code.
     * - minOccurs: 0
     * - union: AirlineCode | AirlineSpecification
     * @var string
     */
    public $MarketingAirlineCode;
    /**
     * The MarketingFlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: The marketing carrier flight number of the flight. | The marketing carrier flight number of the flight. | Identifies a flight number (1 to 4 numbers followed by optional uppercase A - Z, which specifies an operational suffix. Value
     * may also be the enumerated or OPEN or ARNK. ARNK means Arrival Unknown. An OPEN air segment indicates the cities in the flight and the class of service for ticketing purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses
     * leading 0 in flight numbers (ex: 0900 is different than 900). | Identifies a flight number (1 to 4 numbers followed by optional uppercase A - Z, which specifies an operational suffix. Value may also be the enumerated or OPEN or ARNK. ARNK means
     * Arrival Unknown. An OPEN air segment indicates the cities in the flight and the class of service for ticketing purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses leading 0 in flight numbers (ex: 0900 is different than
     * 900).
     * - minOccurs: 0
     * - union: _flightNumberPattern | _flightNumberLiterals
     * @var string
     */
    public $MarketingFlightNumber;
    /**
     * The OperatingClassOfService
     * Meta informations extracted from the WSDL
     * - documentation: The marketing booking class of service indicated on the face of the PNR. Example "Y" | The marketing booking class of service indicated on the face of the PNR. Example "Y"
     * - minOccurs: 0
     * @var string
     */
    public $OperatingClassOfService;
    /**
     * The MarketingClassOfService
     * Meta informations extracted from the WSDL
     * - documentation: The operating booking class of service indicated on the face of the PNR. Example "Y" | The operating booking class of service indicated on the face of the PNR. Example "Y"
     * - minOccurs: 0
     * @var string
     */
    public $MarketingClassOfService;
    /**
     * The CodeShareOperatingRecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CodeShareOperatingRecordLocator;
    /**
     * The MarriageGrp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MarriageGrp
     */
    public $MarriageGrp;
    /**
     * The Cabin
     * Meta informations extracted from the WSDL
     * - documentation: Generic cabin description data.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CabinType
     */
    public $Cabin;
    /**
     * The MealCode
     * Meta informations extracted from the WSDL
     * - documentation: Meal code associated with the particular flight segment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $MealCode;
    /**
     * The SmokingAllowed
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: "SmokingAllowed" is used to indicate whether or not smoking is permitted on the particular flight segment. | Indicates whether or not smoking is permitted on the particular flight segment.
     * - minOccurs: 0
     * - use: optional
     * @var bool
     */
    public $SmokingAllowed;
    /**
     * The StopQuantity
     * Meta informations extracted from the WSDL
     * - documentation: "StopQuantity" is used to return the number of stops associated with the particular flight segment. | Number of stops associated with the particular flight segment.
     * - minOccurs: 0
     * - use: optional
     * @var int
     */
    public $StopQuantity;
    /**
     * The ElapsedTime
     * Meta informations extracted from the WSDL
     * - documentation: "ElapsedTime" is used to return the elapsed time associated with the particular flight segment. | The elapsed time in minutes associated with the particular flight segment.
     * - minOccurs: 0
     * @var int
     */
    public $ElapsedTime;
    /**
     * The AirMilesFlown
     * Meta informations extracted from the WSDL
     * - documentation: "AirMilesFlown" is used to return the air miles flown associated with the particular flight segment. | Air miles flown associated with the particular flight segment.
     * - minOccurs: 0
     * @var int
     */
    public $AirMilesFlown;
    /**
     * The HiddenStop
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HiddenStop[]
     */
    public $HiddenStop;
    /**
     * The FunnelFlight
     * Meta informations extracted from the WSDL
     * - documentation: "FunnelFlight" is used to determine a funnel flight type for flight segment. | "FunnelFlight" is used to determine a funnel flight type for flight segment.
     * - minOccurs: 0
     * @var bool
     */
    public $FunnelFlight;
    /**
     * The ChangeOfGauge
     * Meta informations extracted from the WSDL
     * - documentation: "ChangeOfGauge" is used to determine a change of gauge for flight segment. | "ChangeOfGauge" is used to determine a change of gauge for flight segment.
     * - minOccurs: 0
     * @var bool
     */
    public $ChangeOfGauge;
    /**
     * The DisclosureCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DisclosureCarrier
     */
    public $DisclosureCarrier;
    /**
     * The AirlineRefId
     * Meta informations extracted from the WSDL
     * - documentation: 2 char code indicating method other airlines segment was added. Example "VA*XBZVGY" | 2 char code indicating method other airlines segment was added. Example "VA*XBZVGY"
     * - minOccurs: 0
     * @var string
     */
    public $AirlineRefId;
    /**
     * The Eticket
     * Meta informations extracted from the WSDL
     * - documentation: True/False indicator. Example "TRUE" | True/False indicator. Example "TRUE"
     * - minOccurs: 0
     * @var bool
     */
    public $Eticket;
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalDateTime;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: The flight number of the flight. | The flight number of the flight. | Identifies a flight number (1 to 4 numbers followed by optional uppercase A - Z, which specifies an operational suffix. Value may also be the enumerated or OPEN or
     * ARNK. ARNK means Arrival Unknown. An OPEN air segment indicates the cities in the flight and the class of service for ticketing purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses leading 0 in flight numbers (ex: 0900 is
     * different than 900). | Identifies a flight number (1 to 4 numbers followed by optional uppercase A - Z, which specifies an operational suffix. Value may also be the enumerated or OPEN or ARNK. ARNK means Arrival Unknown. An OPEN air segment indicates
     * the cities in the flight and the class of service for ticketing purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses leading 0 in flight numbers (ex: 0900 is different than 900).
     * - minOccurs: 0
     * - union: _flightNumberPattern | _flightNumberLiterals
     * @var string
     */
    public $FlightNumber;
    /**
     * The ClassOfService
     * Meta informations extracted from the WSDL
     * - documentation: Specific Booking Class for this segment. | Specific Booking Class for this segment.
     * - minOccurs: 0
     * @var string
     */
    public $ClassOfService;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - documentation: Current status of booked segment. Example "HK" | Current status of booked segment. Example "HK"
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Booked seats. Example "2" | Booked seats. Example "2" | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - minOccurs: 0
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberInParty;
    /**
     * The inboundConnection
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if connection from previous flight segment. Example "FALSE" | Indicates if connection from previous flight segment. Example "FALSE"
     * - minOccurs: 0
     * @var bool
     */
    public $inboundConnection;
    /**
     * The outboundConnection
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if connection to the following flight segment. Example "FALSE" | Indicates if connection to the following flight segment. Example "FALSE"
     * - minOccurs: 0
     * @var bool
     */
    public $outboundConnection;
    /**
     * The AncillaryServices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryServices
     */
    public $AncillaryServices;
    /**
     * The BSGIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate group bookings. | Used to indicate group bookings.
     * - minOccurs: 0
     * @var bool
     */
    public $BSGIndicator;
    /**
     * The BSGPNRRecordLocator
     * Meta informations extracted from the WSDL
     * - documentation: The Master or parent blocked space group PNR locator ID. The PNR locator of the original blocked space group PNR.. Example "YOUZYG" | The Master or parent blocked space group PNR locator ID. The PNR locator of the original blocked
     * space group PNR.. Example "YOUZYG"
     * - minOccurs: 0
     * @var string
     */
    public $BSGPNRRecordLocator;
    /**
     * The BSGPNRCreatedDate
     * Meta informations extracted from the WSDL
     * - documentation: The Master or parent blocked space group PNR create date. The PNR create date of the original blocked space group PNR. Example "2012-11-23" | The Master or parent blocked space group PNR create date. The PNR create date of the
     * original blocked space group PNR. Example "2012-11-23"
     * - minOccurs: 0
     * @var string
     */
    public $BSGPNRCreatedDate;
    /**
     * The PassiveSegmentIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Passively booked segments notification. | Passively booked segments notification.
     * - minOccurs: 0
     * @var bool
     */
    public $PassiveSegmentIndicator;
    /**
     * The ScheduleChangeIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Notification regarding any schedule changes. | Notification regarding any schedule changes.
     * - minOccurs: 0
     * @var bool
     */
    public $ScheduleChangeIndicator;
    /**
     * The SegmentBookedDate
     * Meta informations extracted from the WSDL
     * - documentation: Segment Booked date and time with format: YYYY-MM-DDThh:mm:ss | Segment Booked date and time with format: YYYY-MM-DDThh:mm:ss
     * - minOccurs: 0
     * @var string
     */
    public $SegmentBookedDate;
    /**
     * The UpdatedDepartureDate
     * Meta informations extracted from the WSDL
     * - documentation: Updated departure information if applicable with format YYYY-MM-DD | Updated departure information if applicable with format YYYY-MM-DD
     * - minOccurs: 0
     * @var string
     */
    public $UpdatedDepartureDate;
    /**
     * The UpdatedDepartureTime
     * Meta informations extracted from the WSDL
     * - documentation: Updated departure information if applicable with format hh:mm | Updated departure information if applicable with format hh:mm
     * - minOccurs: 0
     * @var string
     */
    public $UpdatedDepartureTime;
    /**
     * The UpdatedArrivalTime
     * Meta informations extracted from the WSDL
     * - documentation: Updated arrival information if applicable with format hh:mm | Updated arrival information if applicable with format hh:mm
     * - minOccurs: 0
     * @var string
     */
    public $UpdatedArrivalTime;
    /**
     * The Pos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AirPosType
     */
    public $Pos;
    /**
     * The OALocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OALocator;
    /**
     * The DirectConnectDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DirectConnectDate;
    /**
     * The InstantPurchase
     * Meta informations extracted from the WSDL
     * - documentation: Indication of LCC segment. Example: FALSE | Low cost segment indicator
     * - minOccurs: 0
     * @var bool
     */
    public $InstantPurchase;
    /**
     * The BrandID
     * Meta informations extracted from the WSDL
     * - documentation: 2 Chars string representing sold brand. Example: PE | 2 chars string representing sold brand.
     * - minOccurs: 0
     * - maxLength: 10
     * - minLength: 2
     * @var string
     */
    public $BrandID;
    /**
     * The FareComponent
     * Meta informations extracted from the WSDL
     * - documentation: Fare Component information
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FareComponentWithId[]
     */
    public $FareComponent;
    /**
     * The OtherAirlineSign
     * Meta informations extracted from the WSDL
     * - documentation: Other airline sign information | Other airline sign information
     * - minOccurs: 0
     * @var string
     */
    public $OtherAirlineSign;
    /**
     * The Informational
     * Meta informations extracted from the WSDL
     * - documentation: Informational segment indicator | Informational segment indicator
     * - minOccurs: 0
     * @var bool
     */
    public $Informational;
    /**
     * The index
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $index;
    /**
     * The sequence
     * Meta informations extracted from the WSDL
     * - documentation: Identifies sequence number of Itinerary | Identifies sequence number of Itinerary
     * @var int
     */
    public $sequence;
    /**
     * The segmentAssociationId
     * Meta informations extracted from the WSDL
     * - documentation: Unique segment tab for the segment the association is processed. | Unique segment tab for the segment the association is processed.
     * @var int
     */
    public $segmentAssociationId;
    /**
     * The isPast
     * Meta informations extracted from the WSDL
     * - documentation: It returns information if current segment is past or not. | It returns information if current segment is past or not.
     * - use: optional
     * @var bool
     */
    public $isPast;
    /**
     * The MarriedConnectionIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MarriedConnectionIndicator;
    /**
     * The Meal
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Meal[]
     */
    public $Meal;
    /**
     * The Seats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Seats_PNRB
     */
    public $Seats;
    /**
     * The SegmentSpecialRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
     */
    public $SegmentSpecialRequests;
    /**
     * The FqtvUpgradeRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests
     */
    public $FqtvUpgradeRequests;
    /**
     * The ODData
     * Meta informations extracted from the WSDL
     * - documentation: Pnr footprint data for bid price and fare reference
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ODDataType
     */
    public $ODData;
    /**
     * The Banner
     * Meta informations extracted from the WSDL
     * - documentation: "Air/Banner" is used to return the marketing airline name.
     * - minOccurs: 0
     * @var string
     */
    public $Banner;
    /**
     * The RdbAvailableSeatCounts
     * Meta informations extracted from the WSDL
     * - documentation: Availability seat counts for RDB pricing purposes
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RdbAvailableSeatCountType_PNRB
     */
    public $RdbAvailableSeatCounts;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * The DayOfWeekInd
     * Meta informations extracted from the WSDL
     * - documentation: "DayOfWeekInd" is used to return the day of the week indicator.
     * - use: optional
     * @var string
     */
    public $DayOfWeekInd;
    /**
     * The CodeShare
     * Meta informations extracted from the WSDL
     * - documentation: "CodeShare" is used to indicate if this is a codeshare flight.
     * - use: optional
     * @var bool
     */
    public $CodeShare;
    /**
     * The SpecialMeal
     * Meta informations extracted from the WSDL
     * - documentation: "SpecialMeal" is used to indicate whether or not a special meal is associated with the particular flight segment.
     * - use: optional
     * @var bool
     */
    public $SpecialMeal;
    /**
     * The ResBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: "ResBookDesigCode" is used to specify the booking class.
     * - use: optional
     * @var string
     */
    public $ResBookDesigCode;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: "Code" is used to return the operating airline code used for pricing associated with the particular flight segment.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * Constructor method for AirType
     * @uses AirType::setDepartureAirport()
     * @uses AirType::setDepartureAirportCodeContext()
     * @uses AirType::setDepartureTerminalName()
     * @uses AirType::setDepartureTerminalCode()
     * @uses AirType::setArrivalAirport()
     * @uses AirType::setArrivalAirportCodeContext()
     * @uses AirType::setArrivalTerminalName()
     * @uses AirType::setArrivalTerminalCode()
     * @uses AirType::setOperatingAirlineCode()
     * @uses AirType::setOperatingAirlineShortName()
     * @uses AirType::setOperatingFlightNumber()
     * @uses AirType::setEquipmentType()
     * @uses AirType::setMarketingAirlineCode()
     * @uses AirType::setMarketingFlightNumber()
     * @uses AirType::setOperatingClassOfService()
     * @uses AirType::setMarketingClassOfService()
     * @uses AirType::setCodeShareOperatingRecordLocator()
     * @uses AirType::setMarriageGrp()
     * @uses AirType::setCabin()
     * @uses AirType::setMealCode()
     * @uses AirType::setSmokingAllowed()
     * @uses AirType::setStopQuantity()
     * @uses AirType::setElapsedTime()
     * @uses AirType::setAirMilesFlown()
     * @uses AirType::setHiddenStop()
     * @uses AirType::setFunnelFlight()
     * @uses AirType::setChangeOfGauge()
     * @uses AirType::setDisclosureCarrier()
     * @uses AirType::setAirlineRefId()
     * @uses AirType::setEticket()
     * @uses AirType::setDepartureDateTime()
     * @uses AirType::setArrivalDateTime()
     * @uses AirType::setFlightNumber()
     * @uses AirType::setClassOfService()
     * @uses AirType::setActionCode()
     * @uses AirType::setNumberInParty()
     * @uses AirType::setInboundConnection()
     * @uses AirType::setOutboundConnection()
     * @uses AirType::setAncillaryServices()
     * @uses AirType::setBSGIndicator()
     * @uses AirType::setBSGPNRRecordLocator()
     * @uses AirType::setBSGPNRCreatedDate()
     * @uses AirType::setPassiveSegmentIndicator()
     * @uses AirType::setScheduleChangeIndicator()
     * @uses AirType::setSegmentBookedDate()
     * @uses AirType::setUpdatedDepartureDate()
     * @uses AirType::setUpdatedDepartureTime()
     * @uses AirType::setUpdatedArrivalTime()
     * @uses AirType::setPos()
     * @uses AirType::setOALocator()
     * @uses AirType::setDirectConnectDate()
     * @uses AirType::setInstantPurchase()
     * @uses AirType::setBrandID()
     * @uses AirType::setFareComponent()
     * @uses AirType::setOtherAirlineSign()
     * @uses AirType::setInformational()
     * @uses AirType::setIndex()
     * @uses AirType::setSequence()
     * @uses AirType::setSegmentAssociationId()
     * @uses AirType::setIsPast()
     * @uses AirType::setMarriedConnectionIndicator()
     * @uses AirType::setMeal()
     * @uses AirType::setSeats()
     * @uses AirType::setSegmentSpecialRequests()
     * @uses AirType::setFqtvUpgradeRequests()
     * @uses AirType::setODData()
     * @uses AirType::setBanner()
     * @uses AirType::setRdbAvailableSeatCounts()
     * @uses AirType::setId()
     * @uses AirType::setOp()
     * @uses AirType::setDayOfWeekInd()
     * @uses AirType::setCodeShare()
     * @uses AirType::setSpecialMeal()
     * @uses AirType::setResBookDesigCode()
     * @uses AirType::setCode()
     * @param string $departureAirport
     * @param string $departureAirportCodeContext
     * @param string $departureTerminalName
     * @param string $departureTerminalCode
     * @param string $arrivalAirport
     * @param string $arrivalAirportCodeContext
     * @param string $arrivalTerminalName
     * @param string $arrivalTerminalCode
     * @param string $operatingAirlineCode
     * @param string $operatingAirlineShortName
     * @param string $operatingFlightNumber
     * @param string $equipmentType
     * @param string $marketingAirlineCode
     * @param string $marketingFlightNumber
     * @param string $operatingClassOfService
     * @param string $marketingClassOfService
     * @param string $codeShareOperatingRecordLocator
     * @param \Sabre\UpdateReservation\StructType\MarriageGrp $marriageGrp
     * @param \Sabre\UpdateReservation\StructType\CabinType $cabin
     * @param string[] $mealCode
     * @param bool $smokingAllowed
     * @param int $stopQuantity
     * @param int $elapsedTime
     * @param int $airMilesFlown
     * @param \Sabre\UpdateReservation\StructType\HiddenStop[] $hiddenStop
     * @param bool $funnelFlight
     * @param bool $changeOfGauge
     * @param \Sabre\UpdateReservation\StructType\DisclosureCarrier $disclosureCarrier
     * @param string $airlineRefId
     * @param bool $eticket
     * @param string $departureDateTime
     * @param string $arrivalDateTime
     * @param string $flightNumber
     * @param string $classOfService
     * @param string $actionCode
     * @param int $numberInParty
     * @param bool $inboundConnection
     * @param bool $outboundConnection
     * @param \Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices
     * @param bool $bSGIndicator
     * @param string $bSGPNRRecordLocator
     * @param string $bSGPNRCreatedDate
     * @param bool $passiveSegmentIndicator
     * @param bool $scheduleChangeIndicator
     * @param string $segmentBookedDate
     * @param string $updatedDepartureDate
     * @param string $updatedDepartureTime
     * @param string $updatedArrivalTime
     * @param \Sabre\UpdateReservation\StructType\AirPosType $pos
     * @param string $oALocator
     * @param string $directConnectDate
     * @param bool $instantPurchase
     * @param string $brandID
     * @param \Sabre\UpdateReservation\StructType\FareComponentWithId[] $fareComponent
     * @param string $otherAirlineSign
     * @param bool $informational
     * @param int $index
     * @param int $sequence
     * @param int $segmentAssociationId
     * @param bool $isPast
     * @param string $marriedConnectionIndicator
     * @param \Sabre\UpdateReservation\StructType\Meal[] $meal
     * @param \Sabre\UpdateReservation\StructType\Seats_PNRB $seats
     * @param \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests
     * @param \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests $fqtvUpgradeRequests
     * @param \Sabre\UpdateReservation\StructType\ODDataType $oDData
     * @param string $banner
     * @param \Sabre\UpdateReservation\StructType\RdbAvailableSeatCountType_PNRB $rdbAvailableSeatCounts
     * @param string $id
     * @param string $op
     * @param string $dayOfWeekInd
     * @param bool $codeShare
     * @param bool $specialMeal
     * @param string $resBookDesigCode
     * @param string $code
     */
    public function __construct($departureAirport = null, $departureAirportCodeContext = null, $departureTerminalName = null, $departureTerminalCode = null, $arrivalAirport = null, $arrivalAirportCodeContext = null, $arrivalTerminalName = null, $arrivalTerminalCode = null, $operatingAirlineCode = null, $operatingAirlineShortName = null, $operatingFlightNumber = null, $equipmentType = null, $marketingAirlineCode = null, $marketingFlightNumber = null, $operatingClassOfService = null, $marketingClassOfService = null, $codeShareOperatingRecordLocator = null, \Sabre\UpdateReservation\StructType\MarriageGrp $marriageGrp = null, \Sabre\UpdateReservation\StructType\CabinType $cabin = null, array $mealCode = array(), $smokingAllowed = false, $stopQuantity = null, $elapsedTime = null, $airMilesFlown = null, array $hiddenStop = array(), $funnelFlight = null, $changeOfGauge = null, \Sabre\UpdateReservation\StructType\DisclosureCarrier $disclosureCarrier = null, $airlineRefId = null, $eticket = null, $departureDateTime = null, $arrivalDateTime = null, $flightNumber = null, $classOfService = null, $actionCode = null, $numberInParty = null, $inboundConnection = null, $outboundConnection = null, \Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices = null, $bSGIndicator = null, $bSGPNRRecordLocator = null, $bSGPNRCreatedDate = null, $passiveSegmentIndicator = null, $scheduleChangeIndicator = null, $segmentBookedDate = null, $updatedDepartureDate = null, $updatedDepartureTime = null, $updatedArrivalTime = null, \Sabre\UpdateReservation\StructType\AirPosType $pos = null, $oALocator = null, $directConnectDate = null, $instantPurchase = null, $brandID = null, array $fareComponent = array(), $otherAirlineSign = null, $informational = null, $index = null, $sequence = null, $segmentAssociationId = null, $isPast = null, $marriedConnectionIndicator = null, array $meal = array(), \Sabre\UpdateReservation\StructType\Seats_PNRB $seats = null, \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests = null, \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests $fqtvUpgradeRequests = null, \Sabre\UpdateReservation\StructType\ODDataType $oDData = null, $banner = null, \Sabre\UpdateReservation\StructType\RdbAvailableSeatCountType_PNRB $rdbAvailableSeatCounts = null, $id = null, $op = null, $dayOfWeekInd = null, $codeShare = null, $specialMeal = null, $resBookDesigCode = null, $code = null)
    {
        $this
            ->setDepartureAirport($departureAirport)
            ->setDepartureAirportCodeContext($departureAirportCodeContext)
            ->setDepartureTerminalName($departureTerminalName)
            ->setDepartureTerminalCode($departureTerminalCode)
            ->setArrivalAirport($arrivalAirport)
            ->setArrivalAirportCodeContext($arrivalAirportCodeContext)
            ->setArrivalTerminalName($arrivalTerminalName)
            ->setArrivalTerminalCode($arrivalTerminalCode)
            ->setOperatingAirlineCode($operatingAirlineCode)
            ->setOperatingAirlineShortName($operatingAirlineShortName)
            ->setOperatingFlightNumber($operatingFlightNumber)
            ->setEquipmentType($equipmentType)
            ->setMarketingAirlineCode($marketingAirlineCode)
            ->setMarketingFlightNumber($marketingFlightNumber)
            ->setOperatingClassOfService($operatingClassOfService)
            ->setMarketingClassOfService($marketingClassOfService)
            ->setCodeShareOperatingRecordLocator($codeShareOperatingRecordLocator)
            ->setMarriageGrp($marriageGrp)
            ->setCabin($cabin)
            ->setMealCode($mealCode)
            ->setSmokingAllowed($smokingAllowed)
            ->setStopQuantity($stopQuantity)
            ->setElapsedTime($elapsedTime)
            ->setAirMilesFlown($airMilesFlown)
            ->setHiddenStop($hiddenStop)
            ->setFunnelFlight($funnelFlight)
            ->setChangeOfGauge($changeOfGauge)
            ->setDisclosureCarrier($disclosureCarrier)
            ->setAirlineRefId($airlineRefId)
            ->setEticket($eticket)
            ->setDepartureDateTime($departureDateTime)
            ->setArrivalDateTime($arrivalDateTime)
            ->setFlightNumber($flightNumber)
            ->setClassOfService($classOfService)
            ->setActionCode($actionCode)
            ->setNumberInParty($numberInParty)
            ->setInboundConnection($inboundConnection)
            ->setOutboundConnection($outboundConnection)
            ->setAncillaryServices($ancillaryServices)
            ->setBSGIndicator($bSGIndicator)
            ->setBSGPNRRecordLocator($bSGPNRRecordLocator)
            ->setBSGPNRCreatedDate($bSGPNRCreatedDate)
            ->setPassiveSegmentIndicator($passiveSegmentIndicator)
            ->setScheduleChangeIndicator($scheduleChangeIndicator)
            ->setSegmentBookedDate($segmentBookedDate)
            ->setUpdatedDepartureDate($updatedDepartureDate)
            ->setUpdatedDepartureTime($updatedDepartureTime)
            ->setUpdatedArrivalTime($updatedArrivalTime)
            ->setPos($pos)
            ->setOALocator($oALocator)
            ->setDirectConnectDate($directConnectDate)
            ->setInstantPurchase($instantPurchase)
            ->setBrandID($brandID)
            ->setFareComponent($fareComponent)
            ->setOtherAirlineSign($otherAirlineSign)
            ->setInformational($informational)
            ->setIndex($index)
            ->setSequence($sequence)
            ->setSegmentAssociationId($segmentAssociationId)
            ->setIsPast($isPast)
            ->setMarriedConnectionIndicator($marriedConnectionIndicator)
            ->setMeal($meal)
            ->setSeats($seats)
            ->setSegmentSpecialRequests($segmentSpecialRequests)
            ->setFqtvUpgradeRequests($fqtvUpgradeRequests)
            ->setODData($oDData)
            ->setBanner($banner)
            ->setRdbAvailableSeatCounts($rdbAvailableSeatCounts)
            ->setId($id)
            ->setOp($op)
            ->setDayOfWeekInd($dayOfWeekInd)
            ->setCodeShare($codeShare)
            ->setSpecialMeal($specialMeal)
            ->setResBookDesigCode($resBookDesigCode)
            ->setCode($code);
    }
    /**
     * Get DepartureAirport value
     * @return string|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param string $departureAirport
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setDepartureAirport($departureAirport = null)
    {
        // validation for constraint: string
        if (!is_null($departureAirport) && !is_string($departureAirport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureAirport)), __LINE__);
        }
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get DepartureAirportCodeContext value
     * @return string|null
     */
    public function getDepartureAirportCodeContext()
    {
        return $this->DepartureAirportCodeContext;
    }
    /**
     * Set DepartureAirportCodeContext value
     * @param string $departureAirportCodeContext
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setDepartureAirportCodeContext($departureAirportCodeContext = null)
    {
        // validation for constraint: string
        if (!is_null($departureAirportCodeContext) && !is_string($departureAirportCodeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureAirportCodeContext)), __LINE__);
        }
        $this->DepartureAirportCodeContext = $departureAirportCodeContext;
        return $this;
    }
    /**
     * Get DepartureTerminalName value
     * @return string|null
     */
    public function getDepartureTerminalName()
    {
        return $this->DepartureTerminalName;
    }
    /**
     * Set DepartureTerminalName value
     * @param string $departureTerminalName
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setDepartureTerminalName($departureTerminalName = null)
    {
        // validation for constraint: string
        if (!is_null($departureTerminalName) && !is_string($departureTerminalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureTerminalName)), __LINE__);
        }
        $this->DepartureTerminalName = $departureTerminalName;
        return $this;
    }
    /**
     * Get DepartureTerminalCode value
     * @return string|null
     */
    public function getDepartureTerminalCode()
    {
        return $this->DepartureTerminalCode;
    }
    /**
     * Set DepartureTerminalCode value
     * @param string $departureTerminalCode
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setDepartureTerminalCode($departureTerminalCode = null)
    {
        // validation for constraint: string
        if (!is_null($departureTerminalCode) && !is_string($departureTerminalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureTerminalCode)), __LINE__);
        }
        $this->DepartureTerminalCode = $departureTerminalCode;
        return $this;
    }
    /**
     * Get ArrivalAirport value
     * @return string|null
     */
    public function getArrivalAirport()
    {
        return $this->ArrivalAirport;
    }
    /**
     * Set ArrivalAirport value
     * @param string $arrivalAirport
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setArrivalAirport($arrivalAirport = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalAirport) && !is_string($arrivalAirport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalAirport)), __LINE__);
        }
        $this->ArrivalAirport = $arrivalAirport;
        return $this;
    }
    /**
     * Get ArrivalAirportCodeContext value
     * @return string|null
     */
    public function getArrivalAirportCodeContext()
    {
        return $this->ArrivalAirportCodeContext;
    }
    /**
     * Set ArrivalAirportCodeContext value
     * @param string $arrivalAirportCodeContext
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setArrivalAirportCodeContext($arrivalAirportCodeContext = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalAirportCodeContext) && !is_string($arrivalAirportCodeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalAirportCodeContext)), __LINE__);
        }
        $this->ArrivalAirportCodeContext = $arrivalAirportCodeContext;
        return $this;
    }
    /**
     * Get ArrivalTerminalName value
     * @return string|null
     */
    public function getArrivalTerminalName()
    {
        return $this->ArrivalTerminalName;
    }
    /**
     * Set ArrivalTerminalName value
     * @param string $arrivalTerminalName
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setArrivalTerminalName($arrivalTerminalName = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalTerminalName) && !is_string($arrivalTerminalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalTerminalName)), __LINE__);
        }
        $this->ArrivalTerminalName = $arrivalTerminalName;
        return $this;
    }
    /**
     * Get ArrivalTerminalCode value
     * @return string|null
     */
    public function getArrivalTerminalCode()
    {
        return $this->ArrivalTerminalCode;
    }
    /**
     * Set ArrivalTerminalCode value
     * @param string $arrivalTerminalCode
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setArrivalTerminalCode($arrivalTerminalCode = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalTerminalCode) && !is_string($arrivalTerminalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalTerminalCode)), __LINE__);
        }
        $this->ArrivalTerminalCode = $arrivalTerminalCode;
        return $this;
    }
    /**
     * Get OperatingAirlineCode value
     * @return string|null
     */
    public function getOperatingAirlineCode()
    {
        return $this->OperatingAirlineCode;
    }
    /**
     * Set OperatingAirlineCode value
     * @param string $operatingAirlineCode
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setOperatingAirlineCode($operatingAirlineCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($operatingAirlineCode) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $operatingAirlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($operatingAirlineCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($operatingAirlineCode) && !is_string($operatingAirlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingAirlineCode)), __LINE__);
        }
        $this->OperatingAirlineCode = $operatingAirlineCode;
        return $this;
    }
    /**
     * Get OperatingAirlineShortName value
     * @return string|null
     */
    public function getOperatingAirlineShortName()
    {
        return $this->OperatingAirlineShortName;
    }
    /**
     * Set OperatingAirlineShortName value
     * @param string $operatingAirlineShortName
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setOperatingAirlineShortName($operatingAirlineShortName = null)
    {
        // validation for constraint: string
        if (!is_null($operatingAirlineShortName) && !is_string($operatingAirlineShortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingAirlineShortName)), __LINE__);
        }
        $this->OperatingAirlineShortName = $operatingAirlineShortName;
        return $this;
    }
    /**
     * Get OperatingFlightNumber value
     * @return string|null
     */
    public function getOperatingFlightNumber()
    {
        return $this->OperatingFlightNumber;
    }
    /**
     * Set OperatingFlightNumber value
     * @param string $operatingFlightNumber
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setOperatingFlightNumber($operatingFlightNumber = null)
    {
        // validation for constraint: pattern
        if (is_scalar($operatingFlightNumber) && !preg_match('/[0-9]{1,4}[A-Z]?/', $operatingFlightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,4}[A-Z]?", "%s" given', var_export($operatingFlightNumber, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($operatingFlightNumber) && !is_string($operatingFlightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingFlightNumber)), __LINE__);
        }
        $this->OperatingFlightNumber = $operatingFlightNumber;
        return $this;
    }
    /**
     * Get EquipmentType value
     * @return string|null
     */
    public function getEquipmentType()
    {
        return $this->EquipmentType;
    }
    /**
     * Set EquipmentType value
     * @param string $equipmentType
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setEquipmentType($equipmentType = null)
    {
        // validation for constraint: string
        if (!is_null($equipmentType) && !is_string($equipmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipmentType)), __LINE__);
        }
        $this->EquipmentType = $equipmentType;
        return $this;
    }
    /**
     * Get MarketingAirlineCode value
     * @return string|null
     */
    public function getMarketingAirlineCode()
    {
        return $this->MarketingAirlineCode;
    }
    /**
     * Set MarketingAirlineCode value
     * @param string $marketingAirlineCode
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setMarketingAirlineCode($marketingAirlineCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($marketingAirlineCode) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $marketingAirlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($marketingAirlineCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($marketingAirlineCode) && !is_string($marketingAirlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketingAirlineCode)), __LINE__);
        }
        $this->MarketingAirlineCode = $marketingAirlineCode;
        return $this;
    }
    /**
     * Get MarketingFlightNumber value
     * @return string|null
     */
    public function getMarketingFlightNumber()
    {
        return $this->MarketingFlightNumber;
    }
    /**
     * Set MarketingFlightNumber value
     * @param string $marketingFlightNumber
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setMarketingFlightNumber($marketingFlightNumber = null)
    {
        // validation for constraint: pattern
        if (is_scalar($marketingFlightNumber) && !preg_match('/[0-9]{1,4}[A-Z]?/', $marketingFlightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,4}[A-Z]?", "%s" given', var_export($marketingFlightNumber, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($marketingFlightNumber) && !is_string($marketingFlightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketingFlightNumber)), __LINE__);
        }
        $this->MarketingFlightNumber = $marketingFlightNumber;
        return $this;
    }
    /**
     * Get OperatingClassOfService value
     * @return string|null
     */
    public function getOperatingClassOfService()
    {
        return $this->OperatingClassOfService;
    }
    /**
     * Set OperatingClassOfService value
     * @param string $operatingClassOfService
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setOperatingClassOfService($operatingClassOfService = null)
    {
        // validation for constraint: string
        if (!is_null($operatingClassOfService) && !is_string($operatingClassOfService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingClassOfService)), __LINE__);
        }
        $this->OperatingClassOfService = $operatingClassOfService;
        return $this;
    }
    /**
     * Get MarketingClassOfService value
     * @return string|null
     */
    public function getMarketingClassOfService()
    {
        return $this->MarketingClassOfService;
    }
    /**
     * Set MarketingClassOfService value
     * @param string $marketingClassOfService
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setMarketingClassOfService($marketingClassOfService = null)
    {
        // validation for constraint: string
        if (!is_null($marketingClassOfService) && !is_string($marketingClassOfService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketingClassOfService)), __LINE__);
        }
        $this->MarketingClassOfService = $marketingClassOfService;
        return $this;
    }
    /**
     * Get CodeShareOperatingRecordLocator value
     * @return string|null
     */
    public function getCodeShareOperatingRecordLocator()
    {
        return $this->CodeShareOperatingRecordLocator;
    }
    /**
     * Set CodeShareOperatingRecordLocator value
     * @param string $codeShareOperatingRecordLocator
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setCodeShareOperatingRecordLocator($codeShareOperatingRecordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($codeShareOperatingRecordLocator) && !is_string($codeShareOperatingRecordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeShareOperatingRecordLocator)), __LINE__);
        }
        $this->CodeShareOperatingRecordLocator = $codeShareOperatingRecordLocator;
        return $this;
    }
    /**
     * Get MarriageGrp value
     * @return \Sabre\UpdateReservation\StructType\MarriageGrp|null
     */
    public function getMarriageGrp()
    {
        return $this->MarriageGrp;
    }
    /**
     * Set MarriageGrp value
     * @param \Sabre\UpdateReservation\StructType\MarriageGrp $marriageGrp
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setMarriageGrp(\Sabre\UpdateReservation\StructType\MarriageGrp $marriageGrp = null)
    {
        $this->MarriageGrp = $marriageGrp;
        return $this;
    }
    /**
     * Get Cabin value
     * @return \Sabre\UpdateReservation\StructType\CabinType|null
     */
    public function getCabin()
    {
        return $this->Cabin;
    }
    /**
     * Set Cabin value
     * @param \Sabre\UpdateReservation\StructType\CabinType $cabin
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setCabin(\Sabre\UpdateReservation\StructType\CabinType $cabin = null)
    {
        $this->Cabin = $cabin;
        return $this;
    }
    /**
     * Get MealCode value
     * @return string[]|null
     */
    public function getMealCode()
    {
        return $this->MealCode;
    }
    /**
     * Set MealCode value
     * @throws \InvalidArgumentException
     * @param string[] $mealCode
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setMealCode(array $mealCode = array())
    {
        foreach ($mealCode as $airTypeMealCodeItem) {
            // validation for constraint: itemType
            if (!is_string($airTypeMealCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The MealCode property can only contain items of string, "%s" given', is_object($airTypeMealCodeItem) ? get_class($airTypeMealCodeItem) : gettype($airTypeMealCodeItem)), __LINE__);
            }
        }
        $this->MealCode = $mealCode;
        return $this;
    }
    /**
     * Add item to MealCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function addToMealCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The MealCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MealCode[] = $item;
        return $this;
    }
    /**
     * Get SmokingAllowed value
     * @return bool|null
     */
    public function getSmokingAllowed()
    {
        return $this->SmokingAllowed;
    }
    /**
     * Set SmokingAllowed value
     * @param bool $smokingAllowed
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setSmokingAllowed($smokingAllowed = false)
    {
        // validation for constraint: boolean
        if (!is_null($smokingAllowed) && !is_bool($smokingAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($smokingAllowed)), __LINE__);
        }
        $this->SmokingAllowed = $smokingAllowed;
        return $this;
    }
    /**
     * Get StopQuantity value
     * @return int|null
     */
    public function getStopQuantity()
    {
        return $this->StopQuantity;
    }
    /**
     * Set StopQuantity value
     * @param int $stopQuantity
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setStopQuantity($stopQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($stopQuantity) && !is_numeric($stopQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($stopQuantity)), __LINE__);
        }
        $this->StopQuantity = $stopQuantity;
        return $this;
    }
    /**
     * Get ElapsedTime value
     * @return int|null
     */
    public function getElapsedTime()
    {
        return $this->ElapsedTime;
    }
    /**
     * Set ElapsedTime value
     * @param int $elapsedTime
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setElapsedTime($elapsedTime = null)
    {
        // validation for constraint: int
        if (!is_null($elapsedTime) && !is_numeric($elapsedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($elapsedTime)), __LINE__);
        }
        $this->ElapsedTime = $elapsedTime;
        return $this;
    }
    /**
     * Get AirMilesFlown value
     * @return int|null
     */
    public function getAirMilesFlown()
    {
        return $this->AirMilesFlown;
    }
    /**
     * Set AirMilesFlown value
     * @param int $airMilesFlown
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setAirMilesFlown($airMilesFlown = null)
    {
        // validation for constraint: int
        if (!is_null($airMilesFlown) && !is_numeric($airMilesFlown)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($airMilesFlown)), __LINE__);
        }
        $this->AirMilesFlown = $airMilesFlown;
        return $this;
    }
    /**
     * Get HiddenStop value
     * @return \Sabre\UpdateReservation\StructType\HiddenStop[]|null
     */
    public function getHiddenStop()
    {
        return $this->HiddenStop;
    }
    /**
     * Set HiddenStop value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HiddenStop[] $hiddenStop
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setHiddenStop(array $hiddenStop = array())
    {
        foreach ($hiddenStop as $airTypeHiddenStopItem) {
            // validation for constraint: itemType
            if (!$airTypeHiddenStopItem instanceof \Sabre\UpdateReservation\StructType\HiddenStop) {
                throw new \InvalidArgumentException(sprintf('The HiddenStop property can only contain items of \Sabre\UpdateReservation\StructType\HiddenStop, "%s" given', is_object($airTypeHiddenStopItem) ? get_class($airTypeHiddenStopItem) : gettype($airTypeHiddenStopItem)), __LINE__);
            }
        }
        $this->HiddenStop = $hiddenStop;
        return $this;
    }
    /**
     * Add item to HiddenStop value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HiddenStop $item
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function addToHiddenStop(\Sabre\UpdateReservation\StructType\HiddenStop $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\HiddenStop) {
            throw new \InvalidArgumentException(sprintf('The HiddenStop property can only contain items of \Sabre\UpdateReservation\StructType\HiddenStop, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HiddenStop[] = $item;
        return $this;
    }
    /**
     * Get FunnelFlight value
     * @return bool|null
     */
    public function getFunnelFlight()
    {
        return $this->FunnelFlight;
    }
    /**
     * Set FunnelFlight value
     * @param bool $funnelFlight
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setFunnelFlight($funnelFlight = null)
    {
        // validation for constraint: boolean
        if (!is_null($funnelFlight) && !is_bool($funnelFlight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($funnelFlight)), __LINE__);
        }
        $this->FunnelFlight = $funnelFlight;
        return $this;
    }
    /**
     * Get ChangeOfGauge value
     * @return bool|null
     */
    public function getChangeOfGauge()
    {
        return $this->ChangeOfGauge;
    }
    /**
     * Set ChangeOfGauge value
     * @param bool $changeOfGauge
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setChangeOfGauge($changeOfGauge = null)
    {
        // validation for constraint: boolean
        if (!is_null($changeOfGauge) && !is_bool($changeOfGauge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($changeOfGauge)), __LINE__);
        }
        $this->ChangeOfGauge = $changeOfGauge;
        return $this;
    }
    /**
     * Get DisclosureCarrier value
     * @return \Sabre\UpdateReservation\StructType\DisclosureCarrier|null
     */
    public function getDisclosureCarrier()
    {
        return $this->DisclosureCarrier;
    }
    /**
     * Set DisclosureCarrier value
     * @param \Sabre\UpdateReservation\StructType\DisclosureCarrier $disclosureCarrier
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setDisclosureCarrier(\Sabre\UpdateReservation\StructType\DisclosureCarrier $disclosureCarrier = null)
    {
        $this->DisclosureCarrier = $disclosureCarrier;
        return $this;
    }
    /**
     * Get AirlineRefId value
     * @return string|null
     */
    public function getAirlineRefId()
    {
        return $this->AirlineRefId;
    }
    /**
     * Set AirlineRefId value
     * @param string $airlineRefId
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setAirlineRefId($airlineRefId = null)
    {
        // validation for constraint: string
        if (!is_null($airlineRefId) && !is_string($airlineRefId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineRefId)), __LINE__);
        }
        $this->AirlineRefId = $airlineRefId;
        return $this;
    }
    /**
     * Get Eticket value
     * @return bool|null
     */
    public function getEticket()
    {
        return $this->Eticket;
    }
    /**
     * Set Eticket value
     * @param bool $eticket
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setEticket($eticket = null)
    {
        // validation for constraint: boolean
        if (!is_null($eticket) && !is_bool($eticket)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eticket)), __LINE__);
        }
        $this->Eticket = $eticket;
        return $this;
    }
    /**
     * Get DepartureDateTime value
     * @return string|null
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param string $departureDateTime
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setDepartureDateTime($departureDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureDateTime) && !is_string($departureDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDateTime)), __LINE__);
        }
        $this->DepartureDateTime = $departureDateTime;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return string|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param string $arrivalDateTime
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDateTime) && !is_string($arrivalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDateTime)), __LINE__);
        }
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: pattern
        if (is_scalar($flightNumber) && !preg_match('/[0-9]{1,4}[A-Z]?/', $flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,4}[A-Z]?", "%s" given', var_export($flightNumber, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        return $this;
    }
    /**
     * Get ClassOfService value
     * @return string|null
     */
    public function getClassOfService()
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param string $classOfService
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setClassOfService($classOfService = null)
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($classOfService)), __LINE__);
        }
        $this->ClassOfService = $classOfService;
        return $this;
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param string $actionCode
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param int $numberInParty
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: maxInclusive
        if ($numberInParty > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberInParty < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
        return $this;
    }
    /**
     * Get inboundConnection value
     * @return bool|null
     */
    public function getInboundConnection()
    {
        return $this->inboundConnection;
    }
    /**
     * Set inboundConnection value
     * @param bool $inboundConnection
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setInboundConnection($inboundConnection = null)
    {
        // validation for constraint: boolean
        if (!is_null($inboundConnection) && !is_bool($inboundConnection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($inboundConnection)), __LINE__);
        }
        $this->inboundConnection = $inboundConnection;
        return $this;
    }
    /**
     * Get outboundConnection value
     * @return bool|null
     */
    public function getOutboundConnection()
    {
        return $this->outboundConnection;
    }
    /**
     * Set outboundConnection value
     * @param bool $outboundConnection
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setOutboundConnection($outboundConnection = null)
    {
        // validation for constraint: boolean
        if (!is_null($outboundConnection) && !is_bool($outboundConnection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($outboundConnection)), __LINE__);
        }
        $this->outboundConnection = $outboundConnection;
        return $this;
    }
    /**
     * Get AncillaryServices value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServices|null
     */
    public function getAncillaryServices()
    {
        return $this->AncillaryServices;
    }
    /**
     * Set AncillaryServices value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setAncillaryServices(\Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices = null)
    {
        $this->AncillaryServices = $ancillaryServices;
        return $this;
    }
    /**
     * Get BSGIndicator value
     * @return bool|null
     */
    public function getBSGIndicator()
    {
        return $this->BSGIndicator;
    }
    /**
     * Set BSGIndicator value
     * @param bool $bSGIndicator
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setBSGIndicator($bSGIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($bSGIndicator) && !is_bool($bSGIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bSGIndicator)), __LINE__);
        }
        $this->BSGIndicator = $bSGIndicator;
        return $this;
    }
    /**
     * Get BSGPNRRecordLocator value
     * @return string|null
     */
    public function getBSGPNRRecordLocator()
    {
        return $this->BSGPNRRecordLocator;
    }
    /**
     * Set BSGPNRRecordLocator value
     * @param string $bSGPNRRecordLocator
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setBSGPNRRecordLocator($bSGPNRRecordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($bSGPNRRecordLocator) && !is_string($bSGPNRRecordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bSGPNRRecordLocator)), __LINE__);
        }
        $this->BSGPNRRecordLocator = $bSGPNRRecordLocator;
        return $this;
    }
    /**
     * Get BSGPNRCreatedDate value
     * @return string|null
     */
    public function getBSGPNRCreatedDate()
    {
        return $this->BSGPNRCreatedDate;
    }
    /**
     * Set BSGPNRCreatedDate value
     * @param string $bSGPNRCreatedDate
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setBSGPNRCreatedDate($bSGPNRCreatedDate = null)
    {
        // validation for constraint: string
        if (!is_null($bSGPNRCreatedDate) && !is_string($bSGPNRCreatedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bSGPNRCreatedDate)), __LINE__);
        }
        $this->BSGPNRCreatedDate = $bSGPNRCreatedDate;
        return $this;
    }
    /**
     * Get PassiveSegmentIndicator value
     * @return bool|null
     */
    public function getPassiveSegmentIndicator()
    {
        return $this->PassiveSegmentIndicator;
    }
    /**
     * Set PassiveSegmentIndicator value
     * @param bool $passiveSegmentIndicator
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setPassiveSegmentIndicator($passiveSegmentIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($passiveSegmentIndicator) && !is_bool($passiveSegmentIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($passiveSegmentIndicator)), __LINE__);
        }
        $this->PassiveSegmentIndicator = $passiveSegmentIndicator;
        return $this;
    }
    /**
     * Get ScheduleChangeIndicator value
     * @return bool|null
     */
    public function getScheduleChangeIndicator()
    {
        return $this->ScheduleChangeIndicator;
    }
    /**
     * Set ScheduleChangeIndicator value
     * @param bool $scheduleChangeIndicator
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setScheduleChangeIndicator($scheduleChangeIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($scheduleChangeIndicator) && !is_bool($scheduleChangeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($scheduleChangeIndicator)), __LINE__);
        }
        $this->ScheduleChangeIndicator = $scheduleChangeIndicator;
        return $this;
    }
    /**
     * Get SegmentBookedDate value
     * @return string|null
     */
    public function getSegmentBookedDate()
    {
        return $this->SegmentBookedDate;
    }
    /**
     * Set SegmentBookedDate value
     * @param string $segmentBookedDate
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setSegmentBookedDate($segmentBookedDate = null)
    {
        // validation for constraint: string
        if (!is_null($segmentBookedDate) && !is_string($segmentBookedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentBookedDate)), __LINE__);
        }
        $this->SegmentBookedDate = $segmentBookedDate;
        return $this;
    }
    /**
     * Get UpdatedDepartureDate value
     * @return string|null
     */
    public function getUpdatedDepartureDate()
    {
        return $this->UpdatedDepartureDate;
    }
    /**
     * Set UpdatedDepartureDate value
     * @param string $updatedDepartureDate
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setUpdatedDepartureDate($updatedDepartureDate = null)
    {
        // validation for constraint: string
        if (!is_null($updatedDepartureDate) && !is_string($updatedDepartureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updatedDepartureDate)), __LINE__);
        }
        $this->UpdatedDepartureDate = $updatedDepartureDate;
        return $this;
    }
    /**
     * Get UpdatedDepartureTime value
     * @return string|null
     */
    public function getUpdatedDepartureTime()
    {
        return $this->UpdatedDepartureTime;
    }
    /**
     * Set UpdatedDepartureTime value
     * @param string $updatedDepartureTime
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setUpdatedDepartureTime($updatedDepartureTime = null)
    {
        // validation for constraint: string
        if (!is_null($updatedDepartureTime) && !is_string($updatedDepartureTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updatedDepartureTime)), __LINE__);
        }
        $this->UpdatedDepartureTime = $updatedDepartureTime;
        return $this;
    }
    /**
     * Get UpdatedArrivalTime value
     * @return string|null
     */
    public function getUpdatedArrivalTime()
    {
        return $this->UpdatedArrivalTime;
    }
    /**
     * Set UpdatedArrivalTime value
     * @param string $updatedArrivalTime
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setUpdatedArrivalTime($updatedArrivalTime = null)
    {
        // validation for constraint: string
        if (!is_null($updatedArrivalTime) && !is_string($updatedArrivalTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updatedArrivalTime)), __LINE__);
        }
        $this->UpdatedArrivalTime = $updatedArrivalTime;
        return $this;
    }
    /**
     * Get Pos value
     * @return \Sabre\UpdateReservation\StructType\AirPosType|null
     */
    public function getPos()
    {
        return $this->Pos;
    }
    /**
     * Set Pos value
     * @param \Sabre\UpdateReservation\StructType\AirPosType $pos
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setPos(\Sabre\UpdateReservation\StructType\AirPosType $pos = null)
    {
        $this->Pos = $pos;
        return $this;
    }
    /**
     * Get OALocator value
     * @return string|null
     */
    public function getOALocator()
    {
        return $this->OALocator;
    }
    /**
     * Set OALocator value
     * @param string $oALocator
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setOALocator($oALocator = null)
    {
        // validation for constraint: string
        if (!is_null($oALocator) && !is_string($oALocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oALocator)), __LINE__);
        }
        $this->OALocator = $oALocator;
        return $this;
    }
    /**
     * Get DirectConnectDate value
     * @return string|null
     */
    public function getDirectConnectDate()
    {
        return $this->DirectConnectDate;
    }
    /**
     * Set DirectConnectDate value
     * @param string $directConnectDate
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setDirectConnectDate($directConnectDate = null)
    {
        // validation for constraint: string
        if (!is_null($directConnectDate) && !is_string($directConnectDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($directConnectDate)), __LINE__);
        }
        $this->DirectConnectDate = $directConnectDate;
        return $this;
    }
    /**
     * Get InstantPurchase value
     * @return bool|null
     */
    public function getInstantPurchase()
    {
        return $this->InstantPurchase;
    }
    /**
     * Set InstantPurchase value
     * @param bool $instantPurchase
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setInstantPurchase($instantPurchase = null)
    {
        // validation for constraint: boolean
        if (!is_null($instantPurchase) && !is_bool($instantPurchase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($instantPurchase)), __LINE__);
        }
        $this->InstantPurchase = $instantPurchase;
        return $this;
    }
    /**
     * Get BrandID value
     * @return string|null
     */
    public function getBrandID()
    {
        return $this->BrandID;
    }
    /**
     * Set BrandID value
     * @param string $brandID
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setBrandID($brandID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($brandID) && strlen($brandID) > 10) || (is_array($brandID) && count($brandID) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($brandID) ? strlen($brandID) : count($brandID)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($brandID) && strlen($brandID) < 2) || (is_array($brandID) && count($brandID) < 2)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 2 element(s) or a scalar of 2 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($brandID) && !is_string($brandID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandID)), __LINE__);
        }
        $this->BrandID = $brandID;
        return $this;
    }
    /**
     * Get FareComponent value
     * @return \Sabre\UpdateReservation\StructType\FareComponentWithId[]|null
     */
    public function getFareComponent()
    {
        return $this->FareComponent;
    }
    /**
     * Set FareComponent value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FareComponentWithId[] $fareComponent
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setFareComponent(array $fareComponent = array())
    {
        foreach ($fareComponent as $airTypeFareComponentItem) {
            // validation for constraint: itemType
            if (!$airTypeFareComponentItem instanceof \Sabre\UpdateReservation\StructType\FareComponentWithId) {
                throw new \InvalidArgumentException(sprintf('The FareComponent property can only contain items of \Sabre\UpdateReservation\StructType\FareComponentWithId, "%s" given', is_object($airTypeFareComponentItem) ? get_class($airTypeFareComponentItem) : gettype($airTypeFareComponentItem)), __LINE__);
            }
        }
        $this->FareComponent = $fareComponent;
        return $this;
    }
    /**
     * Add item to FareComponent value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FareComponentWithId $item
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function addToFareComponent(\Sabre\UpdateReservation\StructType\FareComponentWithId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FareComponentWithId) {
            throw new \InvalidArgumentException(sprintf('The FareComponent property can only contain items of \Sabre\UpdateReservation\StructType\FareComponentWithId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareComponent[] = $item;
        return $this;
    }
    /**
     * Get OtherAirlineSign value
     * @return string|null
     */
    public function getOtherAirlineSign()
    {
        return $this->OtherAirlineSign;
    }
    /**
     * Set OtherAirlineSign value
     * @param string $otherAirlineSign
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setOtherAirlineSign($otherAirlineSign = null)
    {
        // validation for constraint: string
        if (!is_null($otherAirlineSign) && !is_string($otherAirlineSign)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherAirlineSign)), __LINE__);
        }
        $this->OtherAirlineSign = $otherAirlineSign;
        return $this;
    }
    /**
     * Get Informational value
     * @return bool|null
     */
    public function getInformational()
    {
        return $this->Informational;
    }
    /**
     * Set Informational value
     * @param bool $informational
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setInformational($informational = null)
    {
        // validation for constraint: boolean
        if (!is_null($informational) && !is_bool($informational)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($informational)), __LINE__);
        }
        $this->Informational = $informational;
        return $this;
    }
    /**
     * Get index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param int $index
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setIndex($index = null)
    {
        // validation for constraint: maxInclusive
        if ($index > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $index), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($index < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $index), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($index) && !is_numeric($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($index)), __LINE__);
        }
        $this->index = $index;
        return $this;
    }
    /**
     * Get sequence value
     * @return int|null
     */
    public function getSequence()
    {
        return $this->sequence;
    }
    /**
     * Set sequence value
     * @param int $sequence
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setSequence($sequence = null)
    {
        // validation for constraint: int
        if (!is_null($sequence) && !is_numeric($sequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequence)), __LINE__);
        }
        $this->sequence = $sequence;
        return $this;
    }
    /**
     * Get segmentAssociationId value
     * @return int|null
     */
    public function getSegmentAssociationId()
    {
        return $this->segmentAssociationId;
    }
    /**
     * Set segmentAssociationId value
     * @param int $segmentAssociationId
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setSegmentAssociationId($segmentAssociationId = null)
    {
        // validation for constraint: int
        if (!is_null($segmentAssociationId) && !is_numeric($segmentAssociationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentAssociationId)), __LINE__);
        }
        $this->segmentAssociationId = $segmentAssociationId;
        return $this;
    }
    /**
     * Get isPast value
     * @return bool|null
     */
    public function getIsPast()
    {
        return $this->isPast;
    }
    /**
     * Set isPast value
     * @param bool $isPast
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setIsPast($isPast = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPast) && !is_bool($isPast)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPast)), __LINE__);
        }
        $this->isPast = $isPast;
        return $this;
    }
    /**
     * Get MarriedConnectionIndicator value
     * @return string|null
     */
    public function getMarriedConnectionIndicator()
    {
        return $this->MarriedConnectionIndicator;
    }
    /**
     * Set MarriedConnectionIndicator value
     * @param string $marriedConnectionIndicator
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setMarriedConnectionIndicator($marriedConnectionIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($marriedConnectionIndicator) && !is_string($marriedConnectionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marriedConnectionIndicator)), __LINE__);
        }
        $this->MarriedConnectionIndicator = $marriedConnectionIndicator;
        return $this;
    }
    /**
     * Get Meal value
     * @return \Sabre\UpdateReservation\StructType\Meal[]|null
     */
    public function getMeal()
    {
        return $this->Meal;
    }
    /**
     * Set Meal value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Meal[] $meal
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setMeal(array $meal = array())
    {
        foreach ($meal as $airTypeMealItem) {
            // validation for constraint: itemType
            if (!$airTypeMealItem instanceof \Sabre\UpdateReservation\StructType\Meal) {
                throw new \InvalidArgumentException(sprintf('The Meal property can only contain items of \Sabre\UpdateReservation\StructType\Meal, "%s" given', is_object($airTypeMealItem) ? get_class($airTypeMealItem) : gettype($airTypeMealItem)), __LINE__);
            }
        }
        $this->Meal = $meal;
        return $this;
    }
    /**
     * Add item to Meal value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Meal $item
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function addToMeal(\Sabre\UpdateReservation\StructType\Meal $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Meal) {
            throw new \InvalidArgumentException(sprintf('The Meal property can only contain items of \Sabre\UpdateReservation\StructType\Meal, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Meal[] = $item;
        return $this;
    }
    /**
     * Get Seats value
     * @return \Sabre\UpdateReservation\StructType\Seats_PNRB|null
     */
    public function getSeats()
    {
        return $this->Seats;
    }
    /**
     * Set Seats value
     * @param \Sabre\UpdateReservation\StructType\Seats_PNRB $seats
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setSeats(\Sabre\UpdateReservation\StructType\Seats_PNRB $seats = null)
    {
        $this->Seats = $seats;
        return $this;
    }
    /**
     * Get SegmentSpecialRequests value
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB|null
     */
    public function getSegmentSpecialRequests()
    {
        return $this->SegmentSpecialRequests;
    }
    /**
     * Set SegmentSpecialRequests value
     * @param \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setSegmentSpecialRequests(\Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests = null)
    {
        $this->SegmentSpecialRequests = $segmentSpecialRequests;
        return $this;
    }
    /**
     * Get FqtvUpgradeRequests value
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests|null
     */
    public function getFqtvUpgradeRequests()
    {
        return $this->FqtvUpgradeRequests;
    }
    /**
     * Set FqtvUpgradeRequests value
     * @param \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests $fqtvUpgradeRequests
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setFqtvUpgradeRequests(\Sabre\UpdateReservation\StructType\FqtvUpgradeRequests $fqtvUpgradeRequests = null)
    {
        $this->FqtvUpgradeRequests = $fqtvUpgradeRequests;
        return $this;
    }
    /**
     * Get ODData value
     * @return \Sabre\UpdateReservation\StructType\ODDataType|null
     */
    public function getODData()
    {
        return $this->ODData;
    }
    /**
     * Set ODData value
     * @param \Sabre\UpdateReservation\StructType\ODDataType $oDData
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setODData(\Sabre\UpdateReservation\StructType\ODDataType $oDData = null)
    {
        $this->ODData = $oDData;
        return $this;
    }
    /**
     * Get Banner value
     * @return string|null
     */
    public function getBanner()
    {
        return $this->Banner;
    }
    /**
     * Set Banner value
     * @param string $banner
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setBanner($banner = null)
    {
        // validation for constraint: string
        if (!is_null($banner) && !is_string($banner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($banner)), __LINE__);
        }
        $this->Banner = $banner;
        return $this;
    }
    /**
     * Get RdbAvailableSeatCounts value
     * @return \Sabre\UpdateReservation\StructType\RdbAvailableSeatCountType_PNRB|null
     */
    public function getRdbAvailableSeatCounts()
    {
        return $this->RdbAvailableSeatCounts;
    }
    /**
     * Set RdbAvailableSeatCounts value
     * @param \Sabre\UpdateReservation\StructType\RdbAvailableSeatCountType_PNRB $rdbAvailableSeatCounts
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setRdbAvailableSeatCounts(\Sabre\UpdateReservation\StructType\RdbAvailableSeatCountType_PNRB $rdbAvailableSeatCounts = null)
    {
        $this->RdbAvailableSeatCounts = $rdbAvailableSeatCounts;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Get DayOfWeekInd value
     * @return string|null
     */
    public function getDayOfWeekInd()
    {
        return $this->DayOfWeekInd;
    }
    /**
     * Set DayOfWeekInd value
     * @param string $dayOfWeekInd
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setDayOfWeekInd($dayOfWeekInd = null)
    {
        // validation for constraint: string
        if (!is_null($dayOfWeekInd) && !is_string($dayOfWeekInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dayOfWeekInd)), __LINE__);
        }
        $this->DayOfWeekInd = $dayOfWeekInd;
        return $this;
    }
    /**
     * Get CodeShare value
     * @return bool|null
     */
    public function getCodeShare()
    {
        return $this->CodeShare;
    }
    /**
     * Set CodeShare value
     * @param bool $codeShare
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setCodeShare($codeShare = null)
    {
        // validation for constraint: boolean
        if (!is_null($codeShare) && !is_bool($codeShare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($codeShare)), __LINE__);
        }
        $this->CodeShare = $codeShare;
        return $this;
    }
    /**
     * Get SpecialMeal value
     * @return bool|null
     */
    public function getSpecialMeal()
    {
        return $this->SpecialMeal;
    }
    /**
     * Set SpecialMeal value
     * @param bool $specialMeal
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setSpecialMeal($specialMeal = null)
    {
        // validation for constraint: boolean
        if (!is_null($specialMeal) && !is_bool($specialMeal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($specialMeal)), __LINE__);
        }
        $this->SpecialMeal = $specialMeal;
        return $this;
    }
    /**
     * Get ResBookDesigCode value
     * @return string|null
     */
    public function getResBookDesigCode()
    {
        return $this->ResBookDesigCode;
    }
    /**
     * Set ResBookDesigCode value
     * @param string $resBookDesigCode
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setResBookDesigCode($resBookDesigCode = null)
    {
        // validation for constraint: string
        if (!is_null($resBookDesigCode) && !is_string($resBookDesigCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resBookDesigCode)), __LINE__);
        }
        $this->ResBookDesigCode = $resBookDesigCode;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
