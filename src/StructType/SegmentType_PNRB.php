<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentType.PNRB StructType
 * @subpackage Structs
 */
class SegmentType_PNRB extends AbstractStructBase
{
    /**
     * The Poc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Poc
     */
    public $Poc;
    /**
     * The Air
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Air[]
     */
    public $Air;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - documentation: Vehicle rental information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Vehicle[]
     */
    public $Vehicle;
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - documentation: Open Reservation Product
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProductType[]
     */
    public $Product;
    /**
     * The Hotel
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Hotel[]
     */
    public $Hotel;
    /**
     * The Open
     * Meta informations extracted from the WSDL
     * - documentation: Open Segment Flight reservation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Open[]
     */
    public $Open;
    /**
     * The Arunk
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Arunk[]
     */
    public $Arunk;
    /**
     * The General
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB[]
     */
    public $General;
    /**
     * The Segment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Segment[]
     */
    public $Segment;
    /**
     * Constructor method for SegmentType.PNRB
     * @uses SegmentType_PNRB::setPoc()
     * @uses SegmentType_PNRB::setAir()
     * @uses SegmentType_PNRB::setVehicle()
     * @uses SegmentType_PNRB::setProduct()
     * @uses SegmentType_PNRB::setHotel()
     * @uses SegmentType_PNRB::setOpen()
     * @uses SegmentType_PNRB::setArunk()
     * @uses SegmentType_PNRB::setGeneral()
     * @uses SegmentType_PNRB::setSegment()
     * @param \Sabre\UpdateReservation\StructType\Poc $poc
     * @param \Sabre\UpdateReservation\StructType\Air[] $air
     * @param \Sabre\UpdateReservation\StructType\Vehicle[] $vehicle
     * @param \Sabre\UpdateReservation\StructType\ProductType[] $product
     * @param \Sabre\UpdateReservation\StructType\Hotel[] $hotel
     * @param \Sabre\UpdateReservation\StructType\Open[] $open
     * @param \Sabre\UpdateReservation\StructType\Arunk[] $arunk
     * @param \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB[] $general
     * @param \Sabre\UpdateReservation\StructType\Segment[] $segment
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Poc $poc = null, array $air = array(), array $vehicle = array(), array $product = array(), array $hotel = array(), array $open = array(), array $arunk = array(), array $general = array(), array $segment = array())
    {
        $this
            ->setPoc($poc)
            ->setAir($air)
            ->setVehicle($vehicle)
            ->setProduct($product)
            ->setHotel($hotel)
            ->setOpen($open)
            ->setArunk($arunk)
            ->setGeneral($general)
            ->setSegment($segment);
    }
    /**
     * Get Poc value
     * @return \Sabre\UpdateReservation\StructType\Poc|null
     */
    public function getPoc()
    {
        return $this->Poc;
    }
    /**
     * Set Poc value
     * @param \Sabre\UpdateReservation\StructType\Poc $poc
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function setPoc(\Sabre\UpdateReservation\StructType\Poc $poc = null)
    {
        $this->Poc = $poc;
        return $this;
    }
    /**
     * Get Air value
     * @return \Sabre\UpdateReservation\StructType\Air[]|null
     */
    public function getAir()
    {
        return $this->Air;
    }
    /**
     * Set Air value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Air[] $air
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function setAir(array $air = array())
    {
        foreach ($air as $segmentType_PNRBAirItem) {
            // validation for constraint: itemType
            if (!$segmentType_PNRBAirItem instanceof \Sabre\UpdateReservation\StructType\Air) {
                throw new \InvalidArgumentException(sprintf('The Air property can only contain items of \Sabre\UpdateReservation\StructType\Air, "%s" given', is_object($segmentType_PNRBAirItem) ? get_class($segmentType_PNRBAirItem) : gettype($segmentType_PNRBAirItem)), __LINE__);
            }
        }
        $this->Air = $air;
        return $this;
    }
    /**
     * Add item to Air value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Air $item
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function addToAir(\Sabre\UpdateReservation\StructType\Air $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Air) {
            throw new \InvalidArgumentException(sprintf('The Air property can only contain items of \Sabre\UpdateReservation\StructType\Air, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Air[] = $item;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Sabre\UpdateReservation\StructType\Vehicle[]|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Vehicle[] $vehicle
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function setVehicle(array $vehicle = array())
    {
        foreach ($vehicle as $segmentType_PNRBVehicleItem) {
            // validation for constraint: itemType
            if (!$segmentType_PNRBVehicleItem instanceof \Sabre\UpdateReservation\StructType\Vehicle) {
                throw new \InvalidArgumentException(sprintf('The Vehicle property can only contain items of \Sabre\UpdateReservation\StructType\Vehicle, "%s" given', is_object($segmentType_PNRBVehicleItem) ? get_class($segmentType_PNRBVehicleItem) : gettype($segmentType_PNRBVehicleItem)), __LINE__);
            }
        }
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Add item to Vehicle value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Vehicle $item
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function addToVehicle(\Sabre\UpdateReservation\StructType\Vehicle $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Vehicle) {
            throw new \InvalidArgumentException(sprintf('The Vehicle property can only contain items of \Sabre\UpdateReservation\StructType\Vehicle, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Vehicle[] = $item;
        return $this;
    }
    /**
     * Get Product value
     * @return \Sabre\UpdateReservation\StructType\ProductType[]|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ProductType[] $product
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function setProduct(array $product = array())
    {
        foreach ($product as $segmentType_PNRBProductItem) {
            // validation for constraint: itemType
            if (!$segmentType_PNRBProductItem instanceof \Sabre\UpdateReservation\StructType\ProductType) {
                throw new \InvalidArgumentException(sprintf('The Product property can only contain items of \Sabre\UpdateReservation\StructType\ProductType, "%s" given', is_object($segmentType_PNRBProductItem) ? get_class($segmentType_PNRBProductItem) : gettype($segmentType_PNRBProductItem)), __LINE__);
            }
        }
        $this->Product = $product;
        return $this;
    }
    /**
     * Add item to Product value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ProductType $item
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function addToProduct(\Sabre\UpdateReservation\StructType\ProductType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ProductType) {
            throw new \InvalidArgumentException(sprintf('The Product property can only contain items of \Sabre\UpdateReservation\StructType\ProductType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Product[] = $item;
        return $this;
    }
    /**
     * Get Hotel value
     * @return \Sabre\UpdateReservation\StructType\Hotel[]|null
     */
    public function getHotel()
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Hotel[] $hotel
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function setHotel(array $hotel = array())
    {
        foreach ($hotel as $segmentType_PNRBHotelItem) {
            // validation for constraint: itemType
            if (!$segmentType_PNRBHotelItem instanceof \Sabre\UpdateReservation\StructType\Hotel) {
                throw new \InvalidArgumentException(sprintf('The Hotel property can only contain items of \Sabre\UpdateReservation\StructType\Hotel, "%s" given', is_object($segmentType_PNRBHotelItem) ? get_class($segmentType_PNRBHotelItem) : gettype($segmentType_PNRBHotelItem)), __LINE__);
            }
        }
        $this->Hotel = $hotel;
        return $this;
    }
    /**
     * Add item to Hotel value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Hotel $item
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function addToHotel(\Sabre\UpdateReservation\StructType\Hotel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Hotel) {
            throw new \InvalidArgumentException(sprintf('The Hotel property can only contain items of \Sabre\UpdateReservation\StructType\Hotel, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Hotel[] = $item;
        return $this;
    }
    /**
     * Get Open value
     * @return \Sabre\UpdateReservation\StructType\Open[]|null
     */
    public function getOpen()
    {
        return $this->Open;
    }
    /**
     * Set Open value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Open[] $open
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function setOpen(array $open = array())
    {
        foreach ($open as $segmentType_PNRBOpenItem) {
            // validation for constraint: itemType
            if (!$segmentType_PNRBOpenItem instanceof \Sabre\UpdateReservation\StructType\Open) {
                throw new \InvalidArgumentException(sprintf('The Open property can only contain items of \Sabre\UpdateReservation\StructType\Open, "%s" given', is_object($segmentType_PNRBOpenItem) ? get_class($segmentType_PNRBOpenItem) : gettype($segmentType_PNRBOpenItem)), __LINE__);
            }
        }
        $this->Open = $open;
        return $this;
    }
    /**
     * Add item to Open value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Open $item
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function addToOpen(\Sabre\UpdateReservation\StructType\Open $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Open) {
            throw new \InvalidArgumentException(sprintf('The Open property can only contain items of \Sabre\UpdateReservation\StructType\Open, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Open[] = $item;
        return $this;
    }
    /**
     * Get Arunk value
     * @return \Sabre\UpdateReservation\StructType\Arunk[]|null
     */
    public function getArunk()
    {
        return $this->Arunk;
    }
    /**
     * Set Arunk value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Arunk[] $arunk
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function setArunk(array $arunk = array())
    {
        foreach ($arunk as $segmentType_PNRBArunkItem) {
            // validation for constraint: itemType
            if (!$segmentType_PNRBArunkItem instanceof \Sabre\UpdateReservation\StructType\Arunk) {
                throw new \InvalidArgumentException(sprintf('The Arunk property can only contain items of \Sabre\UpdateReservation\StructType\Arunk, "%s" given', is_object($segmentType_PNRBArunkItem) ? get_class($segmentType_PNRBArunkItem) : gettype($segmentType_PNRBArunkItem)), __LINE__);
            }
        }
        $this->Arunk = $arunk;
        return $this;
    }
    /**
     * Add item to Arunk value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Arunk $item
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function addToArunk(\Sabre\UpdateReservation\StructType\Arunk $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Arunk) {
            throw new \InvalidArgumentException(sprintf('The Arunk property can only contain items of \Sabre\UpdateReservation\StructType\Arunk, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Arunk[] = $item;
        return $this;
    }
    /**
     * Get General value
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB[]|null
     */
    public function getGeneral()
    {
        return $this->General;
    }
    /**
     * Set General value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB[] $general
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function setGeneral(array $general = array())
    {
        foreach ($general as $segmentType_PNRBGeneralItem) {
            // validation for constraint: itemType
            if (!$segmentType_PNRBGeneralItem instanceof \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB) {
                throw new \InvalidArgumentException(sprintf('The General property can only contain items of \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB, "%s" given', is_object($segmentType_PNRBGeneralItem) ? get_class($segmentType_PNRBGeneralItem) : gettype($segmentType_PNRBGeneralItem)), __LINE__);
            }
        }
        $this->General = $general;
        return $this;
    }
    /**
     * Add item to General value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function addToGeneral(\Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB) {
            throw new \InvalidArgumentException(sprintf('The General property can only contain items of \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->General[] = $item;
        return $this;
    }
    /**
     * Get Segment value
     * @return \Sabre\UpdateReservation\StructType\Segment[]|null
     */
    public function getSegment()
    {
        return $this->Segment;
    }
    /**
     * Set Segment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Segment[] $segment
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function setSegment(array $segment = array())
    {
        foreach ($segment as $segmentType_PNRBSegmentItem) {
            // validation for constraint: itemType
            if (!$segmentType_PNRBSegmentItem instanceof \Sabre\UpdateReservation\StructType\Segment) {
                throw new \InvalidArgumentException(sprintf('The Segment property can only contain items of \Sabre\UpdateReservation\StructType\Segment, "%s" given', is_object($segmentType_PNRBSegmentItem) ? get_class($segmentType_PNRBSegmentItem) : gettype($segmentType_PNRBSegmentItem)), __LINE__);
            }
        }
        $this->Segment = $segment;
        return $this;
    }
    /**
     * Add item to Segment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Segment $item
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public function addToSegment(\Sabre\UpdateReservation\StructType\Segment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Segment) {
            throw new \InvalidArgumentException(sprintf('The Segment property can only contain items of \Sabre\UpdateReservation\StructType\Segment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Segment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB
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
