<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Remark.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Each remark line can contain a max of 70 chars The entire remarks field can contain a max of 32,767 chars. Remarks formats: * add remark 5(free text) 5JASON AGE 6YRS * add more than one line of remark in one entry 5(free
 * text)§5(free text) 5CHECK PASSPORTS§5CHECK ADDRESS FIELD * add historical remarks to store info in history 5H-(free text) 5H-FARE QUOTED 690.00 * enter alpha coded remarks 5(letter)‡(free text) 5H‡HOTEL NEEDED IN SWITZERLAND 5C‡CALL AND MAKE
 * CAR RESERVATIONS ON DEC 23 * add corporate identification number 5C-CORP(corporate #) 5C-CORPD14569812 * enter hidden remark 5HR-(free text) 5HR-XYZ CORP PSGRS RECIEVE FOLLOWING DISCOUNTS 5HR-25 PERCENT OFF ALL CAR RENTALS NOTE: max 70 chars after
 * the 5. Total size of complete remarks field in any PNR is 32.762. To enter multiple lines use the § * modify basic remark 5(line #)¤(new text) 59¤YOU MUST BRING YOUR PHOTO ID * modify an invoice remark 5(line #)¤.(new text) 52¤.THANKS * modify
 * an itinerary remark 5(line #)¤‡(new text) 59¤‡HAVE A GOOD TRIP * delete remarks 5(line #)¤ 53¤ *delete a range of remarks lines 5(line #)-(line #)¤ 59-12¤ * delete specific remarks lines 5(line #),(line #)¤ 59,12¤ NOTE: When you delete
 * specific remarks lines, you can delete a max of 5 per entry. * insert a new remark after specified remarks line 5(line # new text is to follow)/(free text) 52/PLEASE ALLOW EXTRA TIME DUE TO AIRPORT CONSTRUCTION * insert a new remark as the first
 * remark in a PNR 50/(free text) 50/HAVE ADVISED ALL DOCS * move and insert specific remarks 5(remark line you want to insert after)//(remark line to be moved),(remark line to be moved) 57//10,2 NOTE: the above moves remarks 10 and 2 and inserts them
 * after remark 7 * move and insert a range of remarks 5(remark line you want to insert after)//(range of remarks) 57//3-5 * combine a range of remarks and specific remarks lines 5(remark line you want to insert after)//(range of remarks),(specific
 * remark line) 57//3-5,9 * reverse order of remarks - example from 1 through 10 50//(remark lines in descending order) 50//10,9,8,7,6,5,4,3,2,1
 * @subpackage Structs
 */
class Remark_PNRB extends AbstractStructBase
{
    /**
     * The RemarkLines
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RemarkLines_PNRB
     */
    public $RemarkLines;
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
     * The type
     * @var string
     */
    public $type;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $code;
    /**
     * The segmentNumber
     * Meta informations extracted from the WSDL
     * - documentation: "segmentNumber" is used to return the segment number associated with the particular remark line if applicable
     * - use: optional
     * @var string
     */
    public $segmentNumber;
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
     * Constructor method for Remark.PNRB
     * @uses Remark_PNRB::setRemarkLines()
     * @uses Remark_PNRB::setIndex()
     * @uses Remark_PNRB::setId()
     * @uses Remark_PNRB::setType()
     * @uses Remark_PNRB::setOp()
     * @uses Remark_PNRB::setCode()
     * @uses Remark_PNRB::setSegmentNumber()
     * @uses Remark_PNRB::setElementId()
     * @uses Remark_PNRB::setRPH()
     * @param \Sabre\UpdateReservation\StructType\RemarkLines_PNRB $remarkLines
     * @param int $index
     * @param string $id
     * @param string $type
     * @param string $op
     * @param string $code
     * @param string $segmentNumber
     * @param string $elementId
     * @param string $rPH
     */
    public function __construct(\Sabre\UpdateReservation\StructType\RemarkLines_PNRB $remarkLines = null, $index = null, $id = null, $type = null, $op = null, $code = null, $segmentNumber = null, $elementId = null, $rPH = null)
    {
        $this
            ->setRemarkLines($remarkLines)
            ->setIndex($index)
            ->setId($id)
            ->setType($type)
            ->setOp($op)
            ->setCode($code)
            ->setSegmentNumber($segmentNumber)
            ->setElementId($elementId)
            ->setRPH($rPH);
    }
    /**
     * Get RemarkLines value
     * @return \Sabre\UpdateReservation\StructType\RemarkLines_PNRB|null
     */
    public function getRemarkLines()
    {
        return $this->RemarkLines;
    }
    /**
     * Set RemarkLines value
     * @param \Sabre\UpdateReservation\StructType\RemarkLines_PNRB $remarkLines
     * @return \Sabre\UpdateReservation\StructType\Remark_PNRB
     */
    public function setRemarkLines(\Sabre\UpdateReservation\StructType\RemarkLines_PNRB $remarkLines = null)
    {
        $this->RemarkLines = $remarkLines;
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
     * @return \Sabre\UpdateReservation\StructType\Remark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\Remark_PNRB
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Sabre\UpdateReservation\EnumType\RemarkType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RemarkType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\Remark_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RemarkType_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\RemarkType_PNRB::getValidValues())), __LINE__);
        }
        $this->type = $type;
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
     * @return \Sabre\UpdateReservation\StructType\Remark_PNRB
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
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\Remark_PNRB
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get segmentNumber value
     * @return string|null
     */
    public function getSegmentNumber()
    {
        return $this->segmentNumber;
    }
    /**
     * Set segmentNumber value
     * @param string $segmentNumber
     * @return \Sabre\UpdateReservation\StructType\Remark_PNRB
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($segmentNumber) && !is_string($segmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentNumber)), __LINE__);
        }
        $this->segmentNumber = $segmentNumber;
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
     * @return \Sabre\UpdateReservation\StructType\Remark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\Remark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\Remark_PNRB
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
