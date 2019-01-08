<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Segment StructType
 * Meta informations extracted from the WSDL
 * - minOccurs: 0
 * - type: SegmentOrTravelPortion
 * @subpackage Structs
 */
class Segment extends AbstractStructBase
{
    /**
     * The Air
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Air
     */
    public $Air;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - documentation: Vehicle rental information.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Vehicle
     */
    public $Vehicle;
    /**
     * The Hotel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Hotel
     */
    public $Hotel;
    /**
     * The Open
     * Meta informations extracted from the WSDL
     * - documentation: Open Segment Flight reservation.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Open
     */
    public $Open;
    /**
     * The Arunk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Arunk
     */
    public $Arunk;
    /**
     * The General
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public $General;
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProductType
     */
    public $Product;
    /**
     * The sequence
     * Meta informations extracted from the WSDL
     * - documentation: Identifies sequence number of Itinerary
     * @var int
     */
    public $sequence;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for Segment
     * @uses Segment::setAir()
     * @uses Segment::setVehicle()
     * @uses Segment::setHotel()
     * @uses Segment::setOpen()
     * @uses Segment::setArunk()
     * @uses Segment::setGeneral()
     * @uses Segment::setProduct()
     * @uses Segment::setSequence()
     * @uses Segment::setId()
     * @uses Segment::setRPH()
     * @param \Sabre\UpdateReservation\StructType\Air $air
     * @param \Sabre\UpdateReservation\StructType\Vehicle $vehicle
     * @param \Sabre\UpdateReservation\StructType\Hotel $hotel
     * @param \Sabre\UpdateReservation\StructType\Open $open
     * @param \Sabre\UpdateReservation\StructType\Arunk $arunk
     * @param \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB $general
     * @param \Sabre\UpdateReservation\StructType\ProductType $product
     * @param int $sequence
     * @param string $id
     * @param string $rPH
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Air $air = null, \Sabre\UpdateReservation\StructType\Vehicle $vehicle = null, \Sabre\UpdateReservation\StructType\Hotel $hotel = null, \Sabre\UpdateReservation\StructType\Open $open = null, \Sabre\UpdateReservation\StructType\Arunk $arunk = null, \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB $general = null, \Sabre\UpdateReservation\StructType\ProductType $product = null, $sequence = null, $id = null, $rPH = null)
    {
        $this
            ->setAir($air)
            ->setVehicle($vehicle)
            ->setHotel($hotel)
            ->setOpen($open)
            ->setArunk($arunk)
            ->setGeneral($general)
            ->setProduct($product)
            ->setSequence($sequence)
            ->setId($id)
            ->setRPH($rPH);
    }
    /**
     * Get Air value
     * @return \Sabre\UpdateReservation\StructType\Air|null
     */
    public function getAir()
    {
        return $this->Air;
    }
    /**
     * Set Air value
     * @param \Sabre\UpdateReservation\StructType\Air $air
     * @return \Sabre\UpdateReservation\StructType\Segment
     */
    public function setAir(\Sabre\UpdateReservation\StructType\Air $air = null)
    {
        $this->Air = $air;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Sabre\UpdateReservation\StructType\Vehicle|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Sabre\UpdateReservation\StructType\Vehicle $vehicle
     * @return \Sabre\UpdateReservation\StructType\Segment
     */
    public function setVehicle(\Sabre\UpdateReservation\StructType\Vehicle $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get Hotel value
     * @return \Sabre\UpdateReservation\StructType\Hotel|null
     */
    public function getHotel()
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \Sabre\UpdateReservation\StructType\Hotel $hotel
     * @return \Sabre\UpdateReservation\StructType\Segment
     */
    public function setHotel(\Sabre\UpdateReservation\StructType\Hotel $hotel = null)
    {
        $this->Hotel = $hotel;
        return $this;
    }
    /**
     * Get Open value
     * @return \Sabre\UpdateReservation\StructType\Open|null
     */
    public function getOpen()
    {
        return $this->Open;
    }
    /**
     * Set Open value
     * @param \Sabre\UpdateReservation\StructType\Open $open
     * @return \Sabre\UpdateReservation\StructType\Segment
     */
    public function setOpen(\Sabre\UpdateReservation\StructType\Open $open = null)
    {
        $this->Open = $open;
        return $this;
    }
    /**
     * Get Arunk value
     * @return \Sabre\UpdateReservation\StructType\Arunk|null
     */
    public function getArunk()
    {
        return $this->Arunk;
    }
    /**
     * Set Arunk value
     * @param \Sabre\UpdateReservation\StructType\Arunk $arunk
     * @return \Sabre\UpdateReservation\StructType\Segment
     */
    public function setArunk(\Sabre\UpdateReservation\StructType\Arunk $arunk = null)
    {
        $this->Arunk = $arunk;
        return $this;
    }
    /**
     * Get General value
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB|null
     */
    public function getGeneral()
    {
        return $this->General;
    }
    /**
     * Set General value
     * @param \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB $general
     * @return \Sabre\UpdateReservation\StructType\Segment
     */
    public function setGeneral(\Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB $general = null)
    {
        $this->General = $general;
        return $this;
    }
    /**
     * Get Product value
     * @return \Sabre\UpdateReservation\StructType\ProductType|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @param \Sabre\UpdateReservation\StructType\ProductType $product
     * @return \Sabre\UpdateReservation\StructType\Segment
     */
    public function setProduct(\Sabre\UpdateReservation\StructType\ProductType $product = null)
    {
        $this->Product = $product;
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
     * @return \Sabre\UpdateReservation\StructType\Segment
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
     * @return \Sabre\UpdateReservation\StructType\Segment
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
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Sabre\UpdateReservation\StructType\Segment
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Segment
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
