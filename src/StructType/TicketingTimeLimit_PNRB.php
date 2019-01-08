<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketingTimeLimit.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: * add ticketing time limit for future date and specify a downline city 8(downline city)-(carrier code)(time)(future date) 8SEA-DL6P/17MAY * add ticketing time limit for today's date 8(downline city)-(carrier code)(time) 8LON-BA6P *
 * add ticketing time limit for American Airlines, assume today's date 8(time) 84P * add ticketing time limit for American Airlines, specify date 8(time)(date) 87P/09NOV * add ticketing time limit for American Airlines, indicate 30 minute time limit 830
 * @subpackage Structs
 */
class TicketingTimeLimit_PNRB extends AbstractStructBase
{
    /**
     * The DownlineCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DownlineCity;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an
     * optional uppercase letter.
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string
     */
    public $CarrierCode;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Time;
    /**
     * The FutureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FutureDate;
    /**
     * The ThirtyMinuteInterval
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ThirtyMinuteInterval;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
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
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * The elementId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $elementId;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for TicketingTimeLimit.PNRB
     * @uses TicketingTimeLimit_PNRB::setDownlineCity()
     * @uses TicketingTimeLimit_PNRB::setCarrierCode()
     * @uses TicketingTimeLimit_PNRB::setTime()
     * @uses TicketingTimeLimit_PNRB::setFutureDate()
     * @uses TicketingTimeLimit_PNRB::setThirtyMinuteInterval()
     * @uses TicketingTimeLimit_PNRB::setId()
     * @uses TicketingTimeLimit_PNRB::setIndex()
     * @uses TicketingTimeLimit_PNRB::setOp()
     * @uses TicketingTimeLimit_PNRB::setElementId()
     * @uses TicketingTimeLimit_PNRB::setRPH()
     * @param string $downlineCity
     * @param string $carrierCode
     * @param string $time
     * @param string $futureDate
     * @param string $thirtyMinuteInterval
     * @param string $id
     * @param int $index
     * @param string $op
     * @param string $elementId
     * @param string $rPH
     */
    public function __construct($downlineCity = null, $carrierCode = null, $time = null, $futureDate = null, $thirtyMinuteInterval = null, $id = null, $index = null, $op = null, $elementId = null, $rPH = null)
    {
        $this
            ->setDownlineCity($downlineCity)
            ->setCarrierCode($carrierCode)
            ->setTime($time)
            ->setFutureDate($futureDate)
            ->setThirtyMinuteInterval($thirtyMinuteInterval)
            ->setId($id)
            ->setIndex($index)
            ->setOp($op)
            ->setElementId($elementId)
            ->setRPH($rPH);
    }
    /**
     * Get DownlineCity value
     * @return string|null
     */
    public function getDownlineCity()
    {
        return $this->DownlineCity;
    }
    /**
     * Set DownlineCity value
     * @param string $downlineCity
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
     */
    public function setDownlineCity($downlineCity = null)
    {
        // validation for constraint: string
        if (!is_null($downlineCity) && !is_string($downlineCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($downlineCity)), __LINE__);
        }
        $this->DownlineCity = $downlineCity;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @param string $carrierCode
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($carrierCode) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($carrierCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Get FutureDate value
     * @return string|null
     */
    public function getFutureDate()
    {
        return $this->FutureDate;
    }
    /**
     * Set FutureDate value
     * @param string $futureDate
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
     */
    public function setFutureDate($futureDate = null)
    {
        // validation for constraint: string
        if (!is_null($futureDate) && !is_string($futureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($futureDate)), __LINE__);
        }
        $this->FutureDate = $futureDate;
        return $this;
    }
    /**
     * Get ThirtyMinuteInterval value
     * @return string|null
     */
    public function getThirtyMinuteInterval()
    {
        return $this->ThirtyMinuteInterval;
    }
    /**
     * Set ThirtyMinuteInterval value
     * @param string $thirtyMinuteInterval
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
     */
    public function setThirtyMinuteInterval($thirtyMinuteInterval = null)
    {
        // validation for constraint: string
        if (!is_null($thirtyMinuteInterval) && !is_string($thirtyMinuteInterval)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($thirtyMinuteInterval)), __LINE__);
        }
        $this->ThirtyMinuteInterval = $thirtyMinuteInterval;
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
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
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
     * Get elementId value
     * @return string|null
     */
    public function getElementId()
    {
        return $this->elementId;
    }
    /**
     * Set elementId value
     * @param string $elementId
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
     */
    public function setElementId($elementId = null)
    {
        // validation for constraint: string
        if (!is_null($elementId) && !is_string($elementId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($elementId)), __LINE__);
        }
        $this->elementId = $elementId;
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
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
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
