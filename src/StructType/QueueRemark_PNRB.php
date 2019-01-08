<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueueRemark.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: * add future queue placement in remarks field 5Q-(PCC)(queue #)/(prefatory instruction number) 5Q-B4T03AUG55/11 NOTE: max of 14 5Q- entries in one PNR. Cannot enter remarks beginning with 5QQ.
 * @subpackage Structs
 */
class QueueRemark_PNRB extends AbstractStructBase
{
    /**
     * The PseudoCityCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PseudoCityCode;
    /**
     * The QueueNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $QueueNumber;
    /**
     * The FutureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FutureDate;
    /**
     * The InstructionNumber
     * Meta informations extracted from the WSDL
     * - documentation: prefatory instruction number | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - minOccurs: 0
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $InstructionNumber;
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
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for QueueRemark.PNRB
     * @uses QueueRemark_PNRB::setPseudoCityCode()
     * @uses QueueRemark_PNRB::setQueueNumber()
     * @uses QueueRemark_PNRB::setFutureDate()
     * @uses QueueRemark_PNRB::setInstructionNumber()
     * @uses QueueRemark_PNRB::setIndex()
     * @uses QueueRemark_PNRB::setId()
     * @uses QueueRemark_PNRB::setOp()
     * @uses QueueRemark_PNRB::setRPH()
     * @param string $pseudoCityCode
     * @param int $queueNumber
     * @param string $futureDate
     * @param int $instructionNumber
     * @param int $index
     * @param string $id
     * @param string $op
     * @param string $rPH
     */
    public function __construct($pseudoCityCode = null, $queueNumber = null, $futureDate = null, $instructionNumber = null, $index = null, $id = null, $op = null, $rPH = null)
    {
        $this
            ->setPseudoCityCode($pseudoCityCode)
            ->setQueueNumber($queueNumber)
            ->setFutureDate($futureDate)
            ->setInstructionNumber($instructionNumber)
            ->setIndex($index)
            ->setId($id)
            ->setOp($op)
            ->setRPH($rPH);
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode()
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Sabre\UpdateReservation\StructType\QueueRemark_PNRB
     */
    public function setPseudoCityCode($pseudoCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
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
     * @return \Sabre\UpdateReservation\StructType\QueueRemark_PNRB
     */
    public function setQueueNumber($queueNumber = null)
    {
        // validation for constraint: maxInclusive
        if ($queueNumber > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $queueNumber), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($queueNumber < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $queueNumber), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($queueNumber) && !is_numeric($queueNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($queueNumber)), __LINE__);
        }
        $this->QueueNumber = $queueNumber;
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
     * @return \Sabre\UpdateReservation\StructType\QueueRemark_PNRB
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
     * Get InstructionNumber value
     * @return int|null
     */
    public function getInstructionNumber()
    {
        return $this->InstructionNumber;
    }
    /**
     * Set InstructionNumber value
     * @param int $instructionNumber
     * @return \Sabre\UpdateReservation\StructType\QueueRemark_PNRB
     */
    public function setInstructionNumber($instructionNumber = null)
    {
        // validation for constraint: maxInclusive
        if ($instructionNumber > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $instructionNumber), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($instructionNumber < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $instructionNumber), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($instructionNumber) && !is_numeric($instructionNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($instructionNumber)), __LINE__);
        }
        $this->InstructionNumber = $instructionNumber;
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
     * @return \Sabre\UpdateReservation\StructType\QueueRemark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\QueueRemark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\QueueRemark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\QueueRemark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\QueueRemark_PNRB
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
