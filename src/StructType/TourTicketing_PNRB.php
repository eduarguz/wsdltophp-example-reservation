<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TourTicketing.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: * add tour ticketing field 7TAV(tour operator code)/TAW(queue place date)(optional queue number) 7TAVG0/TAW15APR101 * add tour ticketing field and queue place to a branch office and add free text 7TAV(tour operator code)/TAW(Branch
 * office pseudo city code)(queue place date) (branch office optional queue number)/(tour ticketing advice free text) 7TAVXX/TAWB4T001JUN101/FINAL PAYMENT DUE
 * @subpackage Structs
 */
class TourTicketing_PNRB extends AbstractStructBase
{
    /**
     * The TourOperatorCode
     * Meta informations extracted from the WSDL
     * - documentation: Tour Operater Code.
     * - minOccurs: 0
     * @var string
     */
    public $TourOperatorCode;
    /**
     * The QueuePlaceDate
     * Meta informations extracted from the WSDL
     * - documentation: The date the PNR is placed in the queue.
     * - minOccurs: 0
     * @var string
     */
    public $QueuePlaceDate;
    /**
     * The QueueNumber
     * Meta informations extracted from the WSDL
     * - documentation: Queue identification number.
     * - minOccurs: 0
     * @var string
     */
    public $QueueNumber;
    /**
     * The BranchPCC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BranchPCC;
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
     * Constructor method for TourTicketing.PNRB
     * @uses TourTicketing_PNRB::setTourOperatorCode()
     * @uses TourTicketing_PNRB::setQueuePlaceDate()
     * @uses TourTicketing_PNRB::setQueueNumber()
     * @uses TourTicketing_PNRB::setBranchPCC()
     * @uses TourTicketing_PNRB::setComment()
     * @uses TourTicketing_PNRB::setId()
     * @uses TourTicketing_PNRB::setIndex()
     * @uses TourTicketing_PNRB::setOp()
     * @uses TourTicketing_PNRB::setElementId()
     * @uses TourTicketing_PNRB::setRPH()
     * @param string $tourOperatorCode
     * @param string $queuePlaceDate
     * @param string $queueNumber
     * @param string $branchPCC
     * @param string $comment
     * @param string $id
     * @param int $index
     * @param string $op
     * @param string $elementId
     * @param string $rPH
     */
    public function __construct($tourOperatorCode = null, $queuePlaceDate = null, $queueNumber = null, $branchPCC = null, $comment = null, $id = null, $index = null, $op = null, $elementId = null, $rPH = null)
    {
        $this
            ->setTourOperatorCode($tourOperatorCode)
            ->setQueuePlaceDate($queuePlaceDate)
            ->setQueueNumber($queueNumber)
            ->setBranchPCC($branchPCC)
            ->setComment($comment)
            ->setId($id)
            ->setIndex($index)
            ->setOp($op)
            ->setElementId($elementId)
            ->setRPH($rPH);
    }
    /**
     * Get TourOperatorCode value
     * @return string|null
     */
    public function getTourOperatorCode()
    {
        return $this->TourOperatorCode;
    }
    /**
     * Set TourOperatorCode value
     * @param string $tourOperatorCode
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB
     */
    public function setTourOperatorCode($tourOperatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($tourOperatorCode) && !is_string($tourOperatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourOperatorCode)), __LINE__);
        }
        $this->TourOperatorCode = $tourOperatorCode;
        return $this;
    }
    /**
     * Get QueuePlaceDate value
     * @return string|null
     */
    public function getQueuePlaceDate()
    {
        return $this->QueuePlaceDate;
    }
    /**
     * Set QueuePlaceDate value
     * @param string $queuePlaceDate
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB
     */
    public function setQueuePlaceDate($queuePlaceDate = null)
    {
        // validation for constraint: string
        if (!is_null($queuePlaceDate) && !is_string($queuePlaceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queuePlaceDate)), __LINE__);
        }
        $this->QueuePlaceDate = $queuePlaceDate;
        return $this;
    }
    /**
     * Get QueueNumber value
     * @return string|null
     */
    public function getQueueNumber()
    {
        return $this->QueueNumber;
    }
    /**
     * Set QueueNumber value
     * @param string $queueNumber
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB
     */
    public function setQueueNumber($queueNumber = null)
    {
        // validation for constraint: string
        if (!is_null($queueNumber) && !is_string($queueNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queueNumber)), __LINE__);
        }
        $this->QueueNumber = $queueNumber;
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
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB
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
