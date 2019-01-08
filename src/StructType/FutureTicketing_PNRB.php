<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FutureTicketing.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Ticket arrangement, today's date 7TAW/ Future ticketing date for Queue 9 placement date format (ddmmm) 7TAW(date)/ 7TAW26MAR * future ticketing date - queue 9 placement, branch 7TAW(pseudo city code)(date)/ 7TAWB4T012APR/ * place a
 * PNR into a pre-assigned special queue for future ticketing 7TAW(pseudo city code)(previously assigned two-alpha characters agent sign)(date)/ 7TAWB4T0BB05MAY/ * place a PNR into a pre-assigned special queue for current ticketing 7TAW(pseudo city
 * code)(previously assigned two-alpha characters agent sign)/ 7TAWB4T0BB/ * Request queue placement to a specific queue for future ticketing 7TAW(date)(queue number) 7TAW23JUL55/ * request queue placement to a specific queue with immediate queue
 * placement 7TAW(queue number) 7TAW142/ * request queue placement to a specific queue at an authorized branch for future ticketing 7TAW(pseudo city code)(date)(queue number)/ 7TAWB4T023MAY55/ * request queue placement to a specific queue at an
 * authorized branch with immediate queue placement 7TAW(pseudo city code)(date)(queue number)/ 7TAWB4T055/ * request queue placement to a specific queue for future ticketing 7TAW(date)(queue number)/(time)/ 7TAW23JUL55/0300P/
 * @subpackage Structs
 */
class FutureTicketing_PNRB extends AbstractStructBase
{
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * The CityCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CityCode;
    /**
     * The BranchPCC
     * Meta informations extracted from the WSDL
     * - documentation: The Pseudo City Code of the agent that generated the TK/TE/TR/TV/TM ticketing entry or the Pseudo City Code to whom the PNR has been queued to perform ticketing. Ex."3Z71"
     * - minOccurs: 0
     * @var string
     */
    public $BranchPCC;
    /**
     * The QueueCode
     * Meta informations extracted from the WSDL
     * - documentation: Queue identification code/pic code.
     * - minOccurs: 0
     * @var string
     */
    public $QueueCode;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - documentation: Date of Future Ticketing. Ex. "18OCT"
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - documentation: Time of Future Ticketing. Ex. "0400A"
     * - minOccurs: 0
     * @var string
     */
    public $Time;
    /**
     * The QueueNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxExclusive: 511
     * - minExclusive: 50
     * @var int
     */
    public $QueueNumber;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
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
     * Constructor method for FutureTicketing.PNRB
     * @uses FutureTicketing_PNRB::setCode()
     * @uses FutureTicketing_PNRB::setCityCode()
     * @uses FutureTicketing_PNRB::setBranchPCC()
     * @uses FutureTicketing_PNRB::setQueueCode()
     * @uses FutureTicketing_PNRB::setDate()
     * @uses FutureTicketing_PNRB::setTime()
     * @uses FutureTicketing_PNRB::setQueueNumber()
     * @uses FutureTicketing_PNRB::setComment()
     * @uses FutureTicketing_PNRB::setId()
     * @uses FutureTicketing_PNRB::setIndex()
     * @uses FutureTicketing_PNRB::setOp()
     * @uses FutureTicketing_PNRB::setElementId()
     * @uses FutureTicketing_PNRB::setRPH()
     * @param string $code
     * @param string $cityCode
     * @param string $branchPCC
     * @param string $queueCode
     * @param string $date
     * @param string $time
     * @param int $queueNumber
     * @param string $comment
     * @param string $id
     * @param int $index
     * @param string $op
     * @param string $elementId
     * @param string $rPH
     */
    public function __construct($code = null, $cityCode = null, $branchPCC = null, $queueCode = null, $date = null, $time = null, $queueNumber = null, $comment = null, $id = null, $index = null, $op = null, $elementId = null, $rPH = null)
    {
        $this
            ->setCode($code)
            ->setCityCode($cityCode)
            ->setBranchPCC($branchPCC)
            ->setQueueCode($queueCode)
            ->setDate($date)
            ->setTime($time)
            ->setQueueNumber($queueNumber)
            ->setComment($comment)
            ->setId($id)
            ->setIndex($index)
            ->setOp($op)
            ->setElementId($elementId)
            ->setRPH($rPH);
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
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
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
     * Get CityCode value
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->CityCode;
    }
    /**
     * Set CityCode value
     * @param string $cityCode
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
     */
    public function setCityCode($cityCode = null)
    {
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityCode)), __LINE__);
        }
        $this->CityCode = $cityCode;
        return $this;
    }
    /**
     * Get BranchPCC value
     * @return string|null
     */
    public function getBranchPCC()
    {
        return $this->BranchPCC;
    }
    /**
     * Set BranchPCC value
     * @param string $branchPCC
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
     */
    public function setBranchPCC($branchPCC = null)
    {
        // validation for constraint: string
        if (!is_null($branchPCC) && !is_string($branchPCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($branchPCC)), __LINE__);
        }
        $this->BranchPCC = $branchPCC;
        return $this;
    }
    /**
     * Get QueueCode value
     * @return string|null
     */
    public function getQueueCode()
    {
        return $this->QueueCode;
    }
    /**
     * Set QueueCode value
     * @param string $queueCode
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
     */
    public function setQueueCode($queueCode = null)
    {
        // validation for constraint: string
        if (!is_null($queueCode) && !is_string($queueCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queueCode)), __LINE__);
        }
        $this->QueueCode = $queueCode;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
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
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
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
     * Get QueueNumber value
     * @return int|null
     */
    public function getQueueNumber()
    {
        return $this->QueueNumber;
    }
    /**
     * Set QueueNumber value
     * @param int $queueNumber
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
     */
    public function setQueueNumber($queueNumber = null)
    {
        // validation for constraint: maxExclusive
        if ($queueNumber >= 511) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be striclty inferior to 511, "%s" given', $queueNumber), __LINE__);
        }
        // validation for constraint: minExclusive
        if ($queueNumber <= 50) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be strictly superior to 50, "%s" given', $queueNumber), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($queueNumber) && !is_numeric($queueNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($queueNumber)), __LINE__);
        }
        $this->QueueNumber = $queueNumber;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
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
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
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
