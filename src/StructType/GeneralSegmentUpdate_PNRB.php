<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeneralSegmentUpdate.PNRB StructType
 * @subpackage Structs
 */
class GeneralSegmentUpdate_PNRB extends AbstractStructBase
{
    /**
     * The Line
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Line
     */
    public $Line;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Vendor
     */
    public $Vendor;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NumberInParty;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Location
     */
    public $Location;
    /**
     * The DateTime
     * Meta informations extracted from the WSDL
     * - documentation: Date policy begins. Ex."2013-10-23T00:00:00"
     * - minOccurs: 0
     * @var string
     */
    public $DateTime;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Code of the travel protection offering. Ex."CANCELLATION INSURANCE"
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Text;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for GeneralSegmentUpdate.PNRB
     * @uses GeneralSegmentUpdate_PNRB::setLine()
     * @uses GeneralSegmentUpdate_PNRB::setVendor()
     * @uses GeneralSegmentUpdate_PNRB::setNumberInParty()
     * @uses GeneralSegmentUpdate_PNRB::setLocation()
     * @uses GeneralSegmentUpdate_PNRB::setDateTime()
     * @uses GeneralSegmentUpdate_PNRB::setText()
     * @uses GeneralSegmentUpdate_PNRB::setOp()
     * @param \Sabre\UpdateReservation\StructType\Line $line
     * @param \Sabre\UpdateReservation\StructType\Vendor $vendor
     * @param string $numberInParty
     * @param \Sabre\UpdateReservation\StructType\Location $location
     * @param string $dateTime
     * @param string[] $text
     * @param string $op
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Line $line = null, \Sabre\UpdateReservation\StructType\Vendor $vendor = null, $numberInParty = null, \Sabre\UpdateReservation\StructType\Location $location = null, $dateTime = null, array $text = array(), $op = null)
    {
        $this
            ->setLine($line)
            ->setVendor($vendor)
            ->setNumberInParty($numberInParty)
            ->setLocation($location)
            ->setDateTime($dateTime)
            ->setText($text)
            ->setOp($op);
    }
    /**
     * Get Line value
     * @return \Sabre\UpdateReservation\StructType\Line|null
     */
    public function getLine()
    {
        return $this->Line;
    }
    /**
     * Set Line value
     * @param \Sabre\UpdateReservation\StructType\Line $line
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB
     */
    public function setLine(\Sabre\UpdateReservation\StructType\Line $line = null)
    {
        $this->Line = $line;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Sabre\UpdateReservation\StructType\Vendor|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Sabre\UpdateReservation\StructType\Vendor $vendor
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB
     */
    public function setVendor(\Sabre\UpdateReservation\StructType\Vendor $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return string|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param string $numberInParty
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: string
        if (!is_null($numberInParty) && !is_string($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
        return $this;
    }
    /**
     * Get Location value
     * @return \Sabre\UpdateReservation\StructType\Location|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \Sabre\UpdateReservation\StructType\Location $location
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB
     */
    public function setLocation(\Sabre\UpdateReservation\StructType\Location $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
        return $this;
    }
    /**
     * Get Text value
     * @return string[]|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @throws \InvalidArgumentException
     * @param string[] $text
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB
     */
    public function setText(array $text = array())
    {
        foreach ($text as $generalSegmentUpdate_PNRBTextItem) {
            // validation for constraint: itemType
            if (!is_string($generalSegmentUpdate_PNRBTextItem)) {
                throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($generalSegmentUpdate_PNRBTextItem) ? get_class($generalSegmentUpdate_PNRBTextItem) : gettype($generalSegmentUpdate_PNRBTextItem)), __LINE__);
            }
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Add item to Text value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB
     */
    public function addToText($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Text[] = $item;
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
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB
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
